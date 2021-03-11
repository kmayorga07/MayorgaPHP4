<?php
	//get data
	$heard = filter_input(INPUT_POST, 'heard');
	
	//if elseif else to display message
	if ($heard == "reg") {
		echo "Excellent. We love our regular customers!";
	} elseif ($heard == "friend") {
		echo "Please thank your friend for us.";
	} elseif ($heard == "tv") {
		echo "We are glad to see our TV ads are working.";
	} else {
		echo "We work hard to be found on Google.";
	}
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <br><br>
        <a href="index2.php">Click Here For Next Program</a>
</body>
</html>