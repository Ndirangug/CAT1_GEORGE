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
		//on click
		if (isset($_POST['submit'])) {
			$additionsWithSpace = $_POST['additions'];
			$additionsWithoutSpace = str_replace(" ", "", $additionsWithSpace);
			$additionsArray = explode(",", "$additionsWithoutSpace");
		
			foreach ($additionsArray as $key => $value) {
				array_push($modesOfTransportation, $additionsArray[$key]);
			}
				
		}
		//on load browser
		
		echo "<div class='container img-rounded whole'><div class='row'><div class='col-md-6 list'><p>Travel takes many forms, whether across the country, or around the earth. here is aliost of some common means of transportation:</p>";
		echo "<ul>";
		foreach ($modesOfTransportation as $key => $value) {
			echo "<li>".ucfirst($value)."</li>";
		}
		echo "</ul></div>";

		

	?>

		<div class='col-md-6'>
		<form role="form" method="post" action="transportation.php">
			<div class="form-group">
				<label for="add"> Add other forms of transportation(separated by commas)</label><br>
				<input class="form-control" type="text" name="additions" id="add" placeholder="item1, item2, item3....">
			</div>
			<input class="btn btn-info" type="submit" name="submit" value="ADD TO LIST">
		</form>
	</div>
	</div>
	</div>

	
</body>
</html>