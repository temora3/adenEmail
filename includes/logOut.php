<?php 
session_start();

if(isset($_SESSION['userName'])){
    session_destroy();
    if (isset($_SESSION['userName'])){
        header("Location: ../index.php");
        exit();
    } else {
      echo "Error in ending session";
    }
}
?>