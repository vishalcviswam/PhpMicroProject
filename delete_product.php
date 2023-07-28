<?php
include 'dbconnect.php';
$del=$_GET["delete"];
$delete=mysqli_query($connect,"DELETE FROM `products` WHERE `id`='$del'");
header("location:forms-layouts.php");
?>