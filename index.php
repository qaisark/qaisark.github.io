<?php
	function fun()
	{
		$n=$_POST['nam'];
		$em=$_POST['emai'];
		$ser=$_POST['sub'];
		$ds=htmlspecialchars($_POST['message']);
		$msg="Qaisar Profile Message<br>Name : ".$n."<br> Email : ".$em."<br> Subject : ".$ser."<br>  Message : ".$ds;
		if(isset($_GET['msg']))
		{
			$msg=$_GET['msg'];
		}
		require 'PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->setFrom('mqasss99@gmail.com', 'Profile Site');
		$mail->addReplyTo('mqasss99@gmail.com', 'Profile Site');
		$mail->addAddress("qaisarkasana6@gmail.com", "Web Profile");
		$mail->addAddress("qaisarkasana6@gmail.com", "Web Profile");
		$mail->Subject ="Profile/Contact";
		$mail->msgHTML($msg);
		$mail->AltBody = $msg;
		//$mail->addAttachment($attach);
		if (!$mail->send()) {
			$message = "not sent";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "successfully send";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} 
	}
	if(isset($_POST['submit']))
	{
		fun();
	} 
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Qaisar Ansar Kasana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="img/qaisar-ps.png" sizeof="16x16">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>
		
	</script>
	<style>
		body {
			overflow: hidden;
		}

		/* Preloader */
		#preloader {
			position: fixed;
			top:0;
			left:0;
			right:0;
			bottom:0;
			background-color:#fff; /* change if the mask should have another color then white */
			z-index:99; /* makes sure it stays on top */
		}

		#status {
			width:200px;
			height:200px;
			position:absolute;
			left:50%; /* centers the loading animation horizontally one the screen */
			top:50%; /* centers the loading animation vertically one the screen */
			background-image:url(img/status.gif); /* path to your loading animation */
			background-repeat:no-repeat;
			background-position:center;
			margin:-100px 0 0 -100px; /* is width and height divided by two */
		}
	</style>
	</head>
	<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(img/qaisar-ps.png);"></div>
				<h1 id="colorlib-logo"><a href="/">Qaisar Ansar</a></h1>
				<span class="position"><a href="#">Full Stack Engineer</a> in Pakistan</span>
				<small></small>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>		
			</nav>
		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(img/bggg.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc" style="text-shadow: 2px 2px 2px rgba(255, 255, 255, 0.5);">
						   					<h1>I'm Qaisar</h1>
											   <h2><strong>A full stack developer in Islamabad, Pakistan</strong></h2>
												<p><a class="btn btn-primary btn-learn" href="#skills"><strong>My Skills</strong></a></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(img/bggg.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc" style="text-shadow: 2px 2px 2px rgba(255, 255, 255, 0.5);">
						   					<h1>I'm Qaisar</h1>
												<h2><strong>A full stack developer in Islamabad, Pakistan</strong></h2>
												<p><a class="btn btn-primary btn-learn" href="http://www.goprogs.com"><strong>View Portfolio <i class="icon-briefcase3"></i></strong></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Me</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p><strong>Hi I'm Qaisar Ansar Kasana</strong> Student of software engineering in Riphah International University. Having some mad programming skills like Laravel(PHP), Java, C++, C#, etc and other skills like HTML5, CSS3, Javascript, Bootstrap.</p>
										<p><strong>Hobbies; </strong>Hiking, Traveling, Reading and a social activist.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>that i have done many projects sucessfully!</h2>
										<a href="http://www.goprogs.com" class="btn-hire">Hire Me/My Team</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			
			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>Innovative Ideas</h3>
									<p>It's incredibly important to consider how your company/business</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>E-Commerce</h3>
									<p>I have some great expertise in e-commerce website solutions.
										</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Web Designing</h3>
									<p>I can design responsive web pages according to industrial standards.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Web Customization</h3>
									<p>I can customize old websites to new standards with quality.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Database</h3>
									<p>I can design databases with database normalization standards.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Application</h3>
									<p>I can design and develop desktop and web applications.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<section class="colorlib-skills" data-section="skills" id="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p></p>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Laravel (PHP)</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Javascript/jQuery</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML5</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>CSS3</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>C#/ASP.NET</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Java, C++</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bachelor Degree of Software Engineering
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>Doing Bachelor of Software Engineering from Riphah International University, Islamabad.</p>
										      		</div>
										      		<div class="col-md-6">
										      			<p>I have been involved in soical/extra cocricullar activities and holding lot of certicificates and shields.</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Intermediate Degree of Computer Science
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>So my real journey towards my professional life begins in Intermediate degree where i start building my skills.</p>
													<ul>
														<li>Topper of FG College Kotli, 2016</li>
														<li>Disciplined Student award of the year</li>
													</ul>
									        </div>
									    </div>
									</div>
								
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									            <p>In simple, before Intermediate i was an average student with zeal to learn some good stuff.</p>	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#">Full Stack Developer</a> <span>2017-Continue</span></h2>
					                  <p>I am working as a full stack developer with Go Progs Inc.</p>
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box">Work with Go Progs Inc.</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="http://www.goprogs.com" target="_blank" class="btn btn-primary btn-lg btn-load-more">View Portfolio</a></p>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">qaisar@goprogs.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Golra Mor, Near Hajj Complex, i-14 Islamabad, Pakistan</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+92 303 8112825</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form method="post" action="index.php">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" name="nam">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email" name="emai">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject" name="sub">
										</div>
										<div class="form-group">
											<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<hr> 
				<div id="footer"> 
					<ul>
						<li><a href="http://www.facebook.com/QaisarAnsarKasana"><i class="icon-facebook2"></i></a></li>
						<li><a href="http://www.twitter.com/QaisarAnsar"><i class="icon-twitter2"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-linkedin2"></i></a></li>
					</ul>
					<div class="colorlib-footer">
					<p><small>
						Copyright &copy; <script>document.write(new Date().getFullYear());</script>. | <small>Template by Colorlib</span></small></a>
						</span></small>
					</p>
					</div>
				</div>
			</section>
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
			$(window).on('load', function() { // makes sure the whole site is loaded 
				$('#status').fadeOut(); // will first fade out the loading animation 
				$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
				$('body').delay(350).css({'overflow':'visible'});
			})
		//]]>
	</script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	</body>
</html>