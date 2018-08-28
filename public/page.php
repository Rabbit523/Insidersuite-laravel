
<!DOCTYPE html>
<html  dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Just another ThemeGrill Demo site">
<link href="http://insidersuite.com/images/IS-black.png" rel="icon" sizes="152x152">
<title>
	Insider Suite - Online flash deals for luxury hotels</title>
<link rel="stylesheet" href="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://insidersuite.com/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="http://insidersuite.com/style.css">

<script type='text/javascript' src='https://demo.themegrill.com/maintenance-page-pro/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script>
   var script = {"progress_bar":"on","mp_progress_complete":75,"mp_progress_text":"% Completed","counter_activate":"on","counter_style":"style1","supersize_activate":"on"};
</script>
	<script>
		var counter = {"end_date":0000,"auto_launch":"off","days":"Days","hours":"Hours","minutes":"Minutes","seconds":"Seconds"};
	</script>
<script>
   jQuery(document).ready(function() {
       jQuery('.login-toogle-btn').click(function() {
         jQuery(".maintenance-login-form-wrap").toggleClass('active');
      });
   });
</script>
								<script>var slides = ["http://insidersuite.com\/images\/Background\/background3.jpg","http://insidersuite.com\/images\/Background\/background1.jpg","http://insidersuite.com\/images\/Background\/background2.jpg","http://insidersuite.com\/images\/Background\/background4.jpg"];</script>
											<script>var slider_settings = {"duration":4000,"fade":1000};</script>
							<style type="text/css">
						         		</style>
<!--   			<link href='//fonts.googleapis.com/css?family=Signika Negative:300,400' rel='stylesheet' type='text/css'> -->

			<style type="text/css">
									h1,h2,h3,h4,h5,h6 {
						color: #00ffff;
					}
				
									p,.about-content, .contact-content{
						color: #f5f5ee;
					}
																													h1,h2,h3,h4,h5,h6 {
						font-family:Signika Negative:300,400;
					}
									body,button,input,select,textarea,p  {
						font-family:Signika Negative:300,400;
					}
								</style>
			</head>

<body class="home">
	<div class="page-wrap" id="content-wrap">
		<div id="about-layer">
	<section id="about-us" class="about">
		<div class="close"><i class="fa fa-close"></i></div>
		<h1 class="site-title">About Us</h1>
		<div class="about-content">
			Welcome to the best-kept luxury travel secret.

Insider Suite is the first Australian luxury travel club, offering unforgettable experience, at affordable prices. Our members receive exclusive flash sales on a selection of charming hotels, 4 and 5-star boutique hotels around the world.

Last but not least, Insider Suite is a wholly experience. Our goal is to take our members from wherever they are to a discovery of their insider explorer. 

Get ready to shop travel like never before.		</div>
	</section>
</div>	<div id="module">
		<section id="content">
							<div class="logo">
					<img src="http://insidersuite.com/images/Logo-is_3.png">
				</div><!-- .logo -->
							<div class="construction-msg">
							<h1 class="entry-title" style="color: #ffffff">Website release - 30 of May</h1>
							<h2 class="entry-title" style="color: #ff6666">1st flash sales July 18</h2>
					<p>We are currently working on something new and we will be back soon with great new features. Thank you for your patience.</p>
				</div>
						<div class="button-link">
									<a href="#" class="about-link">About Us</a>
							</div>
<!--             			<div id="countdown-wrap">
   				<ul id="countdown">
   					<div class="circle-time" data-timer="83896510"></div>
   				</ul>
   			</div> -->
         			<div class="social-icons clearfix">
				<ul>
											<li class="facebook"><a href="https://www.facebook.com/insidersuite/" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li class="instagram"><a href="https://www.instagram.com/insidersuite/" target="_blank"><i class="fa fa-instagram"></i></a></li>

									</ul>
			</div><!-- .social-icons -->

							<div class="progress-bar">
					<div id="progress-goal"></div>
				</div><!-- .progress-bar -->
					</section>

					<section id="newsletter">
				<div class="wrapper clearfix">
					<div class="mp-one-half">
						<div class="newsletter-content">
											<h2 class="entry-title">Get Notification When We Launch Back</h2>
																		<p>You can subscribe to our mailing lists and get the notification right in your mailbox about when we will launch back.</p>
									</div>
					</div>
					<div class="mp-one-half mp-one-half-last subscribe-form">
						<form method = 'POST' class='InputForm'>
								<div class="sign-up">
									<div class="email-field">
										<input type="text" placeholder="Enter your email address to subscribe" class="inputsubs" name="email" required>
									</div>
									<div class="subscribe-button">
										<button type="submit" name="Subscribe" value="submit">Subscribe</button>
									</div>
								</div>
						</form>
						<?php
								include('SMTPconfig.php');
								if(isset($_POST['Subscribe'])){

									$email = "'".$_POST['email']."'";

									$sql = "INSERT INTO member (email) VALUES (".$email.");";
									$con=mysqli_connect("localhost","insidgd5","ImplementationIS19..","insidgd5_WPDLA");
									mysqli_query($con, $sql);

								$mail->subject = 'New member';

								$mail->message = '<html>
								<body>

								<h1>New member added keep pushing</h1>
								</body>
								</html>';

								$mail->from('contact@insidersuite.com', 'Insider Suite');
								$mail->to("essabar.yassine@gmail.com", "Client Name");
								if ($mail->send())
								echo "";
								else echo $mail->error;

						}
							?>
						
					</div>
				</div>
			</section><!-- #newsletter -->
      		<footer id="colophon" class="site-footer">
							<div class="copyright">Copyright © <a href="http://insidersuite.com">Insider Suite</a></div>
					</footer>
	</div>
	</div><!-- #content-wrap -->
            <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/goalProgress.min.js">
            	
            </script>
               <script src="c"></script>
               <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/TimeCircles.js"></script>
               <!-- <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/jquery.easing.min.js"></script> -->
               <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/supersized.3.2.7.min.js"></script>
               <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/supersized.shutter.min.js"></script>
               <script src="https://demo.themegrill.com/maintenance-page-pro/wp-content/plugins/maintenance-page-pro/public/js/maintenance-scripts.js"></script>
      </body>
</html>