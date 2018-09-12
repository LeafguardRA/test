<?php
	session_start();
	if (isset($_POST['tran-in'])) { $tranin = $_POST['tran-in']; if ($tranin == '') { unset($tranin);} }
	if (empty($tranin))
    {
    exit ("Вы не ввели номер транзакции!");
    }
    include ("DB.php");
    $adtran = mysqli_query ($link, "INSERT INTO tran_table (transaction) VALUES('$tranin')");
?>