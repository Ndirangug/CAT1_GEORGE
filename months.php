<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.css">
</head>
<body>
	<?php 
		$year = date("Y");
		$februaryDays;
		if ($year % 4 == 0) {
			$februaryDays = 29;
		}

		else{
			$februaryDays = 28;
		}
		
		$months = [
			"january" => 31,
			"february" => $februaryDays,
			"march" => 31,
			"april" => 30,
			"may" => 31,
			"june" => 30,
			"july" => 31,
			"august" => 31,
			"september" => 30,
			"october" => 31,
			"november" => 30,
			"december" => 31
		];

		function createOption($monthsArray){
			foreach ($monthsArray as $month => $days) {
				$monthUpper = strtoupper($month);
				echo "<option value='$month'>$monthUpper</option>";
			}
		}

	 ?>

	 <div class="container">
	 	<div class="img-rounded">
	 	<table >
	 		<thead>
	 			<th><h1>Please Choose a Month</h1></th>
	 		</thead>
	 		<tbody>
	 			<tr>
	 				<td>
	 					<form role="form" method="post" action="months.php">
	 						<div class="form-group">
	 							<div class="input-group">
	 								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	 								<select name="month_dropdown" class="form-control">
	 									<!-- php to insert options from months array -->
	 									<?php
	 										createOption($months);
	 									?>
	 								</select>
	 							</div>
	 						</div>
	 						<input type="submit" name="submit" value="SUBMIT" class="btn btn-default">
	 					</form>
	 				</td>
	 			
	 		</tbody>
	 	</table>
	 	</div>
	 </div>

	 <?php
	 	if (isset($_POST['submit'])) {
	 		$monthSelected = $_POST['month_dropdown'];
	 		$days = $months[$monthSelected];

	 		if ($monthSelected !== "february") {
	 			echo "<div class='container'><h3>The month of $monthSelected has $days days</h3></div>";
	 		}

	 		else{
	 			if ($days == 29) {
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is a leap year</h3></div>";
	 			}

	 			else{
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is not a leap year</h3></div>";
	 			}
	 		}
	 		
	 	}
	 ?>

	 <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>