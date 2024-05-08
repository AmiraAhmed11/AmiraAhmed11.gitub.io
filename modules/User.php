<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moslem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = ''; // Initialize error variable

class User {
    private $email;
    private $password;
    private $role;

    // Constructor
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function authenticate($conn) {
      // Escape inputs to prevent SQL injection
      $email = $conn->real_escape_string($this->email);
      $password = $conn->real_escape_string($this->password);
      
      // Prepare SQL statement
      $sql = "SELECT * FROM user WHERE email = '$email'";
  
      // Execute query
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
          // User found, verify password
          $row = $result->fetch_assoc();
          $stored_password = $row['password']; // Assuming the column email is 'password' in the user table
          $stored_role = $row['role']; // Assuming the column email is 'role' in the user table
          if (password_verify($password, $stored_password)) {
             if($stored_role =="admin"){
                header('location: index.html'); 
             }else{
                header('location: https://www.facebook.com'); 
             }
          }
      } else if (!$result) {
        // Query execution failed
        echo "Error: " . $conn->error;
        return false;
    }
  
      return false; // Authentication failed
  }
  
  
}
?>
