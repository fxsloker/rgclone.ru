<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(is_uploaded_file($_FILES["filename"]["tmp_name"])) {
    		move_uploaded_file($_FILES["filename"]["tmp_name"], "/uploads/".$_FILES["filename"]["name"]);
    	} else {
      		echo("Ошибка загрузки файла");
		}
	?>
</body>
</html>