<?php

	$gewicht = $_REQUEST["gewicht"];
	$lengte = $_REQUEST["lengte"];

	$lengte = $lengte / 100;

	$bmi = $gewicht / ($lengte * $lengte);
	$bmi = round($bmi, 1);
	echo "uw gewicht is: $gewicht. <br> uw lengte is: $lengte <br>  uw BMI is: $bmi. <br>";
	switch ($bmi){
			case($bmi<18.5):
				echo "je hebt ondergewicht";
				break;
			case(($bmi>18.5)&&($bmi<=25)):
				echo "je hebt een normaal gewicht";
				break;
			case(($bmi>25)&&($bmi<=27)):
				echo "je hebt licht overgewicht";
				break;
			case(($bmi>27)&&($bmi<=30)):
				echo "je hebt matig overgewicht";
				break;
	        case(($bmi>30)&&($bmi<=40)):
	            echo "je hebt obesitas";
	            break;
	        case($bmi>40):
	            echo "je hebt heftig overgewicht";
	            break;
		}

?>
