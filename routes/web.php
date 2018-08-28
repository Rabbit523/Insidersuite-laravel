<?php

Route::group(['middlewareGroups' => 'web'], function () {
	Route::get('/','HomeController@home');
	Route::group(['middleware' => 'UnAuthenticated'], function() {
		Route::get('/signup','HomeController@home');
		Route::get('our_story','HomeController@our_story');
		Route::get('write_to_us','HomeController@write_to_us');
		Route::get('contacts','HomeController@contact');
		Route::post('write_to_us_mail','HomeController@write_to_us_mail');
		Route::post('send_feedback','HomeController@send_feedback');
		Route::get('how_it_works','HomeController@how_it_works');
		Route::get('gift_card','HomeController@gift_card');
		Route::get('mail_gift_card','HomeController@mail_gift_card');
		Route::post('send_newsletter','HomeController@send_newsletter');
		Route::get('careers','HomeController@careers');
		Route::get('legal_terms','HomeController@legal_terms');
		Route::post('charge','HomeController@charge');
		Route::get('faq','HomeController@faq_page');
		Route::get('blogs', 'HomeController@blogs');
		Route::get('/blog-detail/{id?}', 'HomeController@blog_detail');
		Route::get('/career-detail/{id?}', 'HomeController@career_detail');
		Route::get('/career-detail-info/{id?}', 'HomeController@career_detail_info');

		Route::post('authenticateUser','Auth\LoginController@authenticateUser');
		Route::post('registration','Auth\RegisterController@registration');
		Route::get('facebook/login' , 'Auth\LoginController@facebook_login_redirect');
		Route::get('facebook/callback', 'Auth\LoginController@facebook_login_callback');
		Route::get('google/login' , 'Auth\LoginController@google_login_redirect');
		Route::get('google/callback', 'Auth\LoginController@google_login_callback');
		Route::post('forget_password_mail','Auth\ForgotPasswordController@forgot_password_mail');
		Route::get('reset_password/{token}','Auth\ForgotPasswordController@reset_password_page');
		Route::post('update_password','Auth\ForgotPasswordController@update_password');
		Route::post('gift_payment','PaymentController@gift_payment');
	});

	Route::group(['middleware' => 'Authenticated'], function() {
		Route::get('logout', 'Auth\LoginController@logout');
		Route::get('home','HomeController@home');
		Route::get('our-story','HomeController@our_story');
		Route::get('write-to-us','HomeController@write_to_us');
		Route::get('contact','HomeController@contact');
		Route::get('gift-card','HomeController@gift_card');
		Route::get('how-it-works','HomeController@how_it_works');
		Route::get('offers','HomeController@offers_page');
		Route::post('write_mail','HomeController@write_to_us_mail');
		Route::post('send-newsletter','HomeController@send_newsletter');
		Route::post('feedback','HomeController@send_feedback');
		Route::get('career','HomeController@careers');
		Route::get('legal-terms','HomeController@legal_terms');		
		Route::get('change_first_login_status','HomeController@login_status_change');
		Route::post('notify_site_details','HomeController@notify_site_details');
		Route::get('blog', 'HomeController@blogs');
		Route::get('/blog_detail/{id?}', 'HomeController@blog_detail');
		Route::get('/career_detail/{id?}', 'HomeController@career_detail');
		Route::get('/career_detail_info/{id?}', 'HomeController@career_detail_info');

		Route::get('alerts','HomeController@alert_page');
		Route::get('subscription', 'HomeController@subscription');
		Route::get('sponsor','HomeController@sponsor');	
		Route::get('mail_gift_card','HomeController@mail_gift_card');
		Route::get('profile','HomeController@profile');
		Route::post('update_profile','ProfileController@update_profile');
		Route::post('profile_photo','ProfileController@upload_photo');
		Route::post('login_update','ProfileController@login_update');
		Route::get('travel', 'HomeController@travel');
		Route::post('travel_companion', 'ApiController@travel_companion');
		Route::post('book_alert', 'ApiController@book_alert');
		Route::post('subscription_newsletter', 'ApiController@subscription_newsletter');
		Route::post('feedback_rate', 'ApiController@feedback_rate');
		Route::post('blog_favourite', 'ApiController@blog_favourite');
		Route::get('offer_detail/{id?}', 'HomeController@offer_detail');

		Route::post('attach_file', 'HomeController@message_attach');
		Route::post('live_message', 'HomeController@live_message');
		
		Route::get('orders','OrdersController@list');
		Route::get('hotels/list','HotelController@list_hotels');
		Route::get('hotel/details/{id}','HotelController@hotel_details');
		Route::get('favourites/list', 'FavouritesController@list_favourites');
		Route::get('favourites/add_to_favourite/{id}', 'FavouritesController@add_favourite');
		Route::get('favourites/remove_favourite/{id}', 'FavouritesController@remove_favourite');

		Route::get('google','GoogleApiController@get_friend_list');
		Route::get('sponsor/google','GoogleApiController@sponsor_get_friend_list');
		Route::get('outlook/get_access_token','OutlookApiController@get_access_token');
		Route::get('yahoo','YahooApiController@yahoo');
		Route::post('refer-mail','HomeController@refer_mail');
		Route::post('refer-all','HomeController@refer_all');
		Route::post('gift-payment','PaymentController@gift_payment');
		Route::get('host_experiences', 'HomeController@experience');

		Route::get('dashboard', 'HomeController@dashboard');
		Route::get('admin/booking', 'HomeController@admin_booking');
		Route::get('admin/partners', 'HomeController@admin_partners');
		Route::get('admin/newsletters', 'HomeController@admin_newsletters');
		Route::get('admin/blogs', 'HomeController@admin_blogs');
		Route::get('admin/careers', 'HomeController@admin_careers');
		Route::get('admin/settings', 'HomeController@admin_settings');
		Route::get('admin/pages', 'HomeController@pages');
		Route::get('admin/logout', 'Auth\LoginController@logout');

		Route::post('admin/add_partner', 'ApiController@add_partner');		
	});
});
