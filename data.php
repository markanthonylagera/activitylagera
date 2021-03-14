<?php
session_start();


if(!isset($_SESSION['user'])){
	header('location: data.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" href="style.css">
	<title>Data Page</title>
</head>
<body>
	<ul class ="topnav">
    <li><a href="home.php">Home</a></li>
     <li class="dropdown"><a href="data.php" class="dropbtn">Data</a>
      <div class="dropdown-content">
        <a href="insert.php">Insert Data</a>
        <a href="search.php">Search Data</a>
      </div>
    </li>
    <li><a href="contact.php">Contacts</a></li>
    <li><a href="about.php">About</a></li>
    
   
    <li style="float:right"><a class="active" href="logout.php">Log Out</a></li>
    
      
    
  </ul>

	<p>*You can ADD , VIEW and SEARCH DATA in this web!</p>

	
</body>
</html>