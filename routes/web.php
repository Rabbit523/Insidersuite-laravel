<?php

Route::group(['middlewareGroups' => 'web'], function () {
	Route::get('/','HomeController@home')->name("home");
	Route::group(['middleware' => 'UnAuthenticated'], function() {
		Route::get('/signup','HomeController@home');
		Route::get('our_story','HomeController@our_story');
		Route::get('write_to_us','HomeController@write_to_us');
		Route::get('contacts','HomeController@contact');		
		Route::post('write_mail_un','HomeController@write_to_us_mail');
		Route::post('send_feedback','HomeController@send_feedback');
		Route::get('how_it_works','HomeController@how_it_works');
		Route::get('gift_card','HomeController@gift_card');
		Route::get('mail_gift_card','HomeController@mail_gift_card');
		Route::get('careers','HomeController@careers');
		Route::get('legal_terms','HomeController@legal_terms');
		Route::post('charge','HomeController@charge');
		Route::get('faq','HomeController@faq_page');
		Route::get('blogs', 'HomeController@blogs');
		Route::get('/blog-detail/{id?}', 'HomeController@blog_detail');
		Route::get('/career-detail/{id?}', 'HomeController@career_detail');
		Route::get('/career-detail_info/{id?}', 'HomeController@career_detail_info');
		
		Route::post('message-img', 'ApiController@message_img');
		Route::post('authenticateUser','Auth\LoginController@authenticateUser');
		Route::post('registration','Auth\RegisterController@registration');
		Route::get('facebook/login' , 'Auth\LoginController@facebook_login_redirect');
		Route::get('facebook/callback', 'Auth\LoginController@facebook_login_callback');
		Route::get('google/login' , 'Auth\LoginController@google_login_redirect');
		Route::get('google/callback', 'Auth\LoginController@google_login_callback');
		Route::post('forget_password_mail','Auth\ForgotPasswordController@forgot_password_mail');
		Route::get('reset_password/{token}','Auth\ForgotPasswordController@reset_password_page');
		Route::get('giving_review/{token}', 'HomeController@giving_feedback');
		Route::post('update_password','Auth\ForgotPasswordController@update_password');
		Route::post('gift_payment','PaymentController@gift_payment');
        
		Route::post('add-newsletter','ApiController@add_newsletter');
		Route::post('live-message', 'HomeController@live_message');
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
		Route::get('gift-payment', 'ApiController@paidGiftCard');
		Route::get('experience-payment', 'ApiController@experiencePayment');
		Route::get('profile','HomeController@profile');
		Route::post('update_profile','ProfileController@update_profile');
		Route::post('profile_photo','ProfileController@upload_photo');
		Route::post('message_img', 'ApiController@message_img');
		Route::post('login_update','ProfileController@login_update');
		Route::get('travel', 'HomeController@travel');
		Route::post('travel_companion', 'ApiController@travel_companion');
		Route::post('book_alert', 'ApiController@book_alert');
		Route::post('set_subscription_newsletter', 'ApiController@set_subscription_newsletter');
		Route::post('get_subscription_newsletter', 'ApiController@get_subscription_newsletter');
		Route::post('send_sponsor_mail', 'ApiController@send_sponsor_mail');
		Route::post('feedback_rate', 'ApiController@feedback_rate');
		Route::post('blog_favourite', 'ApiController@blog_favourite');

		Route::post('live_message', 'HomeController@live_message');

// 		Route::get('orders','OrdersController@list');
// 		Route::get('hotels/list','HotelController@list_hotels');
// 		Route::get('hotel/details/{id}','HotelController@hotel_details');
		Route::get('favourites_list', 'FavouritesController@list_favourites');
		Route::post('save_favourite', 'ApiController@save_favourite');
		Route::post('delete_favourite', 'ApiController@delete_favourite');
		Route::get('get_notification', 'ApiController@get_notification');		

		Route::get('google','GoogleApiController@get_friend_list');
		Route::get('sponsor/google','GoogleApiController@sponsor_get_friend_list');
		Route::get('outlook/get_access_token','OutlookApiController@get_access_token');
		Route::get('outlook/get_outlook_callback','OutlookApiController@get_outlook_callback');
		
		Route::get('giving_review/{token}', 'HomeController@giving_feedback');
		
		Route::get('yahoo','YahooApiController@yahoo');
		Route::get('experience', 'HomeController@experience');
		Route::post('host_experience_data', 'ApiController@host_experience_data');
		Route::get('create_experience/{id?}', 'HomeController@create_experience');
		Route::get('get_progress_status', 'ApiController@get_progress_status');
		Route::get('get_experience', 'ApiController@get_experience');
		Route::get('get_experience_details', 'ApiController@get_experience_details');
		Route::post('save_general_info', 'ApiController@save_general_info');
		Route::post('create_accom_info', 'ApiController@create_accom_info');
		Route::post('remove_accom_info', 'ApiController@remove_accom_info');
		Route::post('undo_accom_info', 'ApiController@undo_accom_info');
		Route::post('create_act_info', 'ApiController@create_act_info');
		Route::post('remove_act_info', 'ApiController@remove_act_info');
		Route::post('undo_act_info', 'ApiController@undo_act_info');
		Route::post('send_invite_email', 'ApiController@send_invite_email');
		Route::post('save_payment_user', 'ApiController@save_payment_user');
		Route::get('validate_promo_code', 'ApiController@validate_promo_code');
		// Dashboard - /dashboard
		Route::get('dashboard', 'HomeController@dashboard');		
		Route::get('dashboard-search', 'HomeController@dashboardSearch');
		// Booking Request - /admin/booking
		Route::get('admin/booking', 'HomeController@admin_booking');
		// Partner Backend- /admin/partners
		Route::get('admin/partners', 'HomeController@admin_partners');
		Route::get('admin/get_partner', 'ApiController@get_partner');
		Route::get('admin/delete_partner', 'ApiController@delete_partner');
		// Newsletter Backend- /admin/newsletters
		Route::get('admin/newsletters', 'HomeController@admin_newsletters');
		Route::get('admin/delete_newsletter', 'ApiController@delete_newsletter');
		Route::get('admin/newsletter_detail/{id?}', 'HomeController@admin_newsletter_detail');
		Route::post('admin/newsletter_imgs', 'ApiController@newsletter_imgs');
		Route::get('admin/get_newsletter_imgs/{id?}', 'ApiController@get_newsletter_imgs');
		// Promotion Backend- /admin/promos
		Route::get('admin/promos', 'HomeController@admin_promos');		
		Route::get('admin/promo/{id?}', 'HomeController@admin_promo');	
		Route::post('admin/save_promotion', 'ApiController@save_promotion');
		Route::post('admin/update_promotion', 'ApiController@update_promotion');
		Route::get('admin/delete_promo', 'ApiController@delete_promotion');		
		// Blogs Backend- /admin/blogs
		Route::get('admin/blogs', 'HomeController@admin_blogs');
		Route::get('admin/blog_detail/{id?}', 'HomeController@admin_blog_detail');
		Route::post('admin/save_blog', 'ApiController@save_blog');
		Route::post('admin/update_blog', 'ApiController@update_blog');
		Route::post('admin/delete_blog', 'ApiController@delete_blog');
		Route::post('admin/blog_img', 'ApiController@blog_img');
		// Careers Backend- /admin/careers
		Route::get('admin/careers', 'HomeController@admin_careers');
		Route::get('admin/career_detail/{id?}', 'HomeController@admin_career_detail');
		Route::post('admin/save_career', 'ApiController@save_career');
		Route::post('admin/delete_career', 'ApiController@delete_career');
		Route::post('admin/career_img', 'ApiController@career_img');
		Route::get('admin/departments/{id?}', 'HomeController@admin_departments');
		Route::post('admin/save_department', 'ApiController@save_department');
		Route::post('admin/delete_department', 'ApiController@delete_department');
		Route::get('admin/department_detail', 'HomeController@admin_department_detail');
		Route::post('admin/get_parent', 'ApiController@get_parent');
		Route::post('admin/save_position', 'ApiController@save_position');
		Route::post('admin/position_img', 'ApiController@position_img');
		// Settings Backend- /admin/settings
		Route::get('admin/settings', 'HomeController@admin_settings');
		Route::post('admin/profile_photo','ProfileController@upload_photo');
		Route::post('admin/add_partner', 'ApiController@add_partner');
		Route::post('admin/update_partner', 'ApiController@update_partner');
		Route::post('admin/check_password', 'ApiController@check_password');
		Route::post('admin/save_admin_profile', 'ApiController@save_profile');
		Route::post('admin/save_admin_password', 'ApiController@save_password');
		// Offers Backend- /admin/pages
		Route::get('admin/pages', 'HomeController@pages');
		Route::get('admin/accomodations/{id?}', 'HomeController@accomodation_page');
		Route::get('admin/create_accomodation', 'HomeController@create_accomodation_page');
		Route::get('admin/create_activity', 'HomeController@create_activity_page');
		Route::post('admin/accom_img', 'ApiController@accom_image');
		Route::post('admin/save_accommodation', 'ApiController@save_accommodation');
		Route::post('admin/create_calendar_accommodation', 'ApiController@create_calendar_accommodation');
		Route::post('admin/update_accommodation', 'ApiController@update_accommodation');
		Route::get('admin/delete_accom', 'ApiController@delete_accommodation');
		Route::get('admin/delete_act', 'ApiController@delete_activity');
		Route::get('admin/activities/{id?}', 'HomeController@activity_page');
		Route::get('admin/get_offer', 'ApiController@get_offer');
		Route::get('admin/delete_offer', 'ApiController@delete_offer');
		Route::post('admin/add_offer', 'ApiController@add_offer');
		Route::post('admin/update_offer', 'ApiController@update_offer');
		Route::post('admin/offer_image', 'ApiController@offer_image');
		Route::post('admin/accom_exp_img', 'ApiController@accom_exp_img');
		Route::post('admin/create_exp_accom', 'ApiController@create_exp_accom');
		Route::post('admin/accom_banner_img', 'ApiController@accom_banner_img');
		Route::post('admin/save_activity', 'ApiController@save_activity');
		Route::post('admin/update_activity', 'ApiController@update_activity');
		Route::post('admin/activity_img', 'ApiController@activity_img');
		Route::post('admin/create_calendar_activity', 'ApiController@create_calendar_activity');
		Route::get('admin/edit_accom_experience/{id?}', 'HomeController@edit_accom_experience');
		Route::post('admin/save_exp_link_imgs', 'ApiController@save_exp_link_imgs');
		Route::get('admin/delete_edit_experience', 'ApiController@delete_edit_experience');
		Route::get('admin/upload_exp_image', 'HomeController@upload_exp_image');
		// Messages Backend- /admin/messages
		Route::get('admin/messages', 'HomeController@messages');
		Route::get('admin/get_messages', 'ApiController@get_messages');
		Route::get('admin/set_messages_status', 'ApiController@set_messages_status');
		// Logout from Backend
		Route::get('admin/logout', 'Auth\LoginController@logout');		
	});
});
