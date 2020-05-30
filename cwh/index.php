<?php
$insert = false;
if(isset($_POST['name'])){
$insert = true;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
 if(!$con){
     die("connection to this database failed due to ".mysqli_connect_error());
 }
 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];;
$email = $_POST['email'];;
$phone = $_POST['phone'];;
$other = $_POST['des'];


 $sql = "INSERT INTO `us_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `description`, `timestamp`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
 if($con->query($sql)==true){
     //echo "successfully inserted";
 }else{
    //  echo "error: $sql <br> $con->error";
    echo "connection error";
 }
 $con->close();
}
//  echo $sql;

// $con = mysqli_connect("localhost","my_user","my_password","my_db");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Travel Form</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Piedra&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="vnitImage.jpg" alt="not found" class="bg" />
    <div class="container">
      <h3>welcome to Vnit Nagpur trip for Los Angles</h3>
      <p>
        Kindly enter your details to confirm your participation in the LA trip
      </p>
      <?php
      if($insert== true){
      echo '<p class="submsg">Thanks for submitting form. we are happy to see you.</p>';
      }
      ?>
      <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="your name" />
        <input type="text" name="age" id="age" placeholder="your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="your valid email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="your phone no."
        />
        <textarea
          name="des"
          id="des"
          cols="30"
          rows="10"
          placeholder="enter other information"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
