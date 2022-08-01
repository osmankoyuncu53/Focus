<?php 
session_start();
session_destroy(); 
header("Location:../index.php?cikis_On");
?>