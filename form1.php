<html>
      <title>form</title>
                <body>
                   <form action="form1.php" method="post"><pre>
                          Name:    <input type="text" name="a"><br>
                          Address: <textarea type="text" placeholder="enter"></textarea><br>
                          DOB:     <input type="date" ><br>
                          password:<input type="password"><br>
                                   <input type="submit" name="n1" value="submit">
                           <a href="table.html"><input type="button" value="back"></a>        
  			   </pre>	                 
                   </form>
                   
                </body>          
</html> 
<?php
if(isset($_POST['n1']))
{
$a=$_POST['a'];
echo "the value you entered=",$a;
}
?>               
