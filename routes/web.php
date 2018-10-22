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
		Route::get('careers','HomeController@careers');
		Route::get('legal_terms','HomeController@legal_terms');
		Route::post('charge','HomeController@charge');
		Route::get('faq','HomeController@faq_page');
		Route::get('blogs', 'HomeController@blogs');
		Route::get('/blog-detail/{id?}', 'HomeController@blog_detail');
		Route::get('/career-detail/{id?}', 'HomeController@career_detail');
		Route::get('/career-detail_info/{id?}', 'HomeController@career_detail_info');

		Route::post('message_img', 'ApiController@message_img');
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

		Route::post('add-newsletter','ApiController@add_newsletter');
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
		Route::post('create_giftcard', 'ApiController@create_giftcard');
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
		Route::get('host_experiences', 'HomeController@experience');
		Route::post('host_experience_data', 'ApiController@host_experience_data');
		Route::get('create_experiences', 'HomeController@create_experience');

		Route::get('dashboard', 'HomeController@dashboard');
		Route::get('dashboard-search', 'HomeController@dashboardSearch');
		Route::get('admin/booking', 'HomeController@admin_booking');
		Route::get('admin/partners', 'HomeController@admin_partners');
		Route::get('admin/get_partner', 'ApiController@get_partner');
		Route::get('admin/delete_partner', 'ApiController@delete_partner');
		Route::get('admin/newsletters', 'HomeController@admin_newsletters');
		Route::get('admin/delete_newsletter', 'ApiController@delete_newsletter');
		Route::get('admin/newsletter_detail/{id?}', 'HomeController@admin_newsletter_detail');
		Route::post('admin/newsletter_imgs', 'ApiController@newsletter_imgs');
		Route::get('admin/get_newsletter_imgs/{id?}', 'ApiController@get_newsletter_imgs');
		Route::get('admin/blogs', 'HomeController@admin_blogs');
		Route::get('admin/blog_detail/{id?}', 'HomeController@admin_blog_detail');
		Route::post('admin/save_blog', 'ApiController@save_blog');
		Route::post('admin/update_blog', 'ApiController@update_blog');
		Route::post('admin/delete_blog', 'ApiController@delete_blog');
		Route::post('admin/blog_img', 'ApiController@blog_img');
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
		Route::get('admin/settings', 'HomeController@admin_settings');
		Route::get('admin/pages', 'HomeController@pages');
		Route::get('admin/messages', 'HomeController@messages');
		Route::get('admin/get_messages', 'ApiController@get_messages');
		Route::get('admin/set_messages_status', 'ApiController@set_messages_status');
		Route::get('admin/logout', 'Auth\LoginController@logout');
		Route::post('admin/profile_photo','ProfileController@upload_photo');
		Route::post('admin/add_partner', 'ApiController@add_partner');
		Route::post('admin/update_partner', 'ApiController@update_partner');
		Route::post('admin/check_password', 'ApiController@check_password');
		Route::post('admin/save_admin_profile', 'ApiController@save_profile');
		Route::post('admin/save_admin_password', 'ApiController@save_password');
	});
});
