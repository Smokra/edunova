<?php include('header.php'); ?>
		<section class="section-cta">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<!--<h2>This is Call To Action module. One click and template is yours.</h2>-->
						<?php 
						$txt = '<h2 class="test">Ovo je naš prvi echo</h2>';
						echo $txt;
						 ?>
					</div>
					<div class="col-md-4">
						<a href="#" class="button-cta">DOWNLOAD</a>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>About</h2>
							<?php 
							$a = 15;
							$b = 20;
							$c = $a + $b; 
							//$txt1 = "Ovo je nekakva vrijednost $c";
							//$txt1 = 'Ovo je nekakva vrijednost $c';
							$txt1 = 'Ovo je nekakva vrijednost '.$c;
							echo $txt1;
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module">
							<div class="mz-module-about">
								<i class="fa fa-briefcase color1 ot-circle"></i>
								<h3>Web Development</h3>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
							</div>
							<a href="#" class="mz-module-button">read more</a>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module">
							<div class="mz-module-about">
								<i class="fa fa-photo color2 ot-circle"></i>
								<h3>Visualisation</h3>
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
							</div>
							<a href="#" class="mz-module-button">read more</a>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module">
							<div class="mz-module-about">
								<i class="fa fa-camera-retro color3 ot-circle"></i>
								<h3><?php echo 'Rezultat je: '.$c; ?></h3>
								<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
							</div>
							<a href="#" class="mz-module-button">read more</a>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module">
							<div class="mz-module-about">
								<i class="fa fa-cube color4 ot-circle"></i>
								<h3>UI/UX Design</h3>
								<p> Itaque earum rerum hic tenetur a sapiente, ut aut reiciendis maiores</p>
							</div>
							<a href="#" class="mz-module-button">read more</a>
						</div>
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->
		</section>

		<section id="features" class="section-features">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Nantes Features</h2>
						</div>
					</div>
				</div>
				<div class="row row-gutter">
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-television"></i></div>
							<div class="featured-text">
								<h4>Fully Responsive Design</h4>
								<p>INFRA theme looks awesome at any size, be it a Laptop screen, Mobile or Tablet.</p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-cogs"></i></div>
							<div class="featured-text">
								<h4>Advanced Control Panel</h4>
								<p>You can take full control of your theme with our powerful yet easy-to-use theme options panel from setting to styling.</p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-newspaper-o"></i></div>
							<div class="featured-text">
								<h4>Custom Page Templates</h4>
								<p>Our themes come packaged with multiple pages templates including Authors Team, Full Width, and more to enhance your site.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-indent"></i></div>
							<div class="featured-text">
								<h4>Unlimited Widget Areas</h4>
								<p>We include just the right amount of useful widget areas and sidebars so you can place your content.</p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-paste"></i></div>
							<div class="featured-text">
								<h4>Custom Widgets</h4>
								<p>We include our own widgets for Reviews, Social, Advertising and additional custom widgets to enhance your site.</p>
							</div>
						</div>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-dollar"></i></div>
							<div class="featured-text">
								<h4>AD Management</h4>
								<p>You can place various size of banner images in your sidebar and banners to other ad positions with ease.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-gutter">
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-font"></i></div>
							<div class="featured-text">
								<h4>Icons and Fonts</h4>
								<p>We include FontAwesome Icons &amp; Hundreds of Google Fonts to Choose from to customize your site.</p>
							</div>
						</div>
						<?php 
							$prikaziBlok = 'ne';
							if($prikaziBlok == 'da'){
						?>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-wordpress"></i></div>
							<div class="featured-text">
								<h4>Compatible with Latest WordPress</h4>
								<p>We continuously test our themes so you will know they are always compatible with the latest version of WordPress.</p>
							</div>
						</div>
						<?php } //endif
							$prikaziBlok = 'da';
							if($prikaziBlok == 'da'):
						?>
						<div class="featured-item">
							<div class="featured-icon"><i class="fa fa-file-code-o"></i></div>
							<div class="featured-text <?php echo $prikaziBlok; ?>">
								<h4>Bootstrap Framework</h4>
								<p>The theme is based on Bootstrap framework. We use default row/col- Bootstrap grid system.</p>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio" class="light-bg">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Portfolio</h2>
						<p>Our portfolio is the best way to show our work, you can see here a big range of our work. Check them all and you will find what you are looking for.</p>
					</div>
				</div>
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-1.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Dean & Letter</h2>
								<p>Branding, Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Startup Framework</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-3.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Lamp & Velvet</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-4.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Smart Name</h2>
								<p>Branding, Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-5.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Fast People</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-5">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-6.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Kites & Stars</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			</div><!-- end container -->
		</section>

		<section class="dark-bg short-section stats-bar">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 class="stat-number" data-n="9">0</h2>
							<h6>awards</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 class="stat-number" data-n="167">0</h2>
							<h6>Clients</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 class="stat-number" data-n="6">0</h2>
							<h6>Team</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 class="stat-number" data-n="34">0</h2>
							<h6>Project</h6>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="partners">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Our Partners</h2>
							<p>Mida sit una namet, cons uectetur adipiscing adon elit.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="owl-partners owl-carousel">
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-1.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-2.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-3.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-4.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-5.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-6.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-7.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-8.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-9.png" alt="partners"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="team" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Our Team</h2>
							<p>A creative agency based on Candy Land, ready to boost your business with some beautifull templates. MOOZ Agency is one of the best in town see more you will be amazed.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<?php 
					$polaznici = array('Marko','Ivica','Petar',26,'Mijo');
					//$polaznici=array(4 => 'Marko', 8 => 'Ivica', 13 => 'Pero', 'Jozo');
					//$polaznici=array('osoba1' => 'Marko', 'osoba2' => 'Ivica', 'osoba3' => 'Pero', 'Jozo');
					//$polaznici=array('osoba1' => array('ime'=>'Marko','mjesto'=>'Osijek','oib'=>'12345678945'), 'osoba2' => 'Ivica', 'osoba3' => 'Pero', 'Jozo');
					//echo $polaznici['osoba1']['oib'];
					//echo '<pre>';
					//print_r($polaznici);
					//echo '</pre>';
					for($i=0;$i<5;$i++){
						echo $polaznici[$i].'<br>';
					}
					foreach($polaznici as $polaznik){
						echo $polaznik.'<br>';
					}
					?>
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<a data-fancybox="galerija1" href="images/slika2.jpg"><img src="images/demo/author-2.jpg" class="img-responsive" alt="author"></a>
							</div>
							<div class="team-text">
								<h3>TOM BEKERS</h3>
								<div class="team-position">CEO & Web Design</div>
								<p>Mida sit una namet, cons uectetur adipiscing adon elit. Aliquam vitae barasa droma.</p>
								<div class="team-socials">
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- end team member item -->
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Naš Flexslider</h2>
							<div class="flexslider">
							  <ul class="slides">
							    <li>
							      <img src="images/slika1.jpg" />
							      <div class="div-overlay">
							      	<p>Mida sit una namet, cons uectetur adipiscing adon elit. Aliquam vitae barasa droma.</p>
							      </div>
							    </li>
							    <li>
							      <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0"><img src="images/slika5.jpg"></a>
							    </li>
							    <li>
							      <img src="images/slika3.jpg" />
							      <div class="div-overlay">
							      	<p>Mida sit una namet, cons uectetur adipiscing adon elit. Aliquam vitae barasa droma.</p>
							      </div>
							    </li>
							  </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card"> 
						  <div class="front"> 
						    Front content
						  </div> 
						  <div class="back">
						    Back content
						  </div> 
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card"> 
						  <div class="front"> 
						    Front content
						  </div> 
						  <div class="back">
						    Back content
						  </div> 
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card"> 
						  <div class="front"> 
						    Front content
						  </div> 
						  <div class="back">
						    Back content
						  </div> 
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card"> 
						  <div class="front"> 
						    Front content
						  </div> 
						  <div class="back">
						    Back content
						  </div> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<h2>Primjena select2 jQuery plugina</h2>
						<form action="" method="get">
							<select id="grupa" name="grupa">
								<option>Računalni operator</option>
								<option>Web dizajner</option>
								<option>Web programer</option>
								<option>Serviser računala</option>
							</select>
							<select id="smjer" name="smjer" class="select-basic-1">
								<option>Računalni operator</option>
								<option>Web dizajner</option>
								<option>Web programer</option>
								<option>Serviser računala</option>
							</select>
						</form>
					</div>
					<div class="col-lg-6">
						<h2>Primjena jQuery validacije</h2>
						<form action="" method="get">
							<p>
								<label for="ime">Ime:</label>
								<input type="text" name="ime" id="ime" value="" data-validation="length number" data-validation-length="min4">
							</p>
							<p>
								<label for="prezime">Prezime:</label>
								<input type="text" name="prezime" id="prezime" value="">
							</p>
							<p>
								<label for="adresa">Adresa:</label>
								<input type="text" name="adresa" id="adresa" value="">
							</p>
							<p>
								<label for="mobitel">Mobitel:</label>
								<input type="text" name="mobitel" id="mobitel" value="">
							</p>
							<p>
								<label for="email">Email:</label>
								<input type="text" name="email" id="email" value="" data-validation="email">
							</p>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 edunova-accordion">
						<div id="accordion">
						  <h3>Section 1</h3>
						  <div>
						    <p>
						    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
						    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
						    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
						    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						    </p>
						  </div>
						  <h3>Section 2</h3>
						  <div>
						    <p>
						    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
						    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
						    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
						    suscipit faucibus urna.
						    </p>
						  </div>
						  <h3>Section 3</h3>
						  <div>
						    <p>
						    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
						    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
						    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
						    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
						    </p>
						    <ul>
						      <li>List item one</li>
						      <li>List item two</li>
						      <li>List item three</li>
						    </ul>
						  </div>
						  <h3>Section 4</h3>
						  <div>
						    <p>
						    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
						    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
						    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
						    mauris vel est.
						    </p>
						    <p>
						    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
						    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
						    inceptos himenaeos.
						    </p>
						  </div>
						</div>
					</div>
					<div class="col-lg-4">
						
					</div>
					<div class="col-lg-4">
						
					</div>
				</div>
			</div>
		</section>

		<section class="section-cta">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2>This is Call To Action module. One click and template is yours.</h2>
					</div>
					<div class="col-md-4">
						<a href="#" class="button-cta">DOWNLOAD</a>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contact Us</h2>
							<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for your Business</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="section-text">
							<h4>Our Business Office</h4>
							<p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
							<p><i class="fa fa-phone"></i> +101 377 655 22125</p>
							<p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-text">
							<h4>Business Hours</h4>
							<p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
							<p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
							<p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
						</div>
					</div>
					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
<?php include('footer.php'); ?>