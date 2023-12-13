<html>
<head>
<body>
<h2 align="center">PRODUCT DEATAILS</H2>
  <br>
  <form method="post" action="" align="center">
   <table align="center" width="25%" height="30%">
      <tr>
        <td> Product Name:</td>
        <td> <input type="text" placeholder="enterproduct name" name="n1"></td>
      </tr>
      <
      <tr>
        <td>Quantity:</td>
        <td><input type="text" placeholder="enter quantity" name="n2"></td>
      </tr>
        <br><br>
      <tr>
        <td>Unit Price:</td>
        <td><input type="text" placeholder="enter unit price" name="n3"></td>
      </tr>
    
      <tr>
        <td>Manufacturer Date:</td>
        <td><input type="date" placeholder="enter manu-date" name="n4"></td>
      </tr>
       
      <tr>
        <td>Expired Date:</td>
        <td><input type="date" placeholder="enter exp-date" name="n5"></td>
      </tr>
       
    </table>
    <input type="submit" value="submit" name="sub">
   </form>
</head>
</html> 
      
      
<?php
$conn=new mysqli("localhost","root","","product");
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo "connected successfully"."<br>";
}
if(isset($_POST['sub']))
{
$a=$_POST['n1'];
$b=$_POST['n2'];
$c=$_POST['n3'];
$d=$_POST['n4'];
$e=$_POST['n5'];
$s="insert into product(pro_name,quantity,unitprice,manu_date,exp_date)values('$a',$b,$c,'$d','$e')";
if($conn->query($s))
{
echo "inserted successfully";
}
$conn->close();
}
?>
      
