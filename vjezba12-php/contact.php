<?php include('header.php'); ?>
<?php
	$ime = '';
	$prezime = ''; 
	if(isset($_GET['spremi'])){
		if(isset($_GET['ime'])) $ime = $_GET['ime'];
		if(isset($_GET['prezime'])) $prezime = $_GET['prezime'];
		if(isset($_GET['hobi1'])) $hobi1 = $_GET['hobi1'];
	}
	
?>
	<div id="divMainContent">
		<div id="divContent">
			<div id="divContentPost">
				<div id="divContentHeader">
					<h1><?php echo $ime; ?></h1>
					<?php 
						if(isset($_GET['hobi1'])&&$_GET['hobi1']=='ft1'){
							echo '<p>Korisnik je odabrao Nogomet kao hobi</p>';
						}else{
							echo '<p style="color: red; font-weight: bold">Molimo odaberite hobi</p>';
						}
					?>
					<p>Lorem ipsum podnaslov</p>
				</div>
				<div id="divContentText">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
				</div>
			</div><!--divContentPost end-->
			<div id="divContentPost">
				<div id="divContentHeader">
					<h1>Lorem ipsum naslov</h1>
					<p>Lorem ipsum podnaslov</p>
				</div>
				<div id="divContentImg">
					<img src="images/slika1.jpg">
				</div>
				<div id="divContentText">
					<form action="" method="get" id="Obrazac1">
						<p>Ime</p>
						<p>
							<input type="text" id="ime" name="ime" value="">
						</p>
						<div>
							<label for="prezime">Unesite prezime</label>
							<input type="text" id="prezime" name="prezime" value="">
						</div>
						<div>
							<label for="email">Unesite email</label>
							<input type="text" id="email" name="email" value="pero@peric.hr">
						</div>
						<div>
							<label for="pass">Unesite lozinku</label>
							<input type="password" id="pass" name="pass" value="" placeholder="12345">
						</div>
						<div>
							<label for="smjer">Odaberite smjer</label>
							<select id="smjer" name="smjer">
								<option value="wd25">Web dizajner</option>
								<option>Grafički dizajner</option>
								<option>Web programer</option>
								<option>Java programer</option>
							</select>
						</div>
						<div>
							<label for="poruka">Unesite poruku</label>
							<textarea id="poruka" name="poruka"></textarea>
						</div>
						<div>
							<h3>Hobi</h3>
							<div>
								<label for="hobi1">Nogomet</label>
								<input type="checkbox" id="hobi1" name="hobi1" value="ft1">
							</div>
							<div>
								<label for="hobi2">Tenis</label>
								<input type="checkbox" id="hobi2" name="hobi2" value="tennis">
							</div>
							<div>
								<label>Rukomet <input type="checkbox" id="hobi3" name="hobi3" value="rukomet"></label>
							</div>
						</div>
						<div>
							<h3>Spol</h3>
							<div>
								<label>Muški spol <input type="radio" id="spolm" name="spol" value="m"></label>
							</div>
							<div>
								<label>Ženski spol <input type="radio" id="spolz" name="spol" value="ž"></label>
							</div>
						</div>
						<div>
							<input type="submit" id="spremi" name="spremi" value="Spremi">
							<input type="hidden" id="skriven" name="skriven" value="Neka skrivena vrijednost">
						</div>
						<div id="rez"></div>
					</form>


				</div>
			</div><!--divContentPost end-->
		</div><!--divContent end-->
		<?php include('sidebar.php'); ?>
	</div><!--divMainContent end-->
	<?php include('footer.php'); ?>