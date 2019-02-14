<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Http\Request;

use App\Mailers\Mailer;

use App\Models\TravelCompanion;
use App\Models\Alerts;
use App\Models\Subscriptions;
use App\Models\Feedback;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Career_detail;
use App\Models\Blog_user;
use App\Models\Partner;
use App\Models\Offer;
use App\Models\Contact_message;
use App\Models\Newsletters;
use App\Models\Newsletter_image;
use App\Models\Newsletter_list;
use App\Models\GiftCard;
use App\Models\Experience;
use App\Models\ExperienceDetail;
use App\Models\Accomodation;
use App\Models\AccommodationPractical;
use App\Models\Activity;
use App\Models\ActivityPractical;
use App\Models\Accommodation_Image;
use App\Models\Promotion;
use App\Models\Calendar_Accommodation;
use App\Models\Calendar_Activity;
use App\Models\Accom_Exp;
use App\Models\Activity_Image;
use App\Models\Favourite;
use App\Models\InviteMail;
use App\Models\Payment;
use App\Models\ExpDetailImage;
use App\Models\Sponsor_Voucher;
use App\User;

use App\Mail\Invite_Mail;
use App\Mail\Sponsor_Mail;
use App\Mail\SponsorSuccessMail;
use App\Mail\ReviewMail;

