<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["Name"]);
header("Location:SignIn.php");
?>