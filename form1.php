<html>
      <title>form</title>
                <body>
                   <form action="form1.php" method="post"><pre>
                          Name:    <input type="text" name="a"><br>
                          Address: <textarea type="text" placeholder="enter" name="b"></textarea><br>
                          DOB:     <input type="date" name="c"><br>
                          password:<input type="password"><br>
                                   <input type="submit" name="n1" value="submit">   
                                    <input type="submit" name="n2" value="reset">     
  			   </pre>	                 
                   </form>
                   
                </body>          
</html> 
<?php
if(isset($_POST['n1']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
echo "the value you entered=",$a;
echo "the value you entered=",$b; 
echo "the value you entered=",$c; 
}
if(isset($_POST['n2']))
{
header(Refresh);
}
?>               
