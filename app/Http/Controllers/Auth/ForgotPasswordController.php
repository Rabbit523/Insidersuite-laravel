<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use App\Mailers\Mailer;
use Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    private function send_mail($email, $details, $subject)
    {
        // email
        $mailer = new Mailer();

        $view = 'mail_templates.forgot_password';

        $subject = $subject;
        $data['token'] = $details->forgot_password_token;

        $mailer->sendTo($email, $subject, $view, $data);
    }

    public function forgot_password_mail(Request $request)
    {
        // dd("aaaa");
        $user = User::where('email',$request->email)->first();
        if($user){
            $user->forgot_password_token = str_random(50);
            $user->save();
            $this->send_mail($user->email,$user,'Reset Your Password');
            return redirect('/')->with('success','An email has been sent with the link to reset you password');
        }else{
            return redirect()->back()->with("error","Email doesn't Exists");
        }
    }

    public function reset_password_page($token)
    {
        // $user = User::where('forgot_password_token',$token)->first();
        // if(count($user) > 0){
            return view('forgot_password',compact('token'));
        // }else{
        //     return redirect('/')->with('error','Token Expired');
        // }
    }

    public function update_password(Request $request)
    {
        if($request->password == $request->confirm_password){

            $user = User::where('forgot_password_token',$request->token)->first();
            if(count($user) > 0){
                $user->forgot_password_token = null;
                if (strlen($request->password) <= '8') {
                    return redirect()->back()->with('error','Password must over 8 Characters!');
                } else if (!preg_match("#[0-9]+#",$request->password)) {
                    return redirect()->back()->with('error','Password must contain 1 Number!');
                } else if (!preg_match("#[A-Z]+#",$request->password)) {
                    return redirect()->back()->with('error','Password must contain 1 Capital Letter!');
                } else if (!preg_match("#[a-z]+#",$request->password)) {
                    return redirect()->back()->with('error','Password must contain 1 Lowercase Letter!');
                } else {
                    $user->password = Hash::make($request->password);
                    $user->save();
                    return redirect('/')->with('success','Password is Updated!');
                }
            }
        }else{
            return redirect()->back()->with('error','Password dismatch!');
        }
    }
}
