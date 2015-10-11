<?php
header("X-XSS-Protection: 0");
header("Content-Type: text/html; charset=utf-8");

/*
		ini_set('max_execution_time', 2000); //300 seconds = 5 minutes
		$alfavit = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  
		$slovo = "GHI";

		while (substr(strrev($rot), 0, strlen($slovo)) !== strrev($slovo)) {
			$x = rand(0, strlen($alfavit));
			$char = $alfavit[$x];
			$rot .= $char;
		}
		print "слово знайдене з " . (strlen($rot)) . " спроби <br/>";
		print (substr(strrev($rot), 0, 5));
*/

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>завдання №3</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<a class="btn btn-primary btn-block" href="index.php">головна</a>
		<a class="btn btn-default btn-block" href="zavdannia1.php">завдання 1</a>
	</nav>

	<div class="container">

		<?php 
		
			if (isset($_GET['to_do_submit'])) {

				function result($i) {
					$result = round(pow($_GET['number1'], $i), 4);
					print '<form  class="form-inline " role="form" action="zavdannia1.php" method="GET">
						<div class="form-group">
							<input class="form-control" type="text" name="number1" value="' . $_GET['number1'] . '" disabled>
							<input class="form-control" type="text" name="select" value="' . $_GET['to_do'] . '" disabled>
							<input class="form-control" type="text" name="result" value="Result: ' . $result . '" readonly>
							<a href="zavdannia1.php"><input class="btn btn-warning" type="button" value="RESET"></a>
						<div>
						</form>' ;
				}

				if ($_GET['to_do'] == 'radical') {
					result (0.5);
				}
				elseif ($_GET['to_do'] == 'exponentiation') {
				 	result (2);
				 } 
			}

			else {
				print '<form  class="form-inline " role="form" action="zavdannia1.php" method="GET">
					<div class="form-group">
						<input class="form-control" type="number" name="number1" placeholder="введіть число" required>
						<select class="form-control" id="sel1" name="to_do">
							<option>exponentiation</option>
							<option>radical</option>
						</select>
						<input class="btn btn-danger" type="submit" value="submit" name="to_do_submit">
					<div>
					</form>' ;
			}

		?>

	</div>

</body>
</html>




