<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User view</title>
</head>
<body>
<h1>
	<?php
	foreach ($result as $object) {			
		echo $object->username;
	}
	?>
</h1>
</body>
</html>









