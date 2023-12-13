<?php
$man=$_POST['man'];
$id=$_POST['id'];
$con=new mysqli("localhost","root","","product");
$update="update product set manufacturer='$man' where pro_id=$id";
if($con->query($update)==TRUE)
{
	echo "sucess";
}
?>
