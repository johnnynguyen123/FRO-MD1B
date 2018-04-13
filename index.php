<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AJAX BMI</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="main">
			<h1>BMI UITREKENEN</h1>
			<fieldset>
			<h3>Gewicht (in kg):</h3>&nbsp;<input type="number" id="gewicht" autofocus/>
			<h3>Lengte (in cm):</h3>&nbsp;<input type="number" id="lengte" />
			<br>
			<br>
			<button onclick="bmiCalc()">Reken Uit!</button>
			<p>&nbsp;<span id="bmiSpan"></span></p>
		</fieldset>
		</div>
		<script src="ajax.js"></script>
	</body>
</html>
