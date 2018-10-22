<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Mailers\Mailer;
use App\Mail\UserRegister;
use App\User;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    protected $mailer;
    function __construct(Mailer $mailer){
        $this->mailer = $mailer;

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
     private function send_mail($email, $details, $subject, $template)
    {
        // email
        $view = 'mail_templates.'.$template;

        $subject = $subject;
        $data['data'] = $details;

        $this->mailer->sendTo($email, $subject, $view, $data);
    }

    public function registration(Request $request)
    {
        $referal = User::where('referal_code',$request->referal_code)->first();
        if($referal !== NULL ){
            $referal->referal_count = $referal->referal_count++;
            $referal->save();
        }
        $check = User::where('email', $request->email)->exists();
        if($check == false){
            $username = $request->firstname." ".$request->lastname;
            $user_name_check = User::where('username',$username)->exists();
            if($user_name_check == false){
                $user = new User();
                $string = str_replace(' ', '', $username);
                $user->username = $username;
                $user->first_name = $request->firstname;
                $user->last_name = $request->lastname;
                $user->email = $request->email;
                $user->referal_code = $string.str_random(6);
                if (strlen($request->password) <= '8') {
                    return response()->json('Password must over 8 Characters!');
                } else if (!preg_match("#[0-9]+#",$request->password)) {
                    return response()->json('Password must contain 1 Number!');
                } else if (!preg_match("#[A-Z]+#",$request->password)) {
                    return response()->json('Password must contain 1 Capital Letter!');
                } else if (!preg_match("#[a-z]+#",$request->password)) {
                    return response()->json('Password must contain 1 Lowercase Letter!');
                } else {
                    $user->password = Hash::make($request->password);
                }
                $user->user_role_idFk = "1";
                $user->save();
                Auth::login($user);
                // $this->send_mail('contact@insidersuite.com',$request,'New User Signup','signup');
                // $this->send_mail($request->email,$request,'New User Signup','signup');
                return response()->json('success');
            }else{
                return response()->json('Username Already Exists!');
            }
        }else{
            return response()->json('Email Already Registered!');
        }
    }
}
