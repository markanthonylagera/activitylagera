<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pos_db';


//connect to the database

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(isset($_POST['register']))

  if($_POST['register'] == ''){
    $_SESSION['register'] = $_POST['register'];
    $_SESSION['message'] = "You successfully register!";
  header('location: diagnosis.php');
}
  else{
    echo "<div>Fill out first the form!!!</div>";
  }




if (mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_error() .')'. mysqli_connect_error());
}
else{
  $sql = "INSERT INTO account(username, password)
  VALUES ('$username', '$password') ";
  if ($conn ->query($sql)) {
    echo "New record is inserted successfully!!!";
  }
  else{
    echo "Error: ".$sql." ".$conn->error;
  }
  $conn->close();
}



?>