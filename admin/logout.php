<?php

session_start();
unset($_SESSION['RollNo']);
session_destroy();
//header("location:../index.php");
//header("location:.../online_library/index.php");
header("location:../index.php");
exit();
?>
