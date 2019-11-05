<?php
session_start();

 

// connect to the database
$conn = mysqli_connect('localhost:3307', 'root', '', 'canteen');

$query1="INSERT into chefreg19 VALUES('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[id]','$_POST[password]','$_POST[confirm_password]')";
$result=mysqli_query($conn , $query1);
header("location:admin.html");
mysqli_close($conn);
?>
}

// 