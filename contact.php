
<?php
session_start();


if(!isset($_SESSION['user'])){
	header('location: contact.php');
}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel ="stylesheet" href="style.css">
	<title>My first website</title>
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

      <h2>*For Inquires and Suggestions , contact the Following:</h2></br>

    <div class="chip">
    <img class="h" src="logo.jpg" alt="Person" width="96" height="96">Mayor Eduardo "Boy" Ong
    </div>
    <div class="chip">
    <img class="h" src="logo.jpg" alt="Person" width="96" height="96">Vice Mayor Eduardo "Ed" Ong Jr.
    </div>
    <div class="chip">
    <img class="h" src="logo.jpg" alt="Person" width="96" height="96">Sgt.Peter Espinosa
    </div>
    <div class="chip">
    <img class="h" src="logo.jpg" alt="Person" width="96" height="96">Brgy. Chairperson
    </div>
    <div class="chip">
    <img class="h" src="logo.jpg" alt="Person" width="96" height="96">Brgy. SK Chairperson
    </div>
    <h2> Or Connect with us through: </h2>
    <div class="chip">
    <img class="h" src="d1.png" alt="Person" width="100" height="100">LGU CARIGARA</br>
    </div>
    <div class="chip">
    <img class="h" src="d2.png" alt="Person" width="100" height="100">LGU_CARIGARA</br>
    </div>
    <div class="chip">
    <img class="h" src="d3.png" alt="Person" width="100" height="100">lgucarigara@gamail.com</br>
    </div>




</body>


</html>
