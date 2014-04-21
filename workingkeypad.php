<?php

	$accessCode = '3667';
	$submitCode = $_POST['code'];

	
	if ($submitCode == $accessCode){
			header("Location: success.php");
			exit();
		} else {
			header("Location: tryagain.php");
			exit();
		}
?>
