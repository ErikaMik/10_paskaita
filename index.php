<!DOCTYPE html>
<html>
<head>
	<title>PHP calculator</title>
</head>
<body>

	<?php

//$_POST
//print_r($_GET);

// if (isset($_GET['nickname'])) { //tikrinam ar yra nustatyta, kadangi nera dar irasyta reiksmiu, true / false
// 	echo $_GET['nickname'];
// } else {
// 	echo "Nickname not set. Please enter below";
// }
	if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation']) && !empty($_GET['a']) && !empty($_GET['b'])) {

		switch ($_GET['operation']) {
			case "sum":
			echo $_GET['a'] + $_GET['b'];
			break;
			case "diff":
			echo $_GET['a'] - $_GET['b'];
			break;
			case "mult":
			echo $_GET['a'] * $_GET['b'];
			break;
			case "divide":
			echo $_GET['a'] / $_GET['b'];
			break;
    // default:
    //     code to be executed if n is different from all labels;
		}



	} else {
		echo "<pre>";
		print_r($_GET);
		echo "</pre>";
	}

	?>

	<form action="index.php" method="get">
		<input type="text" name="a" required="true">
		<input type="text" name="b">
		<select name="operation">
			<option value="sum">Sum</option>
			<option value="diff">Difference</option>
			<option value="mult">Multiply</option>
			<option value="divide">Divide</option>
		</select>
		<input type="submit" name="Submit">
	</form>

</body>
</html>