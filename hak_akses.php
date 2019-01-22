<?php
session_start();
    if(isset($_SESSION['typeuser'])){
        
        if ($_SESSION['typeuser']=="Admin"){
            header('location:pages/admin/index.php');
        }
        else if ($_SESSION['typeuser']=="Petugas"){
            header('location:pages/petugas/index.php');
        }
    }if(!isset($_SESSION['typeuser'])){
       header('location:index.php');
    }   
?>