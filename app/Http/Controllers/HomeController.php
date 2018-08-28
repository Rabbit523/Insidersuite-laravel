<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mailers\Mailer;
use App\Models\Contact_message;
use App\Models\Career;
use App\Models\Blog;
use App\Models\Blog_user;
use App\Models\Offer;
use App\Models\Partner;
use App\User;
use Auth;
use Mobile_Detect;

class HomeController extends Controller
{
    protected $mailer;
    function __construct(Mailer $mailer){
        $this->mailer = $mailer;
    }
    public function home() {
    	return view('home');
    }
    public function offers_page() {        
        $offers = Offer::orderBy('expiration_date', 'desc')->paginate(2);
        $count = Offer::count();
        return view('offers', compact('offers', 'count'));
    }
    public function experience() {
        return view('experience');
    }
    public function offer_detail(Request $request) {        
        $id = $request->id;
        $offer = Offer::where('id', $id)->first();
        return view('offer_detail', compact('id', 'offer'));
    }

    public function our_story() {
    	return view('footer.our_story');
    }
    public function how_it_works() {
        return view('footer.how_it_works');
    }
    public function sponsor() {
        return view('footer.sponsor');
    }
    public function write_to_us() {
    	return view('footer.write_to_us');
    }
    public function contact() {
    	return view('footer.contact');
    }   
    public function careers() {
        $finance = Career::where('department', 'Finance & Accounting')->first();
        $finance_count = $finance->position_count;
        $community = Career::where('department', 'Engineering')->first();
        $community_count = $community->position_count;
        $production = Career::where('department', 'Trust and security')->first();
        $production_count = $production->position_count;
        $developer = Career::where('department', 'Marketing and communication')->first();
        $developer_count = $developer->position_count;
        return view('footer.career', compact('finance_count', 'community_count', 'production_count', 'developer_count'));
    }
    public function legal_terms() {
        return view('footer.legal_terms');
    }
    public function gift_card() {
        return view('footer.gift_card');
    }
    public function blogs () {
        return view('footer.blog');
    } 
    public function blog_detail (Request $request) {
        $type = "";
        $blog = [
            'id' => '',
            'title' => '',
            'like_count' => ''
        ];
        $blog_user=[];
        $is_like = false;
        if ($request->id == "1") {
            $type = "1";
            $blog = Blog::where("id", "1")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '1')->first();
        } else if ($request->id == "2") { 
            $type = "2";
            $blog = Blog::where("id", "2")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '2')->first();
        } else if ($request->id == "3") { 
            $type = "3";
            $blog = Blog::where("id", "3")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '3')->first();
        } else if ($request->id == "4") { 
            $type = "4";
            $blog = Blog::where("id", "4")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '4')->first();
        } else if ($request->id == "5") { 
            $type = "5";
            $blog = Blog::where("id", "5")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '5')->first();
        } else if ($request->id == "6") { 
            $type = "6";
            $blog = Blog::where("id", "6")->first();
            $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', '6')->first();
        }
        
        if ($blog_user) {
            $is_like = true;
        } else {
            $is_like = false;
        }
        return view('footer.blog_detail', compact('type', 'blog', 'is_like'));
    }
    public function career_detail (Request $request) {
        $type = "";
        $detail_info;
        if ($request->id == "finance") {
            $type = "finance";
            $detail_info = Career::where('department', 'Finance & Accounting')->first();
        } else if ($request->id == "engineering") { 
            $type = "engineering";
            $detail_info = Career::where('department', 'Engineering')->first();
        } else if ($request->id == "security") { 
            $type = "security";
            $detail_info = Career::where('department', 'Trust and security')->first();
        } else if ($request->id == "marketing") { 
            $type = "marketing";
            $detail_info = Career::where('department', 'Marketing and communication')->first();
        }     
        return view('footer.career_detail', compact('type', 'detail_info'));
    }
    public function career_detail_info (Request $request) {
        $detail_info = Career::where('id', $request->id)->first();
        return view('footer.career_detail_info', compact('detail_info'));
    }
    public function profile() {
        return view('account_menu.profile');
    }
    public function travel() {
        return view('account_menu.travel-companion');
    }
    public function alert_page() {
    	return view('account_menu.alerts');
    }
    public function subscription() {
        return view('account_menu.subscription');
    }
    public function mail_gift_card() {
        return view('account_menu.mail_gift_card_page');
    }  

    private function send_mail($email, $details, $subject,$template) {
        $view = 'mail_templates.'.$template;
        $subject = $subject;
        $data['data'] = $details;
        $this->mailer->sendTo($email, $subject, $view, $data);
    }
    public function write_to_us_mail(Request $request) {
        $user = Auth::User();
        $message = [
            'user_id' => $user->user_id,
            'email' => $request->email,
            'name' => $request->name,
            'content' => $request->content,
            'subject' => $request->subject,
            '_status' => 'unread'
        ];
        Contact_message::create($message);
        $this->send_mail($request->email,$request,$request->subject,'contact_us');
        $this->send_mail('contact@insidersuite.com',$request,$request->subject,'contact_us');
        return redirect()->back();

    }
    public function send_feedback(Request $request) {
        $this->send_mail('contact@insidersuite.com',$request,'Website Feedback','feedback');
        return redirect()->back();
    }

    public function send_newsletter(Request $request) {
        $this->send_mail($request->newsletter,$request,'Newsletter','newsletter');
        return redirect()->back();
    }

    public function notify_site_details(Request $request) {
        $this->send_mail('contact@insidersuite.com',$request,'Notify For Page Release','page_release');
        return redirect()->back();
    }

    public function refer_mail(Request $request) {
        $email = $request->email;
        $this->send_mail($email,$request,'Referal Email','refer_mail');
        return 'true';
    }

    public function refer_all(Request $request) {
        foreach ($request->email as $value) {
            $this->send_mail($value,$request,'Referal Email','refer_mail');
        }
        return 'true';
    }

    public function login_status_change() {
        Auth::User()->change_login_status(Auth::User()->user_id);
    }

    public function charge(Request $request) {
        dd($request);
    }

    public function message_attach(Request $request ) {
        if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/attach_file") ."/" . $request->file->store('', 'attach_file');
			
			return response()->json($url);
		} else {
            return ["error" => "No image attached"];
		}
    }

    public function live_message(Request $request) {
        dd($request->all());
        $user = Auth::User();
        $message = [
            'user_id' => $user->user_id,
            'email' => $request->email,
            'name' => $request->name,
            'content' => $request->content,
            'attached_file' => $request->attached_file,
            '_status' => 'unread'
        ];
        Contact_message::create($message);
        $this->send_mail($request->email,$request,$request->subject,'contact_us');
        $this->send_mail('contact@insidersuite.com',$request,$request->subject,'contact_us');
        return redirect()->back();
    }

    public function dashboard() {        
        $user_count = User::where('role', 1)->count();
        $partner_count = Partner::count();
        return view('private_admin.dashboard', compact('user_count', 'partner_count'), ["title" => 'dashboard']);
    }

    public function admin_booking() {   
        return view('private_admin.booking', ["title" => 'booking']);
    }

    public function admin_partners() {
        $partners = Partner::orderBy('updated_at', 'desc')->paginate(10);
        $count = Partner::count();
        return view('private_admin.partners', compact('partners', 'count'), ["title" => 'partners']);
    }

    public function admin_newsletters() {   
        return view('private_admin.newsletters', ["title" => 'newsletters']);
    }

    public function admin_blogs() {   
        return view('private_admin.blogs', ["title" => 'blog_articles']);
    }

    public function admin_careers() {   
        return view('private_admin.careers', ["title" => 'career_articles']);
    }

    public function pages() {   
        return view('private_admin.pages', ["title" => 'pages']);
    }

    public function admin_settings() {   
        return view('private_admin.settings', ["title" => 'settings']);
    }
}
