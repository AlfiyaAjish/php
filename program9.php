<?php
$conn=new mysqli("localhost","root","","product");
if($conn->connect_error)
{
die("connection error".$conn->connect_error);
}
$sql="select * from product";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo "<table border='1' align='center'><tr><td>ID</td><td>PRODUCT NAME</td><TD>QUANTITY</TD><TD>UNITPRICE</TD><TD>MANU_DATE</TD><TD>EXP_DATE</TD></tr>";
while($row=$result->fetch_assoc())
{
echo "<tr>
<td>".$row["pro_id"]."</td><td>".$row["pro_name"]."</td><TD>".$row["quantity"]."</td><td>".$row["unitprice"]."</td><td>".$row["manu_date"]."</td><td>".$row["exp_date"]."</td></tr>";
}
 echo "</table>";
 }
 else
 {
 echo "0 results";
 }
 $conn->close();
 ?>


