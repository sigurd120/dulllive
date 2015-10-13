<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DULL-live!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
	<div class="header">
		<h1 id="overskrift">Velkommen til DULLs side!</h1>
		<div class="navigation">
		<ul>
			<li><a href="#">Om Dull</a></li>
			<li><a href="pages/prosjekter.html">Prosjekter</a></li>
			<li><a href="http://iaeste.no/dull">Mer kode!</a></li>
			<li><a href="pages/hack.php">Hacking</a></li>
		</ul>
		</div>
	</div>
	<div class="content">
		<?php

			if(isset($_POST["name"])) {
				$name = $_POST["name"];
				$bdate = $_POST["bdate"];
				$age = getAge($bdate);

				if(strlen($name) > 0) {
					echo "Du heter " . $name . " og du er " . $age . " &aring;r gammel";
				} else {
					echo "Du m&aring; oppgi navn!"; 
				}


			} else {
				echo "Velkommen!";
				$name = "";
			}

			function getAge($bdate) {
				return floor((time() - strtotime($bdate)) / (31536000));
			}

		?>
		<br>
		<img id="bilde" src="dull.jpg" style="width: 300px">
		<form action="" method="post">
			<label>Navn: </label>
			<input type="text" name="name" value="<?php echo $name; ?>"><br>
			<label>Dato: </label>
			<input type="date" name="bdate">
			<br>
			<input type="submit" value="Go">
		</form>
	</div>
	</body>
</html>