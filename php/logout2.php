<?php
session_start();
unset($_SESSION["usuario2"]);
session_destroy();
header("Location:../index.php");
?>