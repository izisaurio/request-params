<?php

require '../vendor/autoload.php';

use RequestParams\Files, RequestParams\Server;

if (Server::key('REQUEST_METHOD') === 'POST') {
	var_dump(Files::key('file'));
	var_dump(Files::has('file'));
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<!--<input type="file" name="file" />-->
		<input type="submit" value="Send" />
	</form>
</body>
</html>