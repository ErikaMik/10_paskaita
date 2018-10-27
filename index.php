<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
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





?>

	<form action="index.php" method="get">
		<input type="text" name="nickname">
		<input type="submit" name="Submit">
	</form>

</body>
</html>