<?php
include 'dbconnect.php';
$del=$_GET["vis"];
$delete=mysqli_query($connect,"DELETE FROM `tablereg` WHERE `id`='$del'");
header("location:tables-general.php");
?>