<?php
	 	if(isset($_SERVER['HTTPS'])):
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    else:
        $protocol = 'http';
    endif;

    $url = $protocol . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html slick-uniqueid="3" class="js no-touch csstransforms3d csstransitions video webkit chrome win js" style="height: auto;"><!--<![endif]-->
<head>
		<meta charset="utf-8">
		<title>Stephenville and Decatur, TX Electronic Repair and IT Services | Skinny's Repair Shop</title>
		<meta name="keywords" content="Phone repair, device repair, electronics repair, stephenville, decatur">
		<meta name="description" content="Stephenville and Decatur, TX Electronic Repair and IT Services">
		<meta name="Author" content="James Austin Hattox">

		<script src="https://use.typekit.net/fpa3xjx.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script><script src="https://use.typekit.net/fpa3xjx.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" type="text/css">

		<link href="<?php echo $url; ?>assets/css/dist.min.css" rel="stylesheet" type="text/css">

		<link rel='shortcut icon' type='image/x-icon' href='<?php echo $url; ?>/favicon.ico' />
	</head>
	<body class="smoothscroll enable-animation" cz-shortcut-listen="true">
			<div id="header" class="sticky  header-md transparent clearfix">
				<header id="topNav">
					<div class="container">
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li>
										<a href="#header">
											HOME
										</a>
									</li>
									<li>
										<a href="#pricing">
											SERVICES
										</a>
									</li>
									<li class="logo-list-item">
										<a class="logo pull-left" href="#">
											<img src="<?php echo $url; ?>assets/images/skinnys-logo.png" alt="Skinny's Repair Shop Logo" />
										</a>
									</li>
									<li>
										<a href="#testimonials">
											TESTIMONIALS
										</a>
									</li>
									<li>
										<a href="#contact">
											CONTACT
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>
			<section id="slider" class="fullheight">
				<div class="swiper-container" data-effect="fade" data-autoplay="false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('<?php echo $url; ?>assets/images/macbook_coffee.jpg');">
							<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<img class="mobile-logo wow fadeInDown" src="<?php echo $url; ?>assets/images/skinnys-logo.png" alt="Skinny's Repair Shop Logo" />

												<h1 class="top-h1 wow fadeInUp" data-wow-delay="0.4s">Skinny's Repair Shop</h1>
												<h2 class="top-h2 wow fadeInDown animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">Stephenville | Decatur</h2>
											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->

					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<!--
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
					-->

					<div class="sticky-side sticky-side-left visible-md visible-lg" id="slider-social-icons-container">
						<a href="https://www.facebook.com/SkinnysRepairShop" class="social-icon social-icon-light  social-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="https://twitter.com/skinnysrs" class="social-icon social-icon-light  social-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>
						<a href="https://plus.google.com/107448460262208765373/about" class="social-icon social-icon-light social-gplus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>
						<a href="https://www.instagram.com/skinnysrepairshop/" class="social-icon social-icon-light  social-instagram">
							<i class="icon-instagram"></i>
							<i class="icon-instagram"></i>
						</a>
					</div>
				</div>
					
			</section>
			<!-- /SLIDER -->

			<section class="callout-orange heading-title heading-arrow-bottom">
			</section>
			
			<section id="pricing">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Services &amp; Pricing</h2>
						<p class="lead ">Prices vary for each make and model, as well as supply and demand of components.</p>
						<hr>
					</header>

					<div class="row">

						<div class="col-md-3 col-sm-3 price-box">
							
							<div class="price-clean">                                
								<i class="fa fa-mobile"></i>
								<h5>Cell Phone Repair</h5>
								<hr>
								<p>Apple, Samsung, LG</p>
								<ul>
								  <li>Screen Replacement</li>
								  <li>Power Issues</li>
								  <li>Speakers</li>
								  <li>Physical Buttons</li>
								  <li>Cameras</li>
								  <li>Frame, Housing</li>
								  <li>Water damage</li>
								  <li>Software</li>
								  <li>Accessories</li>
								</ul>
								<div class="quote-btn-container">
									<hr>
									<a href="#contact" class="btn btn-3d btn-orange scrollTo">Get Quote</a>
								</div>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3 price-box">
							
							<div class="price-clean">                                
								<i class="fa fa-tablet"></i>
								<h5>Tablet Repair</h5>
								<hr>
								<p>Apple, Samsung, LG, Kindle</p>
								<ul>
								  <li>Screen Replacement</li>
								  <li>Power Issues</li>
								  <li>Speakers</li>
								  <li>Physical Buttons</li>
								  <li>Cameras</li>
								  <li>Frame, Housing</li>
								  <li>Water damage</li>
								  <li>Software</li>
  								<li>Accessories</li>
								</ul>
								<div class="quote-btn-container">
									<hr>
									<a href="#contact" class="btn btn-3d btn-orange scrollTo">Get Quote</a>
								</div>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3 price-box">
							<div class="price-clean"> 
								<i class="fa fa-laptop"></i>
								<h5>Computer Repair</h5>
								<hr>
								<p>Most Laptop, Desktop Makes and Models</p>
								<ul>
  								<li>Screen Replacement</li>
								  <li>Power Issues</li>
								  <li>Hard Drive Replacement, Recovery</li>
									<li>Virus Removal</li>
								  <li>Data Transfer</li>
								  <li>Software Upgrade</li>
								  <li>Cleanup, Optimization</li>
								  <li>Password Recovery</li>
								  <li>Custom Builds</li>
								  <li>Accessories</li>
								</ul>
								<div class="quote-btn-container">
									<hr>
									<a href="#contact" class="btn btn-3d btn-orange scrollTo">Get Quote</a>
								</div>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3 price-box">
							
							<div class="price-clean">                                
								<i class="fa fa-gears"></i>
								<h5>IT Services</h5>
								<hr>
								<p>Business and Home IT Support</p>
								<ul>
								  <li>Hardware, Software Repair</li>
								  <li>Server Maintenance</li>
								  <li>Networking</li>
									<li>System Upgrades</li>
  								<li>Security Analysis</li>
  								<li>On-site Service Calls</li>
  								<li>Off-site Virtual Support</li>
  								<li>Monthly Contract Service Available</li>
								</ul>
								<div class="quote-btn-container">
									<hr>
									<a href="#contact" class="btn btn-3d btn-orange scrollTo">Get Quote</a>
								</div>
							</div>
						
						</div>

					</div>

				</div>
			</section>

			<!-- -->
			<section class="parallax parallax-3" id="testimonials" style="background-image:url('<?php echo $url; ?>assets/images/scott_hands.jpg')">
				<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">Skinny's fixed my iPhone 6 Plus that had a bad port and would not charge. I drove all the way to Apple in Austin to get my phone fixed yesterday and it was a nightmare and left there without my phone fixed. A friend told me to go to Skinny's and they fixed it in about 2 hours! Great service and repairs worked! Thanks so much Skinny's!</p>
								</blockquote>
								<cite>
									Ashleigh Cole
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">They replaced the hard drive on my computer and were able to save what I wanted saved from my old dead hard drive! They called before doing anything, with all my options, and were so very nice and helpful. I will definitely use them again!</p>
								</blockquote>
								<cite>
									Tammy Whitehead Culpepper
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">iPad Emergency-dropped and shattered the screen before leaving to go out of town and really needed to take it with me. Who did I call...SKINNY'S of course!!! Thank you so much for fixing it up in just the nick of time! Kourtney</p>
								</blockquote>
								<cite>
									Tony Kourtney Landes
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">They had my iPhone 6 screen fixed so fast and it was a quality job! It isn't super cheap but you definitely get your money's worth. I would absolutely recommend them instead of having apple or someone else fix your phone.</p>
								</blockquote>
								<cite>
									Zoe Goldberg
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">After the Apple Store gave me the run around and I feel made my phone worse, I brought it to Skinny's in Decatur after a friend recommended it. The gentlemen that helped me was so nice, polite, and honest and had my phone working in 30 minutes. They explained everything in detail that could be wrong and things they might have to do to fix it. We need more business owners like this in Wise County. If I could give this place 100 stars I would.</p>
								</blockquote>
								<cite>
									Bryn Vincent
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">I was wanting to give away my older MacBook Pro but it very laggy and Skinny's was able to talk to me via messaging on Facebook with pricing information, etc. Dropped it off after work and received a text once it was done! Super easy process and everything is working perfectly! Also, they are incredibly friendly. Shop local &hearts;</p>
								</blockquote>
								<cite>
									Catalina Torres
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">I just left and he will ALWAYS get my business! Extremely nice & very helpful, something almost impossible to find these days! Highly recommend!</p>
								</blockquote>
								<cite>
									Kelly Arden Hall
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">If you're in the need for an electronic repair, this is definitely the place to take your broken device. Reasonable prices. Awesomely nice people. Speedy service, often same day.</p>
								</blockquote>
								<cite>
									Tiffany Shaver
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">Top notch service &amp; warranty! Top notch people! They also do computer work / vius removal! This is where I will always go to get my devices repaired! Decatur is a better place because of Skinny's.</p>
								</blockquote>
								<cite>
									Jon K
								</cite>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content nopadding">
								<blockquote>
									<p class="lead">Perfect repair job, phone looks good as new! I would highly recommend them to friends, family, or anyone else who needs their phone repaired quickly and for a reasonable price.</p>
								</blockquote>
								<cite>
									Kristine Logan Summers
								</cite>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->

			<section id="about" class="padding-md parallax" style="background-image: url('<?php echo $url; ?>assets/images/three_amigos.jpg');">
				<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin">About Skinny's Repair Shop</h3>
						<p class="font-lato weight-300 lead nomargin-top">At Skinny’s we love what we do. One guy’s dream has turned into a small business of family and friends. As personal and vital as technology has become to all of us, we know how important it is to get your device back lickity split. That’s why we strive to create a place you actually want to go. No lines, no appointments, no worries. After all, breaking your device is no fun, but who says getting it fixed can’t be?</p>
					</div>

				</div>

			</section>

			<section class="padding-xs timeline-img-container">
				<img class="timeline-img" alt="Skinny's Repair Shop Timeline" src="<?php echo $url; ?>assets/images/about-us-timeline.jpg">
			</section>
		
		<section class="padding-xxs">
			<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
					-->
					<span class="authorized-reseller-text">Authorized reseller of:</span>
					<div id="logos-bottom" class="owl-carousel nomargin text-center" data-plugin-options='{"singleItem": false, "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": false, "pagination": true}'>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-mophie.png" alt="Mophie Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-lifeproof.png" alt="Lifeproof Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-incipio.png" alt="Incipio Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-gadget-guard.png" alt="Gagdget Guard Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-speck.png" alt="Speck Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-otterbox.png" alt="Otterbox Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-sonix.png" alt="Sonix Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-spigen.png" alt="Spigen Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-belkin.png" alt="Belkin Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-marley.png" alt="Marley Logo">
						</div>
						<div>
							<img class="img-responsive" src="<?php echo $url; ?>assets/images/product-logos/logo-puregear.png" alt="Puregear Logo">
						</div>
					</div>
				</section>

			<section id="contact">
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-6 col-sm-6">

							<h3>Contact Us</h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Thanks for reaching out!</strong> We'll get back to you within the next 24 to 48 hours.
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Error encountered:</strong> Internal server error! Please try again.
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Empty required fields:</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="<?php echo $url; ?>php/contact.php" method="post" enctype="multipart/form-data" _lpchecked="1">
								<fieldset>
									<input type="hidden" name="action" value="contact_send">

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:name">Full Name *</label>
												<input required="" type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:email">E-mail Address *</label>
												<input required="" type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
											<div class="col-md-6">
												<label for="store-location">Store Location *</label>
												<select id="store-location" class="form-control pointer" name="contact[location]">
													<option value="">--- Select ---</option>
													<option value="Stephenville, TX">Stephenville, TX</option>
													<option value="Decatur, TX">Decatur, TX</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required="" maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->

						<!-- INFO -->
            <div class="col-md-3 col-sm-3">

                    <h2>Stephenville, TX</h2>

                    <p>
                            <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> 120 E Washington St, Stephenville, TX 76401</span>
                            <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-991-3757">1-(800)-991-3757</a></span>
                            <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:help@skinnysrs.com">help@skinnysrs.com</a>
                    </p>

                    <hr>

                    <h4 class="font300">Business Hours</h4>
                    <p>
                            <span class="block"><strong>Monday - Friday:</strong> 7am to 6pm</span>
                            <span class="block"><strong>Saturday:</strong> 12pm to 4pm</span>
                            <span class="block"><strong>Sunday:</strong> Closed</span>
                    </p>

            </div>
            <!-- /INFO -->


						<!-- INFO -->
						<div class="col-md-3 col-sm-3">

							<h2>Decatur, TX</h2>

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> 301 S Washburn St, Decatur, TX</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-991-3757">1-(800)-991-3757</a><br>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:skinnysdecatur@gmail.com">skinnysdecatur@gmail.com</a></span>
							</p>

							<hr>

							<h4 class="font300">Business Hours</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
								<span class="block"><strong>Saturday - Sunday:</strong> Closed</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- /PARALLAX -->

		</div>
		<!-- /wrapper -->

		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop" style="display: none;"></a>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo $url; ?>assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo $url; ?>assets/js/dist.min.js"></script>
		<script>
			$(document).ready(function() {
				var row = $('#pricing .row'),
					height = row.height();
				row.css('height', height + 'px');
			});
		</script>
</body>
</html>