<?php
	session_start();
	if (isset($_POST['wallet-in'])) { $walletin = $_POST['wallet-in']; if ($walletin == '') { unset($walletin);} }
	if (empty($walletin))
    {
    exit ("Вы не ввели адрес кошелька!");
    }
    include ("DB.php");
    $userid = .$_SESSION['id']
    print "<pre>";var_dump($userid);die();
?>