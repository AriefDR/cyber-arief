<?php // keluar dari web atau logout
@session_start();
session_destroy();
header ("location:../index.php");

?>