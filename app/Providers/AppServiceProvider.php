<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Mail;

use App\Models\Promotion;
use App\Models\GiftCard;
use App\Models\Alerts;
use App\Models\Offer;
use App\User;

use App\Mail\Alert_Mail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {                
        $promos = Promotion::get();
        foreach($promos as $promo) {
            if ($promo->end_date != null) {
                $start_date = strtotime($promo->start_date);
                $end_date = strtotime($promo->end_date);
                $current_date = strtotime(date("m/d/Y"));
                $diff1 = ($current_date - $start_date) / 86400;
                $diff2 = ($end_date - $current_date) / 86400;                
                if ($diff1 >= 0 && $diff2 >= 0) {
                    $promo->status = "active";
                    $promo->save();
                } else {
                    $promo->status = "inactive";
                    $promo->save();
                }
            } else {
                $start_date = strtotime($promo->start_date);
                $current_date = strtotime(date("m/d/Y"));
                $diff = ($current_date - $start_date) / 86400;
                if ($diff >= 0) {
                    $promo->status = "active";
                    $promo->save();
                } else if ($diff < 0) {
                    $promo->status = "inactive";
                    $promo->save();
                }
            }
        }
        $gifts = GiftCard::get();
        foreach($gifts as $gift) {
            $str_o = $gift->created_at;
            $sub_str = substr($str_o,0,10);
            $temp = explode("-", $sub_str);            
            $year = (int)$temp[0] + 1;
            $end_date_o = $year."-".$temp[1]."-".$temp[2];
            $end_date = strtotime($end_date_o);
            $current_date = strtotime(date("m/d/Y"));
            $diff = ($end_date - $current_date) / 86400;
            if ($diff < 0) {
                $gift->status = "expired";
                $gift->save();
            }
        }
        $receivers = Alerts::get();
        $offers = Offer::where('status', 'true')->get();        
       
        foreach($receivers as $receiver) {
            $destination = $receiver->destination;
            foreach($offers as $offer) {
                if ($receiver->destination == $offer->location_country) {
                    $current_date = strtotime(date('m/d/Y'));
                    $_departure_date = $receiver->departure_date;
                    $temp = explode("-", $_departure_date);
                    $_month = (int)$temp[1];
                    $_year = (int)$temp[0];                    
                    if ($_month == 3) {$month_t = 12; $month_o = 2; $year_t = $_year - 1; $year_o = $_year;}
                    elseif ($_month == 2) {$month_t = 11; $month_o = 1; $year_t = $_year - 1; $year_o = $_year;}
                    elseif ($_month == 1) {$month_t = 10; $month_o = 12; $year_t = $_year - 1; $year_o = $_year;}
                    else {$month_t = $_month - 3; $month_o = $_month - 1; $year_t = $_year; $year_o = $_year;}
                    $departure_date_tbefore = $year_t."-".$month_t."-".$temp[2];
                    $departure_date_obefore = $year_o."-".$month_o."-".$temp[2];                    
                    $diff_o = (strtotime($departure_date_obefore) - $current_date) / 86400;
                    $diff_t = (strtotime($departure_date_tbefore) - $current_date) / 86400;
                    if ($diff_o == 0 || $diff_t == 0) {
                        $user = User::where('user_id', $receiver->user_id)->first();
                        Mail::to($user->email)->send(new Alert_Mail($destination));
                    }
                }
            }
        }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
