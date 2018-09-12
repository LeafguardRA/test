<?php
    session_start();

    $userid = $_SESSION['id'];
    include ("DB.php");

    $tokenval = mysql_query("SELECT 'token_val' FROM `users` WHERE ` id = $userid` ");

    function tokenVal(){
		return "read me please";
	}
?>