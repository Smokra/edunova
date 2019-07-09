<?php include('header.php'); ?>
	<div id="divMainContent">
		<div id="divContent">
			<div id="divContentPost">
				<div id="divContentHeader">
					<h1><?php echo "hello world"; ?></h1>
					<div>
						<?php 
							$a = 10;
							$b = 15;
							$c = $a + $b;
							echo $c . "<br>";
							$txt1 = "Goran ima dosta godina";
							$txt2 = $txt1 . ' a uskoro će i u mirovinu.';
							$txt3 = "$txt1 a uskoro će i u mirovinu";
							$txt4 = '$txt1 a uskoro će i u mirovinu';
							//echo $txt4;
							if($a > 15){
								echo 'broj je veći';
							}else{
								echo "Broj je manji";
							}
							for($i=1; $i<10; $i++){
								echo $i . "<br>";
							}
							function pametnoZbroji($a,$b){
								$c = $a + $b;
								echo "<h2>" . $c . "</h2>";
							}
							pametnoZbroji(12,18);
						?>
					</div>
					<p>Lorem ipsum podnaslov</p>
				</div>
				<?php 
					for($i=1;$i<=5;$i++){
				?>
				<div class="divContentImg">
					<img src="images/slika<?php echo $i; ?>.jpg">
				</div>
				<?php } ?>
				<?php 
					$style = 'light';
					if($style=='dark'){
						$styleClass = 'dark-class-1';
					}else{
						$styleClass = 'light-class-1';
					}
					 
					for($i=1;$i<=5;$i++){
						echo '<div class="divContentImg '.$styleClass.'"><img src="images/slika'.$i.'.jpg"></div>';
				 	} ?>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus nulla non purus elementum, at scelerisque lorem varius.</p>
				</div>
			</div><!--divContentPost end-->
		</div><!--divContent end-->
		<?php include('sidebar.php'); ?>
	</div><!--divMainContent end-->
	<?php include('footer.php'); ?>