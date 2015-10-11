<?php
header("X-XSS-Protection: 0");
header("Content-Type: text/html; charset=utf-8");	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>завдання 3-4</title>

</head>
<body>
	<nav class="navbar navbar-default">
		<a class="btn btn-primary btn-block" href="index.php">головна</a>
		<a class="btn btn-delault btn-block" href="zavdannia3-4.php">завдання 3-4</a>
	</nav>

	<div class="container">
	
		<?php 

			if (isset($_POST['table_submit'])) {
				print '<table class="table table-condensed table-bordered span12">';
				for ($i = 0; $i < $_POST['row'] ; $i++) { 
					print '<tr>';
					for ($d = 0; $d < $_POST['column'] ; $d++) { 
						print '<td>' . rand(0, 666) . '</td>';
					}
					print '</tr>';
				}
				print '</table>';
			}

			else {
				print '<h2>створити таблицю з випадковими числами</h2>
						<form  class="form-inline " role="form" action="zavdannia3-4.php" method="POST">
							<div class="form-group">
								<input class="form-control" type="number" name="row" placeholder="кількість рядків" required>
								<input class="form-control" type="number" name="column" placeholder="кількість стовпців" required>
								<input class="btn btn-danger" type="submit" name="table_submit" value="create table">
							</div>
						</form>	';
			}

		?>
	</div>
</body>
</html>




