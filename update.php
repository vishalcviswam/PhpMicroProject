<?php
   include 'dbconnect.php';
   $id=$_GET["vis"];
   $sql = "SELECT * FROM `tablereg` WHERE `id`= '$id'";
   $res = mysqli_query($connect,$sql);
   
   if(isset($_POST['submit']))
{
  $p=$_POST["n1"];
  $q=$_POST["n2"];
  $r=$_POST["n3"];
  $s=$_POST["n4"];
  $t=$_POST["n5"];
  $u=$_POST["n6"];
    $sql = "UPDATE `tablereg` SET `name`='$p',`phone`='$q',`email`='$r',`password`='$s',`address`='$t' WHERE `id`= '$id'";
	$res = mysqli_query($connect,$sql);
	if($res==1)
	{
		echo "Updated ";
	}
	else
	{
		echo "not updated ";
	}
	header( "Location: tables-general.php" ); 
}
  
?>
<html>
<head>
<style>
    body{
        background-image:url('kb.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;

    }
</style>
</head>
<body>
<br><br><br><br><br>
<center>
<form method="POST" action ="#">
<?php
while($row = mysqli_fetch_array($res))
  {
	    ?>
<h3>Update</h3>
<table>
  <tr>
    <td>Name :</td>
    <td><input type="text" name="n1" value="<?php echo $row["name"]; ?>"></td>
  </tr>
  
  <tr>
    <td>Phone :</td>
    <td><input type="text" name="n2"value="<?php echo $row["phone"]; ?>" ></td>
  </tr>
  
  
  <tr>
    <td>Email :</td>
    <td><input type="text" name="n3" value="<?php echo $row["email"];  ?>"></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="text" name="n4" value="<?php echo $row["password"];  ?>"></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="n5" value="<?php echo $row["address"];  ?>"></td>
  </tr>
  <tr>
    <td></td>
    <td><br><input type="submit" value="Submit" name="submit"></td>
  </tr>
</table>
<?php 
  }

  
  ?>
</form>
</center>
</body>