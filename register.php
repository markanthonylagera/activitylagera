<?php
session_start();


if(!isset($_SESSION['user'])){
    header('location: register.php');
}
?>
<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = 'patientsrecordsystem';


$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn){
    echo mysqli_connect_error();
    echo mysqli_connect_errno();
}
if(isset($_POST['addpost'])){

        $pr = $_POST['priority_number'];
        $name = $_POST['fullname'];
        $age = $_POST['age'];
         $add = $_POST['address'];
        $gender =$_POST['gender'];
       
        $status =$_POST['status'];
        $contact =$_POST['contact'];
        
        $sql = "INSERT INTO personal_tbl(priority_number,fullname,age,gender,address,status,contact) values ('$pr','$name',''$age','$add','$gender','$status','$contact')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Successfully Posted your Blog!!";
        }else{
            echo "There is an error posting your blog!!";
            echo mysqli_error($conn);
        }
    }else{
        echo "Error Uploading!!";
    }






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration...</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">
</head>

<body>

    
    <div style="padding: 5%; background: url(d3449adfe327c4d0d18f388fcc0e0d23.jpg); background-repeat: no-repeat; background-size: 100%;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h1 class="title" style="text-align: center; font-size: 35px;">Registration Form</h1>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="pr">Priority Number</label>
                                    <input class="input--style-4" type="text" name="priority_number" id="pr">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="name">Fullname</label>
                                    <input class="input--style-4" type="text" name="fullname" id="name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="age">Age</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="text" name="age" id="age">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="gender">Gender :</label><select id="gender" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="add">Address</label>
                                    <input class="input--style-4" type="type" name="address" id="add">
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="status">Status</label>
                                    <input class="input--style-4" type="type" name="status" id="status">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"for ="contact">Phone Number</label>
                                    <input class="input--style-4" type="text" name="contact" id="contact">
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                            <input class="btn btn--radius-2 btn--blue" type="submit"value="submit" name="addpost"><a href="diagnosis.php">Submit</a>
                            <button class="btn btn--radius-2" style="background-color: red;float: right;" type="submit"><a href="home.php">Cancel</a></button>
                        </div>
                   </div>
               </form>
                </div>
            </div>
        


    <!-- Jquery JS-->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>

    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->