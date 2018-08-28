<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Mailers\Mailer;

use App\Models\TravelCompanion;
use App\Models\Alerts_subscription;
use App\Models\Feedback;
use App\Models\Blog;
use App\Models\Blog_user;
use App\Models\Partner;

class ApiController extends Controller
{
    protected $mailer;
    function __construct(Mailer $mailer){
        $this->mailer = $mailer;
    }
    
    private function send_mail($email, $details, $subject,$template) {
        $view = 'mail_templates.'.$template;
        $subject = $subject;
        $data['data'] = $details;
        $this->mailer->sendTo($email, $subject, $view, $data);
    }
    
    public function travel_companion(Request $request) {        
        $user = Auth::User();
        $friend = TravelCompanion::where('user_id', $user->id)->where('firstname', $request->first_name)->first();
        if ($friend) {
            $friend->title = $request->title;
            $friend->surname = $request->last_name;
            $friend->dob = $request->day." ".$request->month." ".$request->year;
            $friend->save();
        } else {
            $traveler_info = [
                'user_id' => $user->user_id,
                'title' => $request->title,
                'surname' => $request->last_name,
                'firstname' => $request->first_name,
                'dob' => $request->day." ".$request->month." ".$request->year
            ];        
            TravelCompanion::create($traveler_info);
        }        
        return redirect('travel');
    }
    public function book_alert(Request $request) {
        $user = Auth::User();
        $alert = Alerts_subscription::where('user_id', $user->user_id)->where('destination_date', $request->date)->first();
        if ($alert) {
            $alert->destination = $request->destination;            
            $alert->save();
        } else {
            $alert_info = [
                'user_id' => $user->user_id,                
                'destination' => $request->destination,
                'destination_date' => $request->date
            ];        
            Alerts_subscription::create($alert_info);
        }        
        return redirect('alerts');
    }

    public function subscription_newsletter(Request $request) {
        $user = Auth::User();
        $newsletter = Alerts_subscription::where('user_id', $user->user_id)->first();
        if ($newsletter) {            
            if ($request->type == "99") {               
                $newsletter->frequancy = "all";
            } else if ($request->type == "66") {                
                $newsletter->frequancy = "2week";                
            } else if ($request->type == "33") {               
                $newsletter->frequancy = "1week";
            } else if ($request->type == "0") {                
                $newsletter->frequancy = "none";
            }            
            $newsletter->save();
        } else {        
            if ($request->type == "99") {        
                $frequancy= ['frequancy' => 'all'];
            } else if ($request->type == "66") {
                $frequancy= ['frequancy' => '2week'];
            } else if ($request->type == "33") {
                $frequancy= ['frequancy' => '1week'];
            } else if ($request->type == "0") {
                $frequancy= ['frequancy' => 'none'];
            }
            Alerts_subscription::create($frequancy);
        }
        return response()->json('success');
    }

    public function feedback_rate(Request $request) {
        $user = Auth::User();
        if (!Feedback::where('user_id', $user->user_id)->first()) {
            $feedback = [
                'user_id' => $user->user_id,
                'rate' => $request->rate
            ];
            Feedback::create($feedback);
        } else {
            $feedback =Feedback::where('user_id', $user->user_id)->first();
            $feedback->rate = $request->rate;
            $feedback->save();
        }
        $this->send_mail('contact@insidersuite.com',$request,$user->username,'feedback');
        return response()->json('success');
    }
    
    public function blog_favourite(Request $request) {
        $blog = Blog::where('id', $request->id)->first();
        $blog->like_count += 1;
        $blog->save();
        $set_like = [
            'blog_id' => $request->id, 
            'user_id' => Auth::User()->user_id
        ];
        
        Blog_user::create($set_like);
        return response()->json($blog->like_count);
    }

    public function add_partner (Request $request) {        
        $partner = Partner::where('email', $request->email)->first();
        if ($partner) {
            return 'error';
        } else {
            Partner::create($request->all());
            return 'success';
        }        
    }
}   

