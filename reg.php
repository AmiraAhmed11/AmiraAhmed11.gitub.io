<?php

@include 'modules/conn.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword']; 

$error=array();

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}   
//required name
if (empty($_POST["name"])) {
   $error[] = "Name is required";
 }else{
   $name = test_input($_POST["name"]);
   if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $error[] = "Only letters and white space allowed";
      }
   }

    ///validate email
if (empty($_POST["email"])) {
   $error[] = "Email is required";
   } else {
   $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = "Invalid email format";
   }
   }

    //validte password

if(empty($_POST['password'])){
   $error[] = "Password is required";
}elseif (strlen($pass) < 8) {
  // Password is too short
  $error[] = "Password must be at least 8 characters long";
} elseif (!preg_match('/[a-z]/', $pass)) {
  // Password doesn't contain a lowercase letter
  $error[] = "Password must contain at least one lowercase letter";
} elseif (!preg_match('/[0-9]/', $pass)) {
  // Password doesn't contain a number
  $error[] = "Password must contain at least one number";
}

if($pass !== $cpass)
   $error[] = "Password not matched!";

$select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);
      
if(mysqli_num_rows($result) > 0){
   
$error[] = 'user already exist!';
}

      
if(count($error)==0){
  $insert = "INSERT INTO users(email, password, role, name) VALUES('$email','$pass','user','$name')";
  mysqli_query($conn, $insert);
  header('location:login.php');
  }   
   
};




?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <link rel="stylesheet" href="css/login_style.css" />
  <title>Sign Up</title>
  <script>
    // JavaScript function to display an alert with the error message
    function displayError(errorMessage) {
        alert(errorMessage);
    }
  </script>
</head>
<body>
<div class="form-container">

<form action="" method="post">
   <h3>register now</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="text" name="name"  placeholder="enter your name">
   <input type="text" name="email"  placeholder="enter your email">
   <input type="password" name="password"  placeholder="enter your password">
   <input type="password" name="cpassword"  placeholder="confirm your password">

   <input type="submit" name="submit" value="register now" class="form-btn">
   <p>already have an account? <a href="login.php">login now</a></p>
</form>

</div>
</body>
</html>