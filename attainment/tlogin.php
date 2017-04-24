<?php
include 'header.php';
?>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['myusername']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mypassword']); 
      $mysubject = mysqli_real_escape_string($db,$_POST['subject']); 
      if($mysubject=='dmbi'){
				$sql = "SELECT id FROM techd WHERE name = '$myusername' and password = '$mypassword'";
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$active = $row['active'];
				$count = mysqli_num_rows($result);
				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				header("location:adsd.php");
				}else {
				$error = "Your Login Name or Password is invalid";
				} 
	  }else if($mysubject=='se'){
	  $sql = "SELECT id FROM techse WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location:adsse.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
		  
		  
	  }
	  else{
		   $sql = "SELECT id FROM techait WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location:adsait.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
		  
		  
		  
	  }	  
	
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../includes/style.css" />
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="500" border="0" align="center">
<tr>
<td>

<form name="form1" method="post" action="">

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center"><font size="5" ><strong>Teacher Login </strong></font></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td width="205" ><div align="right">Username</div></td>
<td width="3"><div align="center">:</div></td>
<td width="268">
  <div align="left">
    <input name="myusername" type="text" id="myusername" required="">
  </div></td>
</tr>
<tr>
<td><div align="right">Password</div></td>
<td><div align="center">:</div></td>
<td>
  <div align="left">
    <input name="mypassword" type="password" id="mypassword" required="">
  </div></td>
</tr>
<tr>
<td><div align="right">Subject</div></td>
<td><div align="center">:</div></td>
<td>
  <div align="left">
	<select name="subject" id="mysubject">
		<option value="se">Software Engineering</option>
		<option value="dmbi">DMBI</option>
		<option value="ait">Advanced Internet Technologies</option>
	</select>
  
  </div></td>
</tr>

<td><div align="right"></div></td>
<td><div align="center"></div></td>
<td>
  <div align="left">
    <input type="submit" class="button" name="Submit" value="Login">
  </div></td>
</tr>
</table>
</form>

</td>
</tr>
<tr><td><?php include("footer.php")?></td></tr>
</table>
</body>
</html>
