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
use App\Models\Book;
use App\Models\Career_detail;
use App\Models\Newsletters;
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
        $offers = Offer::orderBy('expiration_date', 'desc')->paginate(5);
        $count = Offer::count();
        return view('offers', compact('offers', 'count'));
    }
    public function experience() {
        return view('experience');
    }
    public function create_experience() {
        return view('create_experience');
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
        $careers = Career::orderBy('updated_at', 'desc')->paginate(10);
        $count = Career::count();
        return view('footer.career', compact('careers', 'count'));
    }
    public function legal_terms() {
        return view('footer.legal_terms');
    }
    public function gift_card() {
        return view('footer.gift_card');
    }
    public function blogs () {
        $blogs = Blog::orderBy('updated_at', 'desc')->paginate(10);
        $count = Blog::count();
        return view('footer.blog', compact('blogs', 'count'));
    }
    public function blog_detail (Request $request) {
        $id = $request->input('id');
        $blog = Blog::where("id", $id)->first();
        $blog_user = Blog_user::where('user_id', Auth::User()->user_id)->where('blog_id', $id)->first();
        if ($blog_user) {
            $type = "true";
        } else {
            $type = "false";
        }
        return view('footer.blog_detail', compact('type', 'blog'));
    }
    public function career_detail (Request $request) {
        $id = $request->input('id');
        $details = Career_detail::where('department_id', $id)->get();
        $career = Career::where('id', $id)->first();
        return view('footer.career_detail', compact('details', 'career'));
    }
    public function career_detail_info (Request $request) {
        $detail_info = Career_detail::where('id', $request->id)->first();
        $career = Career::where('id', $request->id)->first();
        return view('footer.career_detail_info', compact('detail_info', 'career'));
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
            'attached_file' => "",
            '_status' => 'unread'
        ];
        Contact_message::create($message);
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
        $this->send_mail('contact@insidersuite.com',$request,$request->subject,'contact_us');
        return redirect()->back();
    }

    public function dashboard() {
        $dend = date('Y-m-d');
        $partner_count = Partner::count();
        $user_count = User::where('created_at','<=', $dend)->where('role', 1)->count();
        $book_count = Book::where('created_at','<=', $dend)->count();
        return view('private_admin.dashboard', compact('user_count', 'partner_count', 'book_count','dstart','dend'), ["title" => 'dashboard']);
    }
    public function dashboardSearch(Request $request){
        $dstart = $this->changeDateType($request->startDate);
        $dend = $this->changeDateType($request->endDate);
        $partner_count = Partner::where('created_at', '>=', $dstart)->where('created_at','<=', $dend)->count();
        $user_count = User::where('created_at', '>=', $dstart)->where('created_at','<=', $dend)->where('role', 1)->count();
        $book_count = Book::where('created_at', '>=', $dstart)->where('created_at','<=', $dend)->count();
        return view('private_admin.dashboard', compact('user_count', 'partner_count', 'book_count','dstart','dend'), ["title" => 'dashboard']);
    }
    public function changeDateType($date){
        $tempArray = explode('/',$date);
        return $tempArray[2]."-".$tempArray[0]."-".$tempArray[1];
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
        $datas = Newsletters::orderBy('updated_at', 'desc')->paginate(10);
        $count = Newsletters::count();
        return view('private_admin.newsletters', compact('datas', 'count'), ["title" => 'newsletters']);
    }

    public function admin_newsletter_detail(Request $request) {
        $id = $request->id;
        $type = " ";
        if ($id == '0') {
            $newsletter = Newsletters::where('id', 0)->first();
            $detail = [
                "author" => Auth::User()->username,
                "status" => "saved",
                "content" => ""
            ];
            $new_one = Newsletters::create($detail);
            $new_id = $new_one->id;
            $type = "new";
        } else {
            $newsletter = Newsletters::where('id', $id)->first();
            $new_id = "0";
            $type = "old";
        }
        return view('private_admin.single-newsletter', compact('newsletter', 'type', 'new_id'), ['title' => 'Single newsletter']);
    }

    public function admin_blogs() {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        $count = Blog::count();
        return view('private_admin.blogs', compact('blogs', 'count'), ["title" => 'blog_articles']);
    }

    public function admin_blog_detail(Request $request) {
        $id = $request->id;
        $type = "";
        if ($id == 0) {
            $type="new";
            $blog = Blog::where("id", "0")->first();
        } else {
            $type="old";
            $blog = Blog::where("id", $request->id)->first();
        }
        return view('private_admin.single-blog', compact('type', 'blog'), ['title' => 'newblog']);
    }

    public function admin_careers() {
        $careers = Career::orderBy('id', 'desc')->paginate(10);
        $count = Career::count();
        return view('private_admin.careers', compact('careers', 'count'), ["title" => 'career_articles']);
    }

    public function admin_career_detail(Request $request) {
        $id = $request->id;
        $type = "";
        if ($id == 0) {
            $type="new";
            $career = Career::where("id", "0")->first();
        } else {
            $type="old";
            $career = Career::where("id", $request->id)->first();
        }
        return view('private_admin.single-career', compact('type', 'career'), ['title' => 'newcareer']);
    }

    public function pages() {
        return view('private_admin.pages', ["title" => 'pages']);
    }

    public function messages() {
        $messages = Contact_message::orderBy('id', 'desc')->paginate(10);
        $count = Contact_message::count();
        return view('private_admin.messages', compact('messages', 'count'), ["title" => 'messages']);
    }

    public function admin_settings() {
        return view('private_admin.settings', ["title" => 'settings']);
    }

    public function admin_departments(Request $request) {
        $id = $request->id;
        $career = Career::where('id', $id)->first();
        $department_id = $career->id;
        $department_name = $career->department;
        $departments = Career_detail::where('department_id', $id)->get();
        $count = Career_detail::where('department_id', $id)->count();
        return view('private_admin.departments', compact('departments', 'count', 'department_name', 'department_id'), ['title' => 'departments']);
    }

    public function admin_department_detail(Request $request) {
        $id = $request->id;
        $parent_id = $request->parent_id;
        $type = "";
        if ($id == 0) {
            $type="new";
            $position = Career_detail::where("id", "0")->first();
        } else {
            $type="old";
            $position = Career_detail::where("id", $request->id)->first();
        }
        return view('private_admin.single-position', compact('type', 'position', 'parent_id'), ['title' => 'newposition']);
    }
}
