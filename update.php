<?php @include 'modules/conn.php';
session_start();
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
                    <h1>Change your username</h1>
                    <?php

                    $sql = "SELECT name  FROM users";

                    @$result_name = mysqli_query($conn, $sql);

                    $row_name = mysqli_fetch_array($result_name);

                    if (isset($_SESSION['The_Name'])) {
                        $user['name'] = $_SESSION['The_Name'];
                    }

                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Current Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="newValue">New Name:</label>
                            <input type="text" class="form-control" id="newValue" name="newValue">
                        </div>

                        <div class="button-container">
                            <button type="submit" name="submitBtn" class="btn" onclick="submitBtn()">Update</button>
                            <a href="index.php">home</a>
                        </div>
                        <?php
                        if (isset($_POST['submitBtn'])) {
                            echo "<script>alert('Update completed successfully!');</script>";
                        }

                        ?>
                    </form>


                    <?php
                    if (isset($_POST['submitBtn'])) {
                        $inputContent = $_POST['newValue'];

                        $newValue = $inputContent;

                        $sql = "UPDATE users SET name = '$newValue' WHERE name = '{$_SESSION['The_Name']}'";
                        mysqli_query($conn, $sql);
                    }
                    ?>


                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</body>

</html>