use Hash;
use DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {        
        $current_date = date("m/d/Y");
        $promos = Promotion::get();
        $schedule->call(function () {
            foreach($promos as $promo) {
                $start_date = $promo->start_date;
                $end_date = $promo->end_date;
                if ($current_date >= $end_date) {
                    $promo->status = "inactive";
                    $promo->save();
                } else {
                    $promo->status = "active";
                    $promo->save();
                }
            }
        })->daily();
    }
}

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
            $friend->day = $request->day;
            $friend->month = $request->month;
            $friend->year = $request->year;
            $friend->save();
        } else {
            $traveler_info = [
                'user_id' => $user->user_id,
                'title' => $request->title,
                'surname' => $request->last_name,
                'firstname' => $request->first_name,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year
            ];
            TravelCompanion::create($traveler_info);
        }
        return redirect('travel');
    }
    public function book_alert(Request $request) {
        $user = Auth::User();
        $alert = Alerts::where('user_id', $user->user_id)->where('departure_date', $request->date)->first();
        if ($alert) {
            $alert->destination = $request->destination;
            $alert->save();
        } else {
            $alert_info = [
                'user_id' => $user->user_id,
                'destination' => $request->destination,
                'departure_date' => $request->date
            ];
            Alerts::create($alert_info);
        }
        return redirect('alerts');
    }

    public function get_subscription_newsletter(Request $request) {
        $newsletter = Subscriptions::where('user_id', $request->user_id)->first();
        if ($newsletter) {
            return response()->json($newsletter->frequancy);
        } else {
            return response()->json("all");
        }
    }
    
    public function set_subscription_newsletter(Request $request) {
        $user = Auth::User();
        $newsletter = Subscriptions::where('user_id', $user->user_id)->first();
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
                $frequancy= ['user_id' => $user->user_id, 'frequancy' => 'all'];
            } else if ($request->type == "66") {
                $frequancy= ['user_id' => $user->user_id, 'frequancy' => '2week'];
            } else if ($request->type == "33") {
                $frequancy= ['user_id' => $user->user_id, 'frequancy' => '1week'];
            } else if ($request->type == "0") {
                $frequancy= ['user_id' => $user->user_id, 'frequancy' => 'none'];
            }
            Subscriptions::create($frequancy);
        }
        return response()->json($newsletter);
    }
    
    public function send_sponsor_mail(Request $request) {
        $emails = $request->emails;
        $link = $request->link;
        $data = [
            "sender_name" => Auth::User()->username,
            "link" => $request->link
        ];
        foreach ($emails as $email) {
            Mail::to($email)->send(new Sponsor_Mail($data));
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
        if ($request->type == "add") {
            $blog->like_count += 1;
            $blog->save();
            $set_like = [
                'blog_id' => $request->id,
                'user_id' => Auth::User()->user_id
            ];
            Blog_user::create($set_like);
        } else {
             $blog->like_count -= 1;
             $blog->save();
             Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', $request->id)->delete();
        }
        return response()->json($blog->like_count);
    }

    public function get_experience(Request $request) {
        $exp = Experience::where('id', $request->exp_id)->first();
        return response()->json($exp);
    }

    public function get_experience_details(Request $request) {
        $exp = ExperienceDetail::where('experience_id', $request->exp_id)->get();
        return response()->json($exp);
    }

    public function accom_image(Request $request) {
		if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/accom_imgs") ."/" . $request->file->store('', 'accom_imgs');
			$arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            $data = [
                "offer_id" => $request->offer_id,
                "accom_id" => $request->accom_id,
                "path" => $path
            ];
            $accom = Accommodation_Image::create($data);
            return response()->json($accom);
		} else {
            return ["error" => "No image attached"];
		}
    }
    
    public function activity_img(Request $request) {
		if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/accom_imgs") ."/" . $request->file->store('', 'accom_imgs');
			$arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            $data = [
                "offer_id" => $request->offer_id,
                "act_id" => $request->activity_id,
                "path" => $path
            ];
            $act = Activity_Image::create($data);
            return response()->json($act);
		} else {
            return ["error" => "No image attached"];
		}
    }

    public function get_progress_status(Request $request) {        
        $exp = Experience::where('id', $request->exp_id)->first();
        $exp_ac_count = ExperienceDetail::where('experience_id', $request->exp_id)->where('type', 'accommodation')->count();
        $exp_at_count = ExperienceDetail::where('experience_id', $request->exp_id)->where('type', 'activity')->count();
        $data = [
            'exp'=> $exp,
            'exp_ac_count' => $exp_ac_count,
            'exp_at_count' => $exp_at_count
        ];
        return response()->json($data);
    }

    public function get_notification() {
        $count = Favourite::where('user_id', Auth::User()->user_id)->count();
        return response()->json($count);
    }

    public function save_accommodation(Request $request) {        
        $data = [
            "city_id" => $request->city,
            "name" => $request->name,
            "full_address" => $request->address,
            "location_longtitude" => $request->longitude,
            "location_latitude" => $request->latitude,
            "category" => $request->category,
            "insider_rate" => $request->insider_rate,
            "content" => $request->content,
            "review" => 0,
            "room_nb" => $request->room_nb,
            'status' => $request->status,
            'max_capacity' => $request->max_capacity
        ];
        $accom = Accomodation::create($data);
    
        $offer = Offer::where('id', $request->city)->first();
        $offer->accomodation += 1;
        $offer->save();
       
        $data = [
            'accom_id' => $accom->id,
            'offer_id' => $request->city,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'breakfast' => $request->breakfast,
            'jacuzzi_access' => $request->jacuzzi,
            'gym_access' => $request->gym,
            'breakfast_t' => $request->breakfast_t,
            'jacuzzi_t' => $request->jacuzzi_t,
            'gym_t' => $request->gym_t,
            'note' => $request->note
        ];
        $practical = AccommodationPractical::create($data);
        $accom['practical_id'] = $practical->id;
        $accom->save();
        return response()->json($accom->id);
    }
    
    public function save_activity(Request $request) {
        $data = [
            "city_id" => $request->city,
            "name" => $request->name,
            "address" => $request->address,
            "location_longitude" => $request->longitude,
            "location_latitude" => $request->latitude,
            "content" => $request->content,
            "activity_hours" => $request->activity_hours,
            "category" => $request->category,
            "insider_rate" => $request->insider_rate,
            "language" => $request->language,
            "review" => 0,
            'status' => $request->status
        ];
        $act = Activity::create($data);
        
        $offer = Offer::where('id', $request->city)->first();
        $offer->activity += 1;
        $offer->save();
     
        $data = [
            'act_id' => $act->id,
            'offer_id' => $request->city,
            "address" => $request->address,
            'group_size' => $request->group_size,
            'total_hours' => $request->total_hours,
            'start_time' => $request->start_time,
            'parking' => $request->parking,
            'bring' => $request->bring,
            'provided' => $request->provided,
        ];
        $practical = ActivityPractical::create($data);
        $act['practical_id'] = $practical->id;
        $act->save();
        return response()->json($act->id);
    }

    public function create_calendar_accommodation(Request $request) {
        $accom_prices = Calendar_Accommodation::where('accomodation_id', $request->id)->delete();
        
        $file_handle = fopen($request->file, 'r');
        while (!feof($file_handle) ) {
            $prices[] = fgetcsv($file_handle, 1024);
        }
        fclose($file_handle);
        
        for ($i = 1; $i < count($prices); $i ++) {
            $str = explode(';', $prices[$i][0]);
            $str_check_in = explode('.', $str[0]);
            $str_check_out = explode('.', $str[1]);
            $data = [
                'accomodation_id' => $request->id,
                'check_in_date' => $str_check_in[2]."-".$str_check_in[0]."-".$str_check_in[1],
                'check_out_date' => $str_check_out[2]."-".$str_check_out[0]."-".$str_check_out[1],
                'price_a_discount' => $str[2],
                'price_b_discount' => $str[3],
                'discount' => number_format((float)$str[4], 2, '.', ''),
                'nb_available' => $str[5]
            ];
            Calendar_Accommodation::create($data);
        }
        
        // $prices = $request->elements;
        // Calendar_Accommodation::where('accomodation_id', $request->id)->delete();
        // foreach ($prices as $sel) {
        //     $data = [
                // 'accomodation_id' => $sel['accom_id'],
                // 'check_in_date' => $sel['check_in'],
                // 'check_out_date' => $sel['check_out'],
                // 'price_a_discount' => $sel['price_a_discount'],
                // 'price_b_discount' => $sel['price_b_discount'],
                // 'discount' => number_format((float)$sel['discount'], 2, '.', ''),
                // 'nb_available' => $sel['nb_available']
        //     ];
        //     Calendar_Accommodation::create($data);
        // }
        return response()->json("success");
    }

    public function create_calendar_activity(Request $request) {
        $act_prices = Calendar_Activity::where('activity_id', $request->id)->delete();
        
        $file_handle = fopen($request->file, 'r');
        while (!feof($file_handle) ) {
            $prices[] = fgetcsv($file_handle, 1024);
        }
        fclose($file_handle);
        
        for ($i = 1; $i < count($prices); $i ++) {
            $str = explode(';', $prices[$i][0]);
            $str_check_in = explode('.', $str[0]);
            $str_check_out = explode('.', $str[1]);
            $data = [
                'activity_id' => $request->id,
                'check_in_date' => $str_check_in[2]."-".$str_check_in[0]."-".$str_check_in[1],
                'price_a_discount' => $str[2],
                'price_b_discount' => $str[3],
                'discount' => number_format((float)$str[4], 2, '.', ''),
                'nb_available' => $str[5]
            ];
            Calendar_Activity::create($data);
        }
        // $prices = $request->elements;
        // foreach ($prices as $sel) {
        //     $data = [
        //         'activity_id' => $sel['activity_id'],
        //         'check_in_date' => $sel['check_in'],            
        //         'price_a_discount' => $sel['price_a_discount'],
        //         'price_b_discount' => $sel['price_b_discount'],
        //         'discount' => number_format((float)$sel['discount'], 2, '.', ''),
        //         'nb_available' => $sel['nb_available']
        //     ];
        //     Calendar_Activity::create($data);   
        // }
        return response()->json("success");
    }

    public function update_accommodation(Request $request) {        
        $count = Accommodation_Image::where('accom_id', $request->accom_id)->where('offer_id', $request->city)->count();
        $accom = Accomodation::where('id', $request->accom_id)->first();
        $accom['city_id'] = $request->city; 
        $accom['name'] = $request->name;
        $accom['full_address'] = $request->address;
        $accom['location_longtitude'] = $request->longitude;
        $accom['location_latitude'] = $request->latitude;
        $accom['content'] = $request->content;
        $accom['category'] = $request->category;
        $accom['insider_rate'] = $request->insider_rate;        
        $accom['banner_img'] = $count;
        $accom['room_nb'] = $request->room_nb;
        $accom['status'] = $request->status;
        $accom['max_capacity'] = $request->max_capacity;
        $accom->save();
        $practical = AccommodationPractical::where('accom_id', $request->accom_id)->where('offer_id', $request->city)->first();        
        $practical->accom_id = $request->accom_id;
        $practical->offer_id = $request->city;
        $practical->check_in = $request->check_in;
        $practical->check_out = $request->check_out;
        $practical->breakfast = $request->breakfast;
        $practical->jacuzzi_access = $request->jacuzzi;
        $practical->gym_access = $request->gym;
        $practical->breakfast_t = $request->breakfast_t;
        $practical->jacuzzi_t = $request->jacuzzi_t;
        $practical->gym_t = $request->gym_t;
        $practical->note = $request->note;
        $practical->save();
        $accom['practical_id'] = $practical->id;
        $accom->save();
        return response()->json("success");
    }

    public function update_activity(Request $request) {
        $act = Activity::where('id', $request->act_id)->first();
        $act['city_id'] = $request->city;
        $act['name'] = $request->name;
        $act['location_longitude'] = $request->longitude;
        $act['address'] = $request->address;
        $act['location_latitude'] = $request->latitude;
        $act['content'] = $request->content;
        $act['activity_hours'] = $request->activity_hour;
        $act['category'] = $request->category;        
        $act['status'] = $request->status;
        $act['language'] = $request->language;
        $act['insider_rate'] = $request->insider_rate;        
        $act->save();
        $practical = ActivityPractical::where('act_id', $request->act_id)->where('offer_id', $request->city)->first();
        if ($practical) {
            $practical['act_id'] = $request->act_id;
            $practical['offer_id'] = $request->city;
            $practical['address'] = $request->address;
            $practical['group_size'] = $request->group_size;
            $practical['total_hours'] = $request->total_hours;
            $practical['start_time'] = $request->start_time;
            $practical['parking'] = $request->parking;
            $practical['provided'] = $request->provided;
            $practical['bring'] = $request->bring;
            $practical->save();
        } else {
            $data = [
                'act_id' => $request->act_id,
                'offer_id' => $request->city,
                'address' => $request->address,
                'group_size' => $request->group_size,
                'total_hours' => $request->total_hours,
                'start_time' => $request->start_time,
                'parking' => $request->parking,
                'provided' => $request->provided,
                'bring' => $request->bring,
            ];
            $practical = ActivityPractical::create($data);
        }
        
        $act['practical_id'] = $practical->id;
        $act->save();
        return response()->json("success");
    }

    public function delete_accommodation(Request $request) {
        $accom = Accomodation::where('id', $request->id)->first();
        $offer = Offer::where('id', $accom->city_id)->first();
        $offer->accomodation -= 1;
        $offer->save();
        Accomodation::where('id', $request->id)->delete();
        AccommodationPractical::where('accom_id', $request->id)->delete();
        ActivityPractical::where('act_id', $request->id)->delete();
        return response()->json('success');
    }
    
    public function delete_activity(Request $request) {
        $act = Activity::where('id', $request->id)->first();
        $offer = Offer::where('id', $act->city_id)->first();
        $offer->activity -= 1;
        $offer->save();
        Activity::where('id', $request->id)->delete();
        ActivityPractical::where('act_id', $request->id)->delete();
        return response()->json('success');
    }
    
    public function create_exp_accom(Request $request) {
        $data = $request->all();        
        $count = Accom_Exp::where('accom_id', $data['accom_id'])->count();
        if ($count < 8) {
            Accom_Exp::create($data);
        }
        $count = Accom_Exp::where('accom_id', $data['accom_id'])->count();
        return response()->json($count);
    }

    public function delete_edit_experience(Request $request) {
        Accom_Exp::where('id', $request->id)->delete();
        ExpDetailImage::where('id', $request->id)->delete();
        return response()->json("success");
    }

    public function save_exp_link_imgs(Request $request) {
        $count = ExpDetailImage::where('exp_id', $request->id)->count();
        $uploads_dir = "./assets/uploads/accom_imgs/";
      
        foreach ($request->src as $val) {
            $img = str_replace('data:image/jpeg;base64,', '', $val);
            $data = base64_decode($img);
            $name = rand(00000000, 99999999).time();
            $file = $uploads_dir . $name . '.png';
            file_put_contents($file, $data);
            $url = url("/assets/uploads/accom_imgs") ."/" . $name;
            $arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            $data = [
                'exp_id' => $request->id,
                'path' => $path. '.png',
                'category' => $request->category
            ];
            ExpDetailImage::create($data);
        }
        return response()->json("success");
    }

    public function save_general_info(Request $request) {
        $city = $request->city;
        $location = explode(", ", $city);
        $offer = Offer::where('location_place', $location[0])->where('location_country', $location[1])->first();
        $exp = Experience::where('user_id', Auth::User()->user_id)->where('city_id', $offer->id)->where('status', 'false')->first();         
        if ($exp == null ) {
            $experience = [
                "user_id" => Auth::User()->user_id,
                "city_id" => $offer->id,
                "exp_name" => $request->exp_name,
                "arrival_date" => $request->arrival_date,
                "guests_nb" => $request->guests_nb,
                "status" => "false"
            ];
            $exp = Experience::create($experience);
        } else {
            $exp['exp_name'] = $request->exp_name;
            $exp['arrival_date'] = $request->arrival_date;
            $exp['guests_nb'] = $request->guests_nb;
            $exp->save();
        }
        return response()->json($exp);
    }   

    public function create_accom_info(Request $request) {
        $exp = ExperienceDetail::where('experience_id', $request->experience_id)->where('type_id', $request->type_id)->where('type', 'accommodation')->where('check_in', $request->check_in)->where('check_out', $request->check_out)->first();
        $exps = ExperienceDetail::where('experience_id', $request->experience_id)->where('type', 'accommodation')->get();
        $remove_id = [];
        if (!isset($exp)) {
            ExperienceDetail::create($request->all());
        } else {
            foreach($exps as $sel) {
                if ($sel->id != $exp->id) {
                    array_push($remove_id, $sel->id);
                }
            }
            foreach($remove_id as $id) {
                ExperienceDetail::where('id', $id)->delete();
            }
        }
        return response()->json("success");
    }

    public function remove_accom_info(Request $request) {
        ExperienceDetail::where('experience_id', $request->experience_id)->where('type_id', $request->type_id)->where('type', 'accommodation')->where('check_in', $request->check_in)->where('check_out', $request->check_out)->delete();
        return response()->json('success');
    }
    
    public function undo_accom_info(Request $request) {
        ExperienceDetail::where('experience_id', $request->experience_id)->where('type', 'accommodation')->delete();
        return response()->json('success');
    }
    
    public function create_act_info(Request $request) {
        $exp = ExperienceDetail::where('experience_id', $request->experience_id)->where('type_id', $request->type_id)->where('type', 'activity')->where('check_in', $request->check_in)->first();
        $count = ExperienceDetail::where('experience_id', $request->experience_id)->where('type_id', $request->type_id)->where('type', 'activity')->where('check_in', $request->check_in)->count();
        $exps = ExperienceDetail::where('experience_id', $request->experience_id)->where('type', 'activity')->get();
        $remove_id = [];
        if ($count == 0) {
            ExperienceDetail::create($request->all());
        } else {
            foreach($exps as $sel) {
                if ($sel->id != $exp->id) {
                    array_push($remove_id, $sel->id);
                }
            }
            foreach($remove_id as $id) {
                ExperienceDetail::where('id', $id)->delete();
            }
        }
        return response()->json("success");
    }

    public function remove_act_info(Request $request) {
        $exp = ExperienceDetail::where('experience_id', $request->experience_id)->where('type_id', $request->type_id)->where('type', 'activity')->where('check_in', $request->check_in)->delete();
        return response()->json('success');
    }
    
    public function undo_act_info(Request $request) {
        $exp = ExperienceDetail::where('experience_id', $request->experience_id)->where('type', 'activity')->delete();
        return response()->json('success');
    }
    
    public function save_favourite(Request $request) {
        $count = Favourite::where('user_id', Auth::User()->user_id)->where('exp_id', $request->exp_id)->count();
        $count_ = Favourite::where('user_id', Auth::User()->user_id)->count();
        $data = [
            'user_id' => Auth::User()->user_id,
            'exp_id' => $request->exp_id
        ];
        if ($count == 0) {
            Favourite::create($data);
            $count_ += 1;
        }
        return response()->json($count_);
    }

    public function delete_favourite(Request $request) {
        Favourite::where('user_id', Auth::User()->user_id)->where('exp_id', $request->exp_id)->delete();
        ExperienceDetail::where('experience_id', $request->exp_id)->delete();
        Experience::where('id', $request->exp_id)->delete();
        return response()->json('success');
    }

    public function send_invite_email(Request $request) {
        $exp = Experience::where('id', $request->exp_id)->first();
        $exp->invite_ = count($emails);
        $exp->save();
        $emails = $request->emails;
        $data = [
            "sender_name" => Auth::User()->username,
            "message" => $request->message,
            "content" => $request->content
        ]; 
        foreach ($emails as $email) {
            Mail::to($email)->send(new Invite_Mail($data));
        }        
        return response()->json('success');
    }

    public function save_payment_user(Request $request) {        
        $user = User::where('email', $request->email)->first();
        if (isset($user)) {
            $user->title = $request->title;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone_number = $request->phone;
            $user->day = $request->day;
            $user->month = $request->month;
            $user->year = $request->year;
            $user->save();
            return response()->json('true');
        } else {
            return response()->json('false');
        }
    }

    public function validate_promo_code(Request $request) {
        $code = $request->code;
        $count = GiftCard::where('voucher_no', $code)->count();
        if ($count == 0) {
            $count_ = Promotion::where('name', $code)->count();
            if ($count_ == 0) {
                return response()->json(['result' => 'false', 'value' => '', 'type' => '']);
            } else {
                $promo = Promotion::where('name', $code)->first();
                if ($promo->status == "active") {
                    return response()->json(['result' => 'true', 'value' => $promo->_value, 'type' => $promo->type]);
                } else {
                    return response()->json(['result' => 'false', 'value' => '', 'type' => '']);    
                }
            }
        } else {
            $gift = GiftCard::where('voucher_no', $code)->first();            
            if ($gift->status == "false") {
                return response()->json(['result' => 'false', 'value' => '', 'type' => '']);
            } else {
                $date = $gift->created_at;
                $str = explode("-", $date);
                $new_y = (int)$str[0] + 1;
                $new_date = $new_y."-".$str[1]."-".$str[2];                
                $dateTimestamp1 = strtotime($new_date);
                $dateTimestamp2 = strtotime(date('Y-m-d'));
                
                if ($dateTimestamp1 > $dateTimestamp2)
                    return response()->json(['result' => 'false', 'value' => $gift->amount, 'type' => 'dollar']);
                else
                    return response()->json(['result' => 'false', 'value' => '', 'type' => '']);
            }            
        }
    }

    public function add_partner (Request $request) {
        $partner = Partner::where('email', $request->email)->first();
        if ($partner) {
            return response()->json('error');
        } else {
            $partner_detail = Partner::create($request->all());
            return response()->json('success');
        }
    }

    public function update_partner (Request $request) {
        $partner = Partner::where('email', $request->email)->first();
        $partner->partner_name = $request->partner_name;
        $partner->contact_person = $request->contact_person;
        $partner->email = $request->email;
        if ($request->phone != " ") {
            $partner->phone = $request->phone;
        }
        $partner->last_audit = $request->last_audit;
        $partner->date_ = $request->date_;
        $partner->save();
        return response()->json('success');
    }

    public function message_img(Request $request) {
		if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/message_img") ."/" . $request->file->store('', 'message_img');
			$arr = explode("/", $url);
			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
			return response()->json($path);
		} else {
				return ["error" => "No image attached"];
		}
	}

    public function blog_img(Request $request) {
		if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/blog_img") ."/" . $request->file->store('', 'blog_img');
			$arr = explode("/", $url);
			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
			return response()->json($path);
		} else {
				return ["error" => "No image attached"];
		}
	}

    public function save_blog (Request $request) {
        $user = Auth::User();
        $data = $request->input('data');
        $blog_data = [
          'title' => $data['title'],
          'content' => $data['content'],
          'banner_img'=> $data['banner_img'],
          'status'=> $data['status'],
          'author' => $user->username
        ];
        $blog = Blog::create($blog_data);
        return response()->json($blog);
    }

    public function update_blog (Request $request) {
        $data = $request->input('data');
        $blog = Blog::where('id', $data['blog_id'])->first();
        if ($data['title']) {
          $blog->title = $data['title'];
        }
        if ($data['content']) {
          $blog->content = $data['content'];
        }
        if ($data['banner_img']) {
          $blog->banner_img = $data['banner_img'];
        }
        $blog->save();
        return response()->json($blog);
    }

    public function delete_blog (Request $request) {
        $id = $request->input('id');
        Blog::where('id', $id)->delete();
        return response()->json("success");
    }

    public function career_img(Request $request) {
  		if ($request->file('file')->isValid()){
  			$url = url("/assets/uploads/career_img") ."/" . $request->file->store('', 'career_img');
  			$arr = explode("/", $url);
  			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
  			return response()->json($path);
  		} else {
  				return ["error" => "No image attached"];
  		}
  	}

    public function save_career (Request $request) {
        $data = $request->input('data');
        if ($data['id'] !=0) {
            $career = Career::where('id', $data['id'])->first();
            $career->department = $data['department'];
            $career->description = $data['description'];
            $career->title_description = $data['title_description'];
            if ($data['banner_img'] != "") {
                $career->banner_img = $data['banner_img'];
            }
            $career->save();
            return response()->json($career);
        } else {
            $career = [
                'department' => $data['department'],
                'description' => $data['description'],
                'title_description'=> $data['title_description'],
                'banner_img'=> $data['banner_img']
            ];
            $career = Career::create($career);
        }
        return response()->json($career);
    }

    public function delete_career (Request $request) {
        $id = $request->input('id');
        Career::where('id', $id)->delete();
        return response()->json("success");
    }

    public function save_position (Request $request) {
        $data = $request->input('data');
        if ($data['id'] !=0) {
            $position = Career_detail::where('id', $data['id'])->first();
            $position->position_name = $data['position_name'];
            $position->content = $data['content'];
            if ($data['banner_img'] != "") {
                $position->banner_img = $data['banner_img'];
            }
            $position->office = $data['office'];
            $position->save();
            return response()->json($position);
        } else {
            $position = [
                'department_id' => $data['parent_id'],
                'position_name' => $data['position_name'],
                'content' => $data['content'],
                'office' => $data['office'],
                'banner_img'=> $data['banner_img']
            ];
            $career_detail = Career_detail::create($position);
            $career = Career::where('id', $data['parent_id'])->first();
            $career->positions = $career->positions + 1;
            $career->save();
            return response()->json($career);
        }
    }

    public function position_img(Request $request) {
  		if ($request->file('file')->isValid()){
  			$url = url("/assets/uploads/department_img") ."/" . $request->file->store('', 'department_img');
  			$arr = explode("/", $url);
  			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
  			return response()->json($path);
  		} else {
  				return ["error" => "No image attached"];
  		}
  	}

    public function delete_department(Request $request) {
        $department = Career_detail::where('id', $request->input('id'))->first();
        $career = Career::where('id', $department->department_id)->first();
        $career->positions = $career->positions - 1;
        $career->save();
        $department->delete();
        return response()->json("success");
    }

    public function get_parent(Request $request) {
        $id = $request->name;
        $career = Career::where('id', $id)->first();
        return response()->json($career->id);
    }

    public function get_messages(Request $request) {
        $id = $request->id;
        $message = Contact_message::where('id', $id)->first();
        return response()->json($message);
    }

    public function set_messages_status(Request $request) {
        $id = $request->id;
        $message = Contact_message::where('id', $id)->first();
        $message->_status = "read";
        $message->save();
        return response()->json("success");
    }

    public function get_partner(Request $request) {
        $id = $request->id;
        $partner = Partner::where('id', $id)->first();
        return response()->json($partner);
    }

    public function delete_partner(Request $request) {
        $id = $request->id;
        Partner::where('id', $id)->delete();
        return response()->json("success");
    }

    public function get_offer(Request $request) {
        $id = $request->id;
        $offer = Offer::where('id', $id)->first();
        return response()->json($offer);
    }

    public function delete_offer(Request $request) {
        $id = $request->id;
        Offer::where('id', $id)->delete();
        return response()->json("success");
    }

    public function add_offer (Request $request) {
        $offer = Offer::where('location_place', $request->location_place)->first();
        if ($offer) {
            return response()->json('error');
        } else {
            Offer::create($request->all());
            return response()->json('success');
        }
    }

    public function update_offer (Request $request) {
        $offer = Offer::where('id', $request->id)->first();
        $offer->location_country = $request->location_country;
        $offer->location_place = $request->location_place;
        $offer->status = $request->status;
        $offer->accomodation = Accomodation::where('city_id', $offer->id)->count();
        $offer->activity = Activity::where('city_id', $offer->id)->count();
        if (isset($request->img_path)) {
            $offer->img_path = $request->img_path;
        }
        $offer->save();
        return response()->json('success');
    }

    public function offer_image(Request $request) {        
  		if ($request->file('file')->isValid()){
  			$url = url("/assets/uploads/offer_imgs") ."/" . $request->file->store('', 'offer_imgs');
  			$arr = explode("/", $url);
  			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            return response()->json($path);
  		} else {
              return response()->json('error');
  		}
  	}

    public function accom_exp_img(Request $request) {
        if ($request->file('file')->isValid()){
            $url = url("/assets/uploads/accom_exp_imgs") ."/" . $request->file->store('', 'accom_exp_imgs');
            $arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            return response()->json($path);
        } else {
            return response()->json('error');
        }
    }

    public function accom_banner_img(Request $request) {
        $accom = Accomodation::where('id', $request->input('accom_id'))->where('city_id', $request->input('offer_id'))->first();
        if ($request->file('file')->isValid()){
            $url = url("/assets/uploads/accom_exp_imgs") ."/" . $request->file->store('', 'accom_exp_imgs');
            $arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            $accom->path = $path;
            $accom->save();
            return response()->json($path);
        } else {
            return response()->json('error');
        }
    }
    public function save_exp_img(Request $request) {
        $accom = Accomodation::where('id', $request->input('accom_id'))->where('city_id', $request->input('offer_id'))->first();
        if ($request->file('file')->isValid()){
            $url = url("/assets/uploads/accom_exp_imgs") ."/" . $request->file->store('', 'accom_exp_imgs');
            $arr = explode("/", $url);
            $path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
            $accom->path = $path;
            $accom->save();
            return response()->json($path);
        } else {
            return response()->json('error');
        }
    }
    
    public function delete_newsletter(Request $request) {
        $id = $request->id;
        Newsletters::where('id', $id)->delete();
        return response()->json("success");
    }
    
    public function save_newsletter (Request $request) {
        $count = Newsletters::where('id', $request->id)->count();
        if ($count !=0) {
            $newsletter = Newsletters::where('id', $request->id)->first();
            $newsletter->content = $request->content;
            $newsletter->save();
        } else {
            $data = [
                'author' => Auth::User()->username,
                'status' => 'saved',
                'content' => $request->content
            ];
            $newsletter = Newsletters::create($data);           
        }
        return response()->json('success');
    }
    
    public function add_newsletter(Request $request) {
      Newsletter_list::create(['email' => $request->newsletter]);
      return redirect()->back();
    }

    public function newsletter_imgs(Request $request) {
  		if ($request->file('file')->isValid()){
  			$url = url("/assets/uploads/newsletter_imgs") ."/" . $request->file->store('', 'newsletter_imgs');
  			$arr = explode("/", $url);
  			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
  			$newsletter_image = [
            'newsletter_id' => $request->input('id'),
            'path' => $path
        ];
        Newsletter_image::create($newsletter_image);
        return response()->json($path);
  		} else {
              return response()->json('error');
  		}
  	}

    public function get_newsletter_imgs(Request $request) {
        $images = Newsletter_image::where('newsletter_id', $request->id)->get();
        return response()->json($images);
    }

    public function save_promotion (Request $request) {       
        $data = [
            "name" => $request->name,
            "type"=> $request->type,
            "_value"=> $request->_value,
            "start_date"=> $request->start_date,
            "time" => $request->time,
            "end_date" => $request->end_date,
            "status" => "active"
        ];       
        $promos = Promotion::create($data);
        $current_date = date('m/d/Y');
        return response()->json("success");
    }    

    public function update_promotion (Request $request) {        
        $promos = Promotion::where('id', $request->id)->first();
        $promos['name'] = $request->name;
        $promos['type'] = $request->type;
        $promos['_value'] = $request->_value;
        $promos['start_date'] = $request->start_date;
        $promos['time'] = $request->time;
        $promos['end_date'] = $request->end_date;
        $current_date = date('m/d/Y');
        $promos->save();
        return response()->json('success');
    }

    public function delete_promotion(Request $request) {
        Promotion::where('id', $request->id)->delete();
        return response()->json('success');
    }

    public function check_password(Request $request) {
        $old_pwd = $request->old_pwd;
        $user = Auth::User();
        if (Hash::check($old_pwd, $user->password)) {
            return response()->json('true');
        } else {
            return response()->json('false');
        }
    }

    public function save_profile(Request $request) {
        $user = User::where('user_id', $request->user_id)->first();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->save();
        return response()->json('success');
    }

    public function save_password (Request $request) {
        $user = User::where('user_id', $request->user_id)->first();
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
            $user->save();
            return response()->json('success');
        }
    }

    public function paidGiftCard (Request $request) {
        $user = Auth::User();        
        \Stripe\Stripe::setApiKey("sk_test_SKNIW4hfkit6CCUtOJwJr42S");
        
        $code = rand(1000000,9999999);
        $token = $request['stripeToken'];
        $email = $user['email'];
        $amount = $request['amount'];

        $gift_info = [
            "design_id" => $request->design_id,
            "amount" => $request->amount,
            'sender_name' => $request->sender_name,
            'beneficiary_name' => $request->beneficiary_name,
            'beneficiary_email' =>  $request->beneficiary_email,
            'little_word' => $request->little_word,
            'user_id' => $user->user_id,
            'email' => $user->email,
            'name' => $user->username,
            "customer_id" => "",
            "voucher_no" => $code,
            'status' => 'true'
        ];

        $gift = GiftCard::where('email', $email)->first();
        $count = GiftCard::where('email', $email)->count();

        if ($count == 0) {
            $customer = \Stripe\Customer::create(array(
                "email" => $email,
                "source" => $token
            ));
            $charge = \Stripe\Charge::create(array(
                "amount" => $amount,
                "currency" => "aud",
                "customer" => $customer->id
            ));
            $gift_info['customer_id'] = $customer->id;
            $gift = GiftCard::create($gift_info);
        } else {
            $charge = \Stripe\Charge::create(array(
                "amount" => $amount,
                "currency" => "aud",
                "customer" => $gift->customer_id
            ));
        }
        $data = [
            "amount" => $amount,
            "voucher_no" => $gift->voucher_no,
            "card_id" => $gift->design_id,
            "message" => $gift->little_word,
            "beneficiary_name" => $gift->beneficiary_name,
            "sender_name" => $gift->sender_name
        ];
        
        $this->send_mail($request->beneficiary_email,$data,'Gift card from Insider suite','gift');
        return redirect('mail_gift_card');
    }
    
    public function experiencePayment(Request $request) {
        $user = Auth::User();        
        \Stripe\Stripe::setApiKey("sk_test_SKNIW4hfkit6CCUtOJwJr42S");

        $token = $request['stripeToken'];
        $email = $user['email'];
        $amount_ = (int)$request['amount'] * 100;
        $data = [
            'user_id' => $user->user_id,
            'experience_id' => $request['exp_id'],
            'amount' => $request['amount'],
            'content' => $request['additional_info'],
            "voucher_nb" => $request['voucher_nb']
        ];
        $payment = Payment::where('experience_id', $request['exp_id'])->first();
        if (isset($payment)) {
            if ($payment->satus !="paid") {
                $charge = \Stripe\Charge::create(array(
                    "amount" => $amount_,
                    "currency" => "aud",
                    "customer" => $payment->customer_id
                ));
                $payment->status = "paid";
                $payment->save();
                $exp = Experience::where('id', $request['exp_id'])->first();
                $exp->status = "true";
                $exp->save();
                $exp_details = ExperienceDetail::where('experience_id', $request['exp_id'])->get();
                $date_list = [];
                foreach($exp_details as $sel) {
                    array_push($date_list, $sel->check_in);
                    if (!array_search($sel->check_out, $date_list)) {
                        array_push($date_list, $sel->check_out);    
                    }
                }
                $min_date = $date_list[0];
                $max_date = $date_list[0];
                for ($i = 0; $i < count($date_list); $i ++ ) {
                    if (strtotime($date_list[$i]) < strtotime($min_date)) {
                        $min_date = $date_list[$i];
                    } 
                    if (strtotime($date_list[$i]) > strtotime($max_date)) {
                        $max_date = $date_list[$i];
                    }
                }
                $str1 = explode("-", $max_date); 
                $month = (int)$str1[1] + 1;
                $feedback_t_limit = $str1[0]."-".$month."-".$str1[2];
                $city = Offer::where('id', $exp->city_id)->first();
                $data = [
                    'name' => $user->username,
                    'location' => $city->location_place,
                    'experience_name' => $exp->exp_name,
                    'accom_count' => $request['accom_count'],
                    'act_count' => $request['act_count'],
                    'first_day' => $min_date,
                    'last_day' => $max_date,
                    'feedback_t_limit' => $feedback_t_limit,
                    'token' => $user->remember_token,
                ];
                Mail::to($user->email)->send(new ReviewMail($data));
                // var exact_dates = date_list.sort();
                Favourite::where('exp_id', $request['exp_id'])->where('user_id', Auth::User()->user_id)->delete();
                if ($user->sponsor_user != null) {
                    $data = [
                        "sponsored_name" => $user->username,
                        "voucher_no" => rand(1000000,9999999)
                    ];
                    $sponsor_user = User::where('user_id', $user->sponsor_user)->first();
                    Mail::to($sponsor_user->email)->send(new SponsorSuccessMail($data));
                    $data_ = [
                        "sponsor" => $sponsor_user->user_id,
                        "voucher_no" => $data['voucher_no']
                    ];
                    Sponsor_Voucher::create($data_);
                }
                
                // if ($data['voucher_nb'] != "nothing") {
                //     $promo = Promotion::where('')
                // }
                return redirect('offers');
            } else {
                return redirect('create_experience/?id='.$request['exp_id']);
            }
        } else {
            $customer = \Stripe\Customer::create(array(
                "email" => $email,
                "source" => $token
            ));
            $charge = \Stripe\Charge::create(array(
                "amount" => $amount_,
                "currency" => "aud",
                "customer" => $customer->id
            ));
            $new_payment = Payment::create($data);
            $new_payment['customer_id'] = $customer->id;
            $new_payment['status'] = 'paid';
            $new_payment->save();
            $exp = Experience::where('id', $request['exp_id'])->first();
            $exp->status = "true";
            $exp->save();
            $exp_details = ExperienceDetail::where('experience_id', $request['exp_id'])->get();
            $date_list = [];
            foreach($exp_details as $sel) {
                array_push($date_list, $sel->check_in);
                if (!array_search($sel->check_out, $date_list)) {
                    array_push($date_list, $sel->check_out);    
                }
            }
            $min_date = $date_list[0];
            $max_date = $date_list[0];
            for ($i = 0; $i < count($date_list); $i ++ ) {
                if (strtotime($date_list[$i]) < strtotime($min_date)) {
                    $min_date = $date_list[$i];
                } 
                if (strtotime($date_list[$i]) > strtotime($max_date)) {
                    $max_date = $date_list[$i];
                }
            }
            $str1 = explode("-", $max_date); 
            $month = (int)$str1[1] + 1;
            $feedback_t_limit = $str1[0]."-".$month."-".$str1[2];
            $city = Offer::where('id', $exp->city_id)->first();
            $data = [
                'name' => $user->username,
                'location' => $city->location_place,
                'experience_name' => $exp->exp_name,
                'accom_count' => $request['accom_count'],
                'act_count' => $request['act_count'],
                'first_day' => $min_date,
                'last_day' => $max_date,
                'feedback_t_limit' => $feedback_t_limit,
                'token' => $user->remember_token,
            ];
            Mail::to($user->email)->send(new ReviewMail($data));
            
            Favourite::where('exp_id', $request['exp_id'])->where('user_id', Auth::User()->user_id)->delete();
            if ($user->sponsor_user != null) {
                $data = [
                    "sponsored_name" => $user->username,
                    "voucher_no" => rand(1000000,9999999)
                ];
                $sponsor_user = User::where('user_id', $user->sponsor_user)->first();
                Mail::to($sponsor_user->email)->send(new SponsorSuccessMail($data));
                $data_ = [
                    "sponsor" => $sponsor_user->user_id,
                    "voucher_no" => $data['voucher_no']
                ];
                Sponsor_Voucher::create($data_);
            }
            return redirect('offers');
        }
    }
    public function host_experience_data(Request $request) {
        
      $user = Auth::User();
      if ($request->dream_countries != null) {
        $dream_countries = implode(" ", $request->dream_countries);
        $user->dream_countries = $dream_countries;
      }
      if ($request->often_country != null) {
        $user->often_country = $request->often_country;
      }
      if ($request->travel_buddy != null) {
        $travel_buddies = implode(" ", $request->travel_buddy);
        $user->travel_buddy = $travel_buddies;    
      }
      if ($request->activity_name != null) {
        $activity_names = implode(" ", $request->activity_name);
        $user->activity_name = $activity_names;
      }
      $user->host_checked = 'true';
      $user->save();
      return response()->json('success');
    }
}
