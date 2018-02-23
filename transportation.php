<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php
		$modesOfTransportation = ["Automobile", "jet", "train", "ferry"];
		echo "<div class='container'><h4>Travel takes many forms, whether across the country, or around the earth. here is aliost of some common means of transportation:</h4>";
		echo "<ul>";
		foreach ($modesOfTransportation as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "</ul></div>";

	?>

	<div class="container">
		<form role="form" method="post" action="transportation.php">
			<div class="form-group">
				<label for="add"> Add other forms of transportation(separated by commas)</label><br>
				<input type="text" name="additions" id="add" placeholder="item1, item2, item3....">
			</div>
			<input type="submit" name="submit">
		</form>
	</div>

	<?php
		if (isset($_POST['submit'])) {
			$additionsWithSpace = $_POST['additions'];
			$additionsWithoutSpace = str_replace(" ", "", $additionsWithSpace);
			$additionsArray[] = explode(",", $additionsWithoutSpace);
			
			
			
		}
	?>
</body>
</html>