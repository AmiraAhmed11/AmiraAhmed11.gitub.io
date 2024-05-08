<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  
try {
    $conn = new PDO("mysql:host=$servername;dbname=moslem", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $name = @$_POST["name"];
    $email = @$_POST["email"];
    $Subject = @$_POST["Subject"];
    $message = @$_POST["message"];

    $formErrors = array();
    if (empty($name))
    {
        $formErrors[] = "<div class='error'>Please Type Your Name</div>";
    }
    if (empty($email))
    {
        $formErrors[] = "<div class='error'>Please Type Your Email</div>";
    }
    if (empty($Subject))
    {
        $formErrors[] = "<div class='error'>Please Type Your Mobile Subject</div>";
    }
    if (empty($message))
    {
        $formErrors[] = "<div class='error'>Please Type A Message</div>";
    }
    foreach ($formErrors as $error)
    {
        echo $error;
    }
    if(empty($formErrors))
    {

        $sql = "INSERT INTO cont(name,email,Subject,message) VALUES ('$name', '$email', '$Subject','$message')";
        $conn->exec($sql);
        $conn = null;
        echo "<script>alert('Send successfully');</script>";
        header("Location: contact.php?success=1");
        exit();

    }

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
