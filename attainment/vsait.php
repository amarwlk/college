<?php
include 'ssideait.php';
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
<h1 style="text-indent: 30em;" >SE Student List</h1>
  <?php
        
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }				         
            mysql_select_db('attainment');
			$result = mysql_query("SELECT * FROM sait");
           echo "<table border='1' align='right'>
               <tr>
               <th>ID</th>
               <th>Name</th>
			   <th>Term Test 1</th>
			   <th>Term Test 2</th>
			   <th>Assignment 1</th>
			   <th>Assignment 2</th>
			   <th>Term Test Average</th>
			   <th>Assignment Average</th>";
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				  echo "<td>" . $row['id'] . "</td>";
				  echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['t1'] . "</td>";
					echo "<td>" . $row['t2'] . "</td>";
					echo "<td>" . $row['a1'] . "</td>";
					echo "<td>" . $row['a2'] . "</td>";
					echo "<td>" . $row['tt'] . "</td>";
					echo "<td>" . $row['aa'] . "</td>";
					echo "</tr>";
			}
			echo "</table>";
            
            mysql_close($conn);
         
            ?>


</body>
</html>
