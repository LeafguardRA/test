<html>
	<head>
		<title>Страница восстановления пароля</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div>
			 <div>
			 	<p><b>Восстановление пароля</b></p>
			 </div>
			<div>
				 <form name="recall-form" method="post" action="vosst_pass.php">
				 <p><i>Логин </i><input type="text" name="username" size="30" /></p>
				 <p>
				 <input type="submit" value="Восстановление" size="30">
				 </p>
				 </form>
			 </div>
		</div>
	</body>
</html>

<?php
	include ("DB.php");
	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$refind = "SELECT `id` FROM `users` WHERE `login`='{$username}' LIMIT 1";
	 $sql = mysqli_query($db,$refind) or die(mysqli_error());
	 if (mysqli_num_rows($sql)==1)
	 {
	$simv = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0", 
	 "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
	 for ($k = 0; $k < 8; $k++)
	 {
	 shuffle ($simv);
	 $string = $string.$simv[1];

	 }
	$refind = "UPDATE `users`SET  `pass`='{$string}' WHERE `login`='{$username}' ";
	 $sql = mysqli_query($db,$refind) or die(mysqli_error());
?>