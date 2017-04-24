<?php
include 'techsidese.php';
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
<h1>SE Teacher List</h1>
  <?php
        
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }				         
            mysql_select_db('attainment');
			$result = mysql_query("SELECT * FROM techse");
           echo "<table border='1' align='center'>
               <tr>
               <th>ID</th>
               <th>Name</th>
			   <th>Phone Number</th>";
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				  echo "<td>" . $row['id'] . "</td>";
				  echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['pnumber'] . "</td>";
					
					echo "</tr>";
			}
			echo "</table>";
            
            mysql_close($conn);
         
            ?>

</body>
</html>
