<?php
session_start();


if(!isset($_SESSION['user'])){
    header('location: patients.php');
}
?>
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "patientsrecordsystem";
$con = new mysqli($localhost, $username, $password, $database);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM diagnosis_tbl";
if( isset($_POST['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_POST['search']));

    $sql =  "SELECT physician_ID_num, priority_number, diagnosis, physician_description
    FROM diagnosis_tbl WHERE priority_number LIKE '%$priority_number%' ";

}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Patients File</title>
<style type="text/css">
	  * {
  box-sizing: border-box;
}

/* Style the container/contact section */
.container {
  background: url('d3449adfe327c4d0d18f388fcc0e0d23.jpg');
  background-repeat: no-repeat;
  font-family: arial;
  background-size: 100%;
  border-radius: 10px;
  padding: 50px;
  padding-left: 250px;
  padding-bottom: 50%;

}
.container1 {
  float: center;
  width: 80%;
  font-family: arial;
  border-radius: 10px;
  background-color: white;
  padding: 50px;
  padding-top: 50px;
  padding-bottom: 50px;

}



table{
	width: 100%;
}

th, td{
	padding: 8px;
	text-align: left;
}

tr:nth-child(even){
	background-color: black;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
    border-radius: 10px;
  }
}
</style>
</head>
<body>
<div class="container">
	<h1 style="text-align: center; padding-right: 20%;">Patients File</h1>

		<div class="container1">
		<table class="table table-striped table-responsive">
<tr>
<th>Physician ID Number</th>
<th>Priority Number</th>
<th>Diagnosis</th>
<th>Physician Description</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
                <td><?php echo $row['physician_ID_num']; ?> </td>
                <td><?php echo $row['priority_number']; ?> </td>
                <td><?php echo $row['diagnosis']; ?> </td>
                <td><?php echo $row['physician_description']; ?> </td>
            </tr>
    <?php
}
?>

</table>


		</div>
    <a href="home.php"><button class="btn btn--radius-2" style="background-color: red;float: right;" >Home
    </button></a>

	</div>
  

</div>
</body>
</html>