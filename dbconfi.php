<?php 
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$db=mysqli_select_db($conn,"leadms") or die(mysqli_error($conn));
?>