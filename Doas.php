<?php
require 'Doas_db.php';


$doas_db = new Doas_db();
$all_doas = $doas_db->getAllDoas();   




$page="Doas"

?>

<!DOCTYPE html>
<html lang="en">
<head>

    
   
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doas | <?php echo $page; ?> </title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="style2.css" rel="stylesheet">
    

</head>
<body>
    <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 1100px;">
    
    <br>            <a href="index.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Home</a>
                    <a href="about.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">About</a>
                    <a href="event.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Events</a>
                    <a href="sermon.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Sermons</a>
                    <a href="contact.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Contact</a>
                    <br>
                    <br>
                    <h1 class="display-3">Doas</h1>
    </div>
    <div class="doas-container">
        <?php foreach ($all_doas as $doa): ?>
            <div class="doa">
                <h2><?php echo $doa['title']; ?></h2>
                <p><?php echo $doa['content']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
 