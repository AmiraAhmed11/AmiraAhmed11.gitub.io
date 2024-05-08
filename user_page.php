<?php
session_start();
@include 'modules/conn.php';

?> 

<!DOCTYPE html>
<html>
<head>
 
    <title>Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user_page.css">
     
</head>
 
<body>
    <section class="user-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" alt="Student Image" class="img-fluid" width=200px>
                </div>
                <div class="col-md-8">
                    <h1><?php echo 'Welcome, ' . $_SESSION['The_Name']; ?></h1>
                    <?php
                    
       

                    ?> 
                        <form>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['The_Name']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo  $_SESSION['user_email']; ?>" readonly>
                            </div>
                             
                            <a href="update.php" class="btn">Update</a>
                            <a href="logout.php" class="btn">Logout</a>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>
