<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) && empty($password)) {
 header('location:login.php?error1');
 break;
} else if (empty($username)) {
 header('location:login.php?error=2');
 break;
} else if (empty($password)) {
 header('location:login.php?error=3');
 break;
}
$sql="select * from login where username='$username'";
$query=mysql_query($sql) or die (mysql_error());
$row=mysql_fetch_array($query) or die (mysql_error());
    if($password == $row['password']){
        $_SESSION['username']=$username;
        $_SESSION['typeuser']=$row['typeuser'];
        header('location:hak_akses.php');                
     }else{
        header('location:login.php');
             
     }     
    
?> 