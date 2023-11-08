

<html>
<head>
<body>
<h1 align="center">MAR ATHNASIUS COLLEGE OF ENGINEERING</h1><br>
<h2 align="center">SESSIONAL EXAMINATION RESULT</h2>
      <form method="post" align="center">
          <table border="1" align="center" width="20%" height="20%">
             <tr> 
              <td colspan="2">STUDENT DETAILS</td>
             </tr>
             <tr>
               <td>ID</td>
               <td><input type="text" align="center" name="i" placeholder="enter the neme"></td>
              </tr>
              <tr>
               <td>NAME</td>
               <td><input type="text" align="center" name="n" placeholder="enter the id"></td>
             </tr>
           </table> <br><br>
          
          <input type="submit" name="next" value="submit">
      </form>

<?php
$list=array(array("id"=>1,"name"=>"anu","DS"=>45,"ASE"=>34,"MFC"=>27,"DFCA"=>48),
            array("id"=>2,"name"=>"manu","DS"=>4,"ASE"=>3,"MFC"=>2,"DFCA"=>28),
            array("id"=>3,"name"=>"ammu","DS"=>32,"ASE"=>23,"MFC"=>34,"DFCA"=>40));
if(isset($_POST['next']))
{
$total=0;
$fail=0;
        foreach($list as $l)
        {
             if($l["id"]==$_POST['i'] && $l["name"]==strtolower($_POST['n']))
                 {
   ?>
        <h3 align="center" >NAME:<?php echO strtoupper($_POST['n']);?></h3>
        <h3 align="center">ROLL NO:<?php echo $_POST['i'];?></h3>
        <form method="POST" action="" align="center">
           <table align="center" border="1" width="20%" height="20%">
               <tr>
			<td>SUBJECT</td>
			<td>MARKS</td>
			<td>PASS/FAIL</td>
		</tr>
	 
	   <?php
	      
	      foreach($l as $key=>$value)
	        {	
	           if($key!="name" && $key!="id")
	            {
	            $total=$total+$value;
	        ?>
        <tr> 
	         <td><?php echo $key;?></td>
	         <td> <?php echo $value;?></td>
	      <?php
	      if($value>=25)
	       {
	       ?>
	        <td>PASS</td>
	       <?php
	       }
	       else
	       {
	       ?>
	       <td> FAIL</td>
	       <?php
	       $fail=1;
	       }
	     ?>
	  </tr>   
  <?php
  }
 }
 ?>
  
  <tr> 
      <td> TOTAL</td>
      <td> <?php echo $total;?></td>
      <?php
      if($fail==1)
      {
      ?>
      <td>FAIL</td>
      <?php
     
			}
	               else
			{
			?>
			<td>PASS</td>
			<?php
			}
			?>
			</tr>
			</table>
			<?php
		}

	}
	}
?>	
</body>
</head>
</html>
      
