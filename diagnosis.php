<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Diagnosis...</title>
</head>

<style type="text/css">
  * {
  box-sizing: border-box;
}

/* Style inputs */ 
input[type=text], input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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

<body>
    <div class="container" >
  <div style="text-align:center">
    <p style="font-family: elephant; color: black; font-size: 250%; text-align: center; padding-top: 0px; padding-right: 20%;">DIAGNOSIS</p>
  </div>
  <div class="row">
    <div class="container1" style="">
      <form method="post">
        <label for="physician_ID_num">Physician ID Number</label>
        <input  name="text" placeholder="Your Physician ID Number.." id="physicianID">

        <label for="priority_number">Priority Number</label>
        <input type="text" id="priority_number" name="text" placeholder="Your Priority Number..">

        <label for="diagnosis">Diagnosis</label>
        <textarea  name="msg" placeholder="Write something.." style="height:170px" id="diagnosis"></textarea>

        <label for="physician_description">Physician Description</label>
        <textarea  name="msg" placeholder="Write something.." style="height:170px" id="desc"></textarea>

        <button class="btn btn--radius-2" style="background-color: green;float: right;" type="submit"><a href="patients.php">Done</a></button>
        
      </form>
    </div>

    </div>
  </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->