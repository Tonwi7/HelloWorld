<!DOCTYPE html>
<html>
<head>
	<title>one</title>
</head>
<body>
	<?php
		if(isset($_POST["number"])){
		$numbers = $_POST["number"];
		$numbers_reverse = array_reverse($_POST["number"]);
	


		echo "Numbers: ","<br/>";
		foreach ($numbers as $number){
		echo $number,"<br/>";
	}

	echo "Numbers Reverse:", "<br/>";
	foreach($numbers_reverse as $number){
	echo $number,"<br/>";

	}
}



	?>
	<form accept="" method="POST">
		<input type="text" name="number[]">
		<input type="text" name="number[]">
		<input type="text" name="number[]">
		<input type="submit" >

		
	</form>

</body>
</html>