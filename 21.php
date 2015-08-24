<?php  

	if ($_POST["submit"]) {

		$result = '<div class="alert alert-success" style="position; absolute;">Form submitted</div>';

		if (!$_POST['name']) {

			$error = 'Please enter your name<br />';

		}

		if (!$_POST['email']) {

			$error .= 'Please enter your email address<br />';
			// $error .= is the same as $error = $error +
			
		}

		if (!$_POST['comment']) {

			$error .= 'Please enter your comment<br />';
			// $error .= is the same as $error = $error +
			
		}

		if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
		   // if email is filled in BUT doesn't equal a valid email address

		    $error .= 'Please enter a valid email address';
		
		}

		if ($error) {

			$result = '<div class="alert alert-danger"><strong>There were error[s] in your form:<br />'.$error.'</strong></div>';
		
		} else {

			if (mail("hello@pacificano.com", "Comment from website!", "Name: ".$_POST['name']."

Email: ".$_POST['email']."

Query: ".$_POST['query']."

Comment: ".$_POST['comment'])) {

					$result = '<div class="alert alert-success"><strong>Thank you!</strong><br />We\'ll be in touch.</div>';
			
				} else {

					$result = '<div class="alert alert-danger" style="position; absolute;">Sorry, there was an error sending your message. Please try again later.</div>';
				
				}

		}

	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pacificano - eco-friendly web development, based in Sydney, Australia</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

		.landingDiv {
			background-image: url("splash-oceanRocks.JPG");
			background-size: cover;
			padding-top: 0px;
		}

		.servicesDiv {
			background-image: url("splash-pinkSky.JPG");
			background-size: cover;
			padding-top: 80px;
			padding-bottom: 80px;
		}

		.aboutDiv {
			padding-top: 80px;
			padding-bottom: 80px;
		}

		.blogDiv {
			padding-top: 80px;
			padding-bottom: 20px;
		}

		.blogDiv h1, .blogDiv h5, .blogDiv p {
			padding-bottom: 20px;
			word-wrap: break-word;
		}

		h1 {
			font-size: 450%;
		}

		hr {
			padding-bottom: 20px;
		}

		.extrasRecentPosts {
			padding-top: 20px;
		}

		.extrasArchives, .extrasCategories {
			padding-top: 30px;
		}

		.blogExtras p {
			padding: 0px;
		}

		.testimonialDiv {
			background-color: lightblue;
			padding-top: 80px;
			padding-bottom: 80px;
		}

		.contactDiv {
			background-image: url("splash-sunset.JPG");
			background-size: cover;
			padding-top: 0px;
		}

		.contactDiv h3 {
			padding-bottom: 20px;
		}

		.contactDiv a {
			color: white;
		}

		.contactDiv .glyphicon {
			position: relative;
			top: 3px;
			padding-right: 5px;
		}

		.center {
			text-align: center;
		}

		.white {
			color: white;
		}

		.whitebg {
			background-color: white;
			opacity: 0.9;
			border-radius: 20px;
		}

		.whitebgServices {
			background-color: white;
			opacity: 0.8;
			border-radius: 10px;
			padding: 20px;
			margin: 0px;
		}

		.newsletterDiv {
			padding: 0px 30px;
			background-color: rgba(34,46,65, 0.8);
		}

		.fullWidth {
			width: 100%;
		}

		.dropShadow {
			text-shadow: 0px 0px 10px black;
		}

		.marginBottom {
			margin-bottom: 40px;
		}

		@media (max-width: 1200px) {
		  h1 {
		    font-size: 380%;
		  }
		}

		@media (max-width: 520px) {
		  h1 {
		    font-size: 280%;
		  }
		}

    </style>

	<!-- Googly Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-66656088-1', 'auto');
	  ga('send', 'pageview');

	</script>

  </head>
  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="80">
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
    	
    	<div class="container">
    		
    		<div class="navbar-header">
    			
    			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>

    			</button>

    			<a class="navbar-brand" href="#"><img src="logo.svg" height="30" style="position: relative; top: -1px;"></a>

    		</div>

    		<div class="navbar-collapse collapse navbar-right" id="navbar">
    			
    			<ul class="nav navbar-nav">

    				<li><a href="#landingDiv">Home</a></li>
					<li><a href="#aboutDiv">Our Services</a></li>
    				<li><a href="#contactDiv">Contact</a></li>

    			</ul>

    		</div>

    	</div>

    </nav>

	<!-- LANDING DIV -->
    <div class="container-fluid landingDiv splashDiv" id="landingDiv">

    	<div class="container">
    	
	    	<div class="row">
	    		
	    		<div class="col-md-6 white" style="padding-top: 130px;">
	    			
	    			<h1 class="dropShadow">A Fresh<br />Approach to<br />Web Development</h1>
					<h3 class="dropShadow">All our web development packages are 100% carbon neutral, with 5-star customer service as standard, and a percentage of proceeds being donated to help support pacific ocean conservation.</h3>

	    		</div>

	    		<!-- Newsletter Sign Up -->
	    		<div class="col-md-3 col-md-offset-3 newsletterDiv" style="padding-top: 170px; color: white;">

	    			<form action="http://pacificano.us11.list-manage.com/subscribe/post?u=9e3e430d9b1934531b447d0aa&amp;id=5658fa2591" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

						<p class="lead" style="font-size: 13pt;">Find out how to grow your business online while helping the environment.<br/><span style="color:#8DCBB4;">Subscribe to our newsletter.</span></p>

						<label for="mce-FNAME" style="font-size: 9pt; margin: 0px;">Your first name</label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" style="width: 100%; color: black; margin-bottom: 10px;">

						<label for="mce-EMAIL" style="font-size: 9pt; margin: 0px;">Your email address</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="width: 100%; color: black; margin-bottom: 20px;">

						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>   

						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9e3e430d9b1934531b447d0aa_5658fa2591" tabindex="-1" value=""></div>

					    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #8DCBB4; color: #222E41; border: none; font-weight: bold; width: 100%;">

						<p style="text-align: center; font-size: 7pt; padding-top: 10px;">We will never send you spam or share your information.<br /> You can unsubscribe at any time.</p>

					</form>

	    		</div>

	    	</div>

    	</div>

    </div>

	<!-- ABOUT US DIV -->
    <div class="container aboutDiv" id="aboutDiv">
    	
    	<div class="row">
    		
    		<div class="col-md-12">
    			
    			<h2>Our Services</h2>

				<p class="lead">Pacificano is an eco-friendly web development company based in Sydney, Australia. As a small, friendly, Australian-based company we can offer you a flexible, personalised service that big development businesses can't match, without compromising on price or reliability.</p>

				<p class="lead"><a href="http://www.greenpeace.org/usa/wp-content/uploads/legacy/Global/usa/planet3/PDFs/2015ClickingClean.pdf">Up to 5% of the world’s carbon emissions are created by equipment used for hosting web servers</a>. With some estimates predicting this to rise to 12% by 2017, we'd like to do our part and help counter this trend by offering individuals and companies a carbon-positive web development service. We carefully <a href="http://www.epa.vic.gov.au/AGC/home.html">calculate the carbon emissions of our whole business</a> and ensure that significantly more than this is absorbed by <a href="http://www.greenfleet.com.au/">native forests planted by Greenfleet Australia</a>. We also donate a percentage of our profits to the <a href="http://www.marineconservation.org.au/pages/great-barrier-reef.html">Australian Marine Conservation Society</a> who help protect the Great Barrier Reef.</p>

				<p class="lead">You can be confident when you use our services that you are getting ultra-reliable and high-quality web apps and services, while also helping to save the environment.</p>

    		</div>

    	</div>

    </div>

    <!-- OUR SERVICES DIV -->
    <div class="container-fluid servicesDiv splashDiv" id="servicesDiv">
    	
    	<div class="container">
    		
    		<div class="row">
    			
    			<div class="col-md-4" id="hosting">

    				<div class="whitebgServices center marginBottom">

    					<img src="images/01-hosting.png">
	    				<h2>Hosting</h2>
	    				<p>We offer a range of affordable and reliable hosting services.</p>

    				</div>

    			</div>
    			<div class="col-md-4" id="domains">

    				<div class="whitebgServices center marginBottom">
    				
    					<img src="images/02-domains.png">
	    				<h2>Domains</h2>
	    				<p>We can help you secure and register your business's domain name.</p>

    				</div>

    			</div>
    			<div class="col-md-4" id="wordpress">

    				<div class="whitebgServices center">
    				
    					<img src="images/03-wordpress.png">
	    				<h2>Wordpress</h2>
	    				<p>We are experts in building Wordpress CMS's and blogs, tailored just for you.</p>

					</div>

    			</div>

    		</div>

    		<br /><br />

    		<div class="row">
    			
    			<div class="col-md-4" id="mobile">

    				<div class="whitebgServices center marginBottom">
    				
    					<img src="images/04-mobile.png">
	    				<h2>Mobile/Web Apps</h2>
	    				<p>Looking to bring your business to a mobile audience? We can help you.</p>

    				</div>

    			</div>
    			<div class="col-md-4" id="javscript">

	    			<div class="whitebgServices center marginBottom">
    				
    					<img src="images/05-javascript.png">
	    				<h2>Javascript</h2>
	    				<p>We absolutely adore Javascript and would love to help you with your project.</p>

    				</div>

    			</div>
    			<div class="col-md-4" id="seo">

    				<div class="whitebgServices center">
    				
    					<img src="images/06-search.png">
	    				<h2>SEO</h2>
	    				<p>We can give you advice and tips on how to improve your business's web ranking.</p>

    				</div>

    			</div>

    		</div>

    	</div>

    </div>

    <!-- CONTACT US -->
    <div class="container-fluid contactDiv splashDiv" id="contactDiv">
    	
    	<div class="container">
    		
    		<div class="row">
    			
    			<div class="col-md-6 white" style="padding-top: 130px;">
    				
    				<h1 class="dropShadow">Contact Us</h1>
					<h3 class="dropShadow">Feel free to email, tweet, or fork us.</h3>

					<p class="lead dropShadow"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:hello@pacificano.com">hello@pacificano.com</a></p>
					<p class="lead dropShadow"><span class="glyphicon glyphicon-text-width" aria-hidden="true"></span> <a href="http://www.twitter.com/pacificano_au">http://www.twitter.com/pacificano_au</a></p>
					<p class="lead dropShadow"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> <a href="http://www.github.com/pacificano">http://www.github.com/pacificano</a></p>

    			</div>

    			<!-- Contact Form -->
	    		<div class="col-md-3 col-md-offset-3 newsletterDiv" style="padding-top: 170px; color: white;">

    				<?php 

						echo $result;

					?>

	    			<form method="post" action="21.php#contactForm" id="contactForm">

						<p class="lead" style="font-size: 13pt;">Having a question for us?<br/><span style="color:#8DCBB4;">Shoot us a message now!</span></p>

						<label for="name" style="font-size: 9pt; margin: 0px;">Your first name</label>
						<input type="text" name="name" style="width: 100%; color: black; margin-bottom: 10px;" value="<?php echo $_POST['name']; ?>">

						<label for="email" style="font-size: 9pt; margin: 0px;">Your email address</label>
						<input type="email" name="email" style="width: 100%; color: black; margin-bottom: 10px;" value="<?php echo $_POST['email']; ?>"> 

						<label for="query" style="font-size: 9pt; margin: 0px;">How can we help you?</label>
						<select name="query" style="margin-bottom: 10px; width: 100%; font-size: 16px;">
							<option>Just saying 'hi'</option>
							<option>A question about your services</option>
							<option>I'd like to hire you</option>
						</select>

						<label for="comment" style="font-size: 9pt; margin: 0px;">Your message</label>
						<textarea name="comment" cols="40" rows="5" style="width: 100%; color: black; margin-bottom: 10px;"><?php echo $_POST['comment']; ?></textarea> 

					    <input type="submit" name="submit" value="Send" style="background-color: #8DCBB4; color: #222E41; border: none; font-weight: bold; width: 100%;">

					</form>

	    		</div>

    		</div>

    	</div>

    </div>

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<!-- WINDOW HEIGHT FOR DIVS -->
    <script type="text/javascript">

    	// alert($(window).width());

    	$(".splashDiv").css("min-height", $(window).height());
    	$(".newsletterDiv").css("min-height", $(window).height());
    	$(".blogExtras").css("min-height", $(".blogDetails").height()); 

    </script>

    <!-- MailChimp forms -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

  </body>
</html>