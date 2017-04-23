<?php
include 'adside.php';
?>

<?php 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../includes/style.css" />
</head>

<body align="center">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="500" border="0" align="center">
  <?php
         if(isset($_POST['submit'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $subject = $_POST['subject'];
            
            $sql = "DELETE FROM coco WHERE subject = '$subject'" ;
            mysql_select_db('attainment');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('No such data exists.');
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
<tr>
<td>

<form name="form1" method="post" action="<?php $_PHP_SELF ?>">

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center"><font size="5" ><strong>Delete Course Coordinator for </strong></font></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td><div align="right">Subject</div></td>
<td><div align="center">:</div></td>
<td>
  <div align="left">
	<select name="subject" id="mysubject">
		<option value="se">Software Engineering</option>
		<option value="dmbi">DMBI</option>
	</select>
  
  </div></td>
</tr>
<tr>
<td><div align="right"></div></td>
<td><div align="center"></div></td>
<td>
  <div align="left">
    <input type="submit" class="button" name="submit" value="Delete">
  </div></td>
</tr>
</table>
</form>

</td>
</tr>
<tr><td><?php include("footer.php")?></td></tr>
<?php
         }
      ?>
</table>
</body>
</html>
