<?php
   include('session1.php');
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
  <li><a href="adtechait.php">Add Teacher</a></li>
  <li><a href="deltechait.php">Delete Teacher</a></li>
  <li><a href="vtechait.php">View Teacher data</a></li>
  <li><a href="logout.php">Log Out<a></li>
  
</ul>



</body>
</html>
