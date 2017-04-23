<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #333;;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: red;
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a href="adcoco.php">Add Course Coordinator</a></li>
  <li><a href="delcoco.php">Delete Course Coordinator</a></li>
  <li><a href="vcoco.php">View Course Coordinator data</a></li>
  <li><a href="logout.php">Log Out<a></li>
  
</ul>



</body>
</html>
