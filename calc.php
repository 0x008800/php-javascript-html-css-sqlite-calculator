<?php

if($_COOKIE['todayDate'] === date('l \t\h\e jS')) echo <<<HTML
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>calculator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/calc.js"></script>
</head>
</head>
<body>

<body>

<div class="wrapper">
	
		<div class="login">
<input  id="pole" type="text" name="pole" style="width:410px;height:95px"> <br>
<input type="button" name="plus" value="+" style="width:100px;height:95px" onclick="plus()">
<input type="button" name="minus" value="-" style="width:100px;height:95px" onclick="minus()">
<input type="button" name="multiplay" value="*" style="width:100px;height:95px" onclick="multiplay()">
<input type="button" name="divide" value="/" style="width:100px;height:95px" onclick="divide()"><br>
<input type="button" name="result" value="=" style="width:205px;height:95px" onclick="result()">
<input type="button" name="zero" value="0" style="width:205px;height:95px" onclick="zero()"><br>
	
	</div>

	<div class="footer">

				<div class="text">Все права защищены</div>
	</div>
</div>



</body>
</html>
HTML;
	else {
		header("Location: index.php");
		exit();
	}
?>