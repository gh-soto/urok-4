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
	<title>завдання 5</title>
	
</head>
<body>
	<nav class="navbar navbar-default">
		<a class="btn btn-primary btn-block" href="index.php">головна</a>
		<a class="btn btn-default btn-block" href="zavdannia5.php">завдання 5</a>
	</nav>

	<div class="container">
		<?php 
		
			if (isset($_POST['table_submit']) && $_POST['row'] >= 1 && $_POST['column'] >= 1) {
				print '<h2>заповніть комірки таблиці</h2>
						<form  action="zavdannia5.php" method="POST">
							<input  class="readonly-form" type="text" name="row" value="' . $_POST['row'] . '"  readonly>
							<input  class="readonly-form" type="text" name="column" value="' . $_POST['column'] . '"  readonly>';
				
				print '<table class="table table-condensed table-bordered span12" >';
				for ($i = 1; $i <= $_POST['row'] ; $i++) { 
					print '<tr>';
					for ($d = 1; $d <= $_POST['column'] ; $d++) { 
						print '<td><input  type="text" name="' . $i . '_' . $d . '"></td>';
					}
					print '</tr>';
				}
				print '</table><br/><input  class="btn btn-danger" type="submit" name="created_table_submit" value="create table with data">';
				print '</form>';
			}
			
			elseif (isset($_POST['created_table_submit'])) {
				print '<table class="table table-condensed table-bordered span12" >';
				for ($i = 1; $i <= $_POST['row']; $i++) { 
					print '<tr>';
					for ($d = 1; $d <= $_POST['column']; $d++) { 
						$key_name = $i . "_" . $d;
						$cell_content = $_POST[$key_name];
						$cell_content = strip_tags($_POST[$key_name]);
						$cell_content = htmlspecialchars($_POST[$key_name], ENT_QUOTES);

						print "<td>" . $cell_content . "</td>";
					}
					print '</tr>';
				}
				print '</table>';
				
			}

			else{
				print '<h2>створити таблицю</h2>
						<form  class="form-inline " role="form" action="zavdannia5.php" method="POST">
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




