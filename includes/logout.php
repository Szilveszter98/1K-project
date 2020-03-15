<?php 
//logout
session_start();
session_destroy();
//linking back to the main index
header("location:../index.php")


?>