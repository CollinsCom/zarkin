<?php
session_start();
unset($_SESSION['loginAdmin']);
header("Location:index.php");
?>