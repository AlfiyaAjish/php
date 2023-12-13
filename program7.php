<?php
//create connection
$conn=new mysqli("localhost","root","");
//check connection
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo "connecton successfull";
}
$sql="CREATE DATABASE product";
//check creation of database
if($conn->query($sql)==TRUE)
{
echo "database created successfully";
}
else
echo "creation failed";
$conn=new mysqli("localhost","root","","product");
$sq="CREATE TABLE product(pro_id int (2) PRIMARY KEY ,pro_name varchar(20) ,quantity int(3),unitprice int(3),manu_date date,exp_date date)";
//check creation od table status
if($conn->query($sq)==TRUE)
{
echo "table created successfully";
}
else
{
echo "creation failed";
}
$conn->close();
?>S
