<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Your message has been sent successfully');</script>";
}
?>
<html>
    <head>
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
	<div class="parent-container">
		<div class="container">
			<div class="ss">
				 <h2>Contact Us</h2>
                 <?php
                  $msg="";
                  if(isset($_GET['error'])){
                    $msg="please fill in the blanks.";
                    echo '<div class="alert alert-danger">'.$msg.'</div>';
                  }
                  if(isset($_GET['success'])){
                    $msg="your message has been sent.";
                    echo '<div class="alert alert-success">'.$msg.'</div>';
                  }

                ?>
			</div>
			<form action="ContactController.php" method="post">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required>
	
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
	
				<label for="Subject">Subject</label>
				<input type="text" id="Subject" name="Subject" required>
	
				<label for="message">Message</label>
				<textarea id="message" name="message" required></textarea>
					<input type="submit" name ="submit" value="submit">
					<a href="feedback.php" class="button" name="btn-send>feedback</a>
					
			</form>
		</div>
	</div>
</body>
</html>
