<?php
	//get data
	$heard_s = filter_input(INPUT_POST, 'heard_s');
	
	
	switch($heard_s) {
		case 'reg_s':
			$message = 'Awesome. We love our regular customers!';
            echo $message;
			break;
		case 'friend_s':
			$message = 'Pretty please thank your friend for us.';
            echo $message;
			break;
		case 'tv_s':
			$message = 'Yesss we are glad to see our TV ads are working.';
			echo $message;
            break;
		case 'online_s':
			$message = 'Ahhh nice, we work hard to be found on Google.';
			echo $message;
            break;
	}
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
    <br><br>
        <a href="index3.php">Click Here For Next Program</a>
</body>
</html>