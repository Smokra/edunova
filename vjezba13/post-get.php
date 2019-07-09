<?php include('header.php'); ?>
		<section class="section-cta">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<!--<h2>This is Call To Action module. One click and template is yours.</h2>-->
						<?php 
						$txt = '<h2>Ovo je naš prvi echo</h2>';
						echo $txt;
						 ?>
					</div>
					<div class="col-md-4">
						<a href="#" class="button-cta">DOWNLOAD</a>
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
					<?php 
						//Array
						//$polaznici = array("Alta","Ivan","Goran","Nikolina");
						//echo $polaznici[1];
						//$polaznici[1]="Petar";
						//Multidimenzionalni array - Niz u nizu
						//$polaznici = array("polaznik1" => "Alta","polaznik2" => "Ivan", "polaznik3" => "Goran");
						$polaznici = array(
							"polaznik1"=>array(
								"ime"=>"Alta",
								"prezime" => "Svejedno",
								"kontakt" => array(
									"fiksni" => "031200200",
									"mob" => "098632123"
									),
								"email" => "alta@gmail.com"
								),
							"polaznik2" => array(
								"ime"=>"Ivan",
								"prezime" => "Šolić",
								"kontakt" => array(
									"fiksni" => "43500200",
									"mob" => "098653123"
									),
								"email" => "ivan@gmail.com"
								)
							);
						echo '<pre>';
						print_r($polaznici);
						//echo "<p>Polaznik 1:</p>".$polaznici["polaznik1"]["ime"];
						foreach ($polaznici as $polaznik) {
							echo $polaznik["ime"]."<br>";
						}
						//GET obrada
						if(isset($_GET['broj-osoba'])){
							//echo "<pre>";
							//print_r($_GET);
							$brojOsoba = $_GET['broj-osoba'];
						}else{
							$brojOsoba = 3;
						}
						//POST obrada
						if(isset($_POST['broj-osoba'])){
							//echo "<pre>";
							//print_r($_POST);
							$brojOsoba = $_POST['broj-osoba'];
						}else{
							$brojOsoba = 3;
						}
						$teamNumber = $brojOsoba;
						$teamGridClass = 'col-md-3';
						if($teamNumber==3){
							$teamGridClass = 'col-md-4';
						}elseif ($teamNumber==2) {
							$teamGridClass = 'col-md-6';
						}
						for($i=1;$i<=$teamNumber;$i++){
					 ?>
					<!-- team member item -->
					<div class="<?php echo $teamGridClass; ?>">
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
					<?php } ?>
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
						<form action="" method="post">
							<p>
								<label for="ime">Ime:</label>
								<input type="text" name="ime" id="ime" value="">
							</p>
							<p>
								<label for="prezime">Prezime:</label>
								<input type="text" name="prezime" id="prezime" value="">
							</p>
							<p>
								<label for="broj-osoba">Broj osoba:</label>
								<input type="text" name="broj-osoba" id="broj-osoba" value="" data-validation="length number" data-validation-length="max1">
							</p>
							<p>
								<label for="mobitel">Mobitel:</label>
								<input type="text" name="mobitel" id="mobitel" value="">
							</p>
							<p>
								<label for="email">Email:</label>
								<input type="text" name="email" id="email" value="" data-validation="email">
							</p>
							<p><input type="submit" id="spremi" name="spremi" value="Spremi"></p>
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