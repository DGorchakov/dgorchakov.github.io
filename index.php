<?php 
if (isset($_POST[name])) {
	file_put_contents(filewithdata.txt, $_POST[name]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="index.php" method="post">
	<input type="text" name="name" placeholder = "Имя">
	 <input type="email" name="email" placeholder = "Почта">
	 <input type="submit" name="Отправить">
</form>
</body>
</html>
