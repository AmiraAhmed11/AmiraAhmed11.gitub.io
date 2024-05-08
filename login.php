<?php
session_start();

// Include database connection file
@include 'modules/conn.php';

$errors = [];

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (empty($password)) {
        $errors[] = "Password is required";
    } else {
        // Perform database query
        $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $select);

        if ($result) {
            // Check if user exists
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                
                // Set session variables for email and username
                $_SESSION['user_email'] = $email;
                $_SESSION['The_Name'] = $row['name'];
               

                // Redirect to appropriate page based on role
                if ($row['role'] == 'admin') {
                    $_SESSION['role'] = 'admin'; // Set session variable for the role
                    header('location:index.php');
                    exit;
                } elseif ($row['role'] == 'user') {
                    $_SESSION['role'] = 'user'; // Set session variable for the role
                    header('location:index.php');
                    exit;
                }
            } else {
                $errors[] = 'Incorrect email or password!';
            }
        } else {
            // Query execution error
            $errors[] = "Query execution error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/login_style.css" />
  <title>Sign In</title>
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
   <h3>login now</h3>
   <?php
   if(isset($errors) && !empty($errors)){
      foreach($errors as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      }
   }
   ?>
   <input type="email" name="email"  placeholder="enter your email">
   <input type="password" name="password"  placeholder="enter your password">
   <input type="submit" name="submit" value="login now" class="form-btn">
   <p>don't have an account? <a href="reg.php">register now</a></p>
</form>

</div>
</body>
</html>
