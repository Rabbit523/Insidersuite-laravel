<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Socialite;
use App\User;
use App\Mailers\Mailer;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $mailer;
    public function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
        $this->middleware('guest')->except('logout');
    }

    private function send_mail($email, $details, $subject,$template) {
        $view = 'mail_templates.'.$template;
        $subject = $subject;
        $data['data'] = $details;
        $this->mailer->sendTo($email, $subject, $view, $data);
    }

    public function authenticateUser(Request $request) {           
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            if (Auth::User()->role == 0) {
                return response()->json('dashboard');
            } else if (Auth::User()->role == 1) {
                if (Auth::User()->host_checked == "true") {
                    return response()->json('offers');
                } else if (Auth::User()->host_checked == null) {
                    return response()->json('host_experiences');
                }                
            }            
        } else{
            return response()->json('Invalid Email or Password!');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/')->with('success','You have been logged out');
    }

    public function facebook_login_redirect(Request $request) {
        $referal_code = "";
        if (isset($request->referal_code)) {
            $referal_code = $referal_code;
        }
        session(['referal_code' => $referal_code]);
        return Socialite::driver('facebook')->redirect();
    }

    public function facebook_login_callback() {
        $user = Socialite::driver('facebook')->user();
        $check = User::where('email', $user->email)->first();
        
        if (count($check) > 0) {
            if ($check->profile_img == NULL) {
                $check->profile_img = $user->avatar;
                $check->save();
            }
            Auth::Login($check);
            return redirect('offers');
        }else{
            $referal = User::where('referal_code',session('referal_code'))->first();
            
            if(count($referal) > 0){
                if ($referal->profile_img == NULL) {
                    $referal->profile_img = $user->avatar;
                    $referal->save();
                }
                $referal->referal_count = $referal->referal_count++;
                $referal->save();
            }
            
            $string = str_replace(' ', '', $user->name);
            $new_user = new User();
            $new_user->username     = $user->name;
            $new_user->email        = $user->email;
            $new_user->referal_code = $string.str_random(6);
            $new_user->user_role_idFk = 1;
            $new_user->profile_img = $user->avatar;
            $new_user->save();
            Auth::Login($new_user);
            $this->send_mail('contact@insidersuite.com',$new_user,'New User Signup','signup');
            $this->send_mail($new_user->email,$new_user,'New User Signup','signup');
            return redirect('offers');
        }
    }

    public function google_login_redirect(Request $request) {
        $referal_code = "";
        if (isset($request->referal_code)) {
            $referal_code = $referal_code;
        }
        session(['referal_code' => $referal_code]);
        return Socialite::driver('google')->redirect();
    }

    public function google_login_callback() {
        $user = Socialite::driver('google')->stateless()->user();
        $check = User::where('email', $user->email)->first();
        if (count($check) > 0) {
            if ($check->profile_img == NULL) {
                $check->profile_img = $user->avatar;
                $check->save();
            }
            Auth::Login($check);
            return redirect('offers');
        }else{
            $referal = User::where('referal_code',session('referal_code'))->first();
            if(count($referal) > 0){
                if ($referal->profile_img == NULL) {
                    $referal->profile_img = $user->avatar;
                    $referal->save();
                }
                $referal->referal_count = $referal->referal_count++;
                $referal->save();
            }
            $string = str_replace(' ', '', $user->name);
            $new_user = new User();
            $new_user->username     = $user->name;
            $new_user->email        = $user->email;
            $new_user->referal_code = $string.str_random(6);
            $new_user->user_role_idFk = 1;
            $new_user->profile_img = $user->avatar;
            $new_user->save();
            Auth::Login($new_user);
            $this->send_mail('contact@insidersuite.com',$new_user,'New User Signup','signup');
            $this->send_mail($new_user->email,$new_user,'New User Signup','signup');
            return redirect('offers');
        }
    }
}
