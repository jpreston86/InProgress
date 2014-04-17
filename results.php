<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
   $status = (isset($_POST['status']) ? $_POST['status'] : null); 
   echo $status;
?>
</body>
</html>
