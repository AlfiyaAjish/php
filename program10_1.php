<?php
$con=new mysqli("localhost","root","","product");
$alt1="alter table product add manufacturer varchar(30)";
$con->query($alt1);
$con->close();
?>
