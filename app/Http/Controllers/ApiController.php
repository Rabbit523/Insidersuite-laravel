<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
use App\Models\Contact_message;
use App\Models\Newsletters;
use App\Models\Newsletter_image;
use App\Models\Newsletter_list;
use App\Models\GiftCard;
use App\User;
use Hash;

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
          $blog->title = $data['title'];
        }
        if ($data['banner_img']) {
          $blog->title = $data['title'];
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
            if ($data['banner_img'] != "") {
                $career->banner_img = $data['banner_img'];
            }
            $career->save();
            return response()->json($career);
        } else {
            $career = [
                'department' => $data['department'],
                'description' => $data['description'],
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
        $name = $request->name;
        $career = Career::where('department', $name)->first();
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

    public function delete_newsletter(Request $request) {
        $id = $request->id;
        Newsletters::where('id', $id)->delete();
        return response()->json("success");
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

    public function create_giftcard(Request $request) {
        $user = Auth::User();
        $code = rand(1000000,9999999);

        $gift = [
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
            "voucher_no" => $code
        ];
        $gift_card = GiftCard::where("email", $user->email)->first();
        $count = GiftCard::where("email", $user->email)->count();
        if ($count > 0) {
            if ($gift_card->customer_id !="") {
                $gift['customer_id'] = $gift_card->customer_id;
                $card = GiftCard::create($gift);
            } else {
                $card = GiftCard::create($gift);
            }
        } else {
             $card = GiftCard::create($gift);
        }
        return response()->json($card);
    }

    public function paidGiftCard (Request $request) {
      \Stripe\Stripe::setApiKey("sk_test_SKNIW4hfkit6CCUtOJwJr42S");

      $token = $request['stripeToken'];
      $email = $request['email'];
      $amount = $request['amount'];

      $gift = GiftCard::where('email', $email)->first();

      if ($gift->customer_id == "") {
          $customer = \Stripe\Customer::create(array(
              "email" => $email,
              "source" => $token
          ));

          $gift->customer_id = $customer->id;
          $gift->save();

          $charge = \Stripe\Charge::create(array(
              "amount" => $amount,
              "currency" => "aud",
              "customer" => $customer->id
          ));
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
        "message" => $gift->little_word
      ];

      $this->send_mail('$email',$data,$user->username,'gift');
      return redirect('mail_gift_card');
    }
    public function host_experience_data(Request $request) {
      $user = Auth::User();
      $user->host_description = $request->data['description'];
      $user->hospital_description = $request->data['hospitality'];
      $user->indicated_country0 = $request->data['country0'];
      $user->indicated_country1 = $request->data['country1'];
      $user->indicated_country2 = $request->data['country2'];
      $user->save();
      return response()->json('success');
    }
}
