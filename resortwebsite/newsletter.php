<?php

 // Database connection
 $conn = new mysqli("localhost","id15369435_root","?gaQgY<wt0Gfl/Ih","id15369435_customer");

if(isset($_POST['subscribe'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO newsletter (FirstName, LastName, Email) VALUES (?, ?, ?)");
    // echo $conn -> error;die;
    $stmt->bind_param("sss", $firstName, $lastName, $email);
    $stmt->execute();
    echo '<script type="text/JavaScript">
     alert("Subscibed successfully");
     </script>';
    $stmt->close();
    $conn->close();
  }
}


if(isset($_POST['unsubscribe'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   $email = $_POST['email'];

  // sql to delete a record
  $sql = "DELETE FROM newsletter WHERE Email='$email'";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/JavaScript">
     alert("Unsubscribed successfully");
     </script>';
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}


?>


<!DOCTYPE html>
<html>

<head>
	<title>Newsletter Sign Up</title>
	<link rel="stylesheet" type="text/css" href="loginpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<script src="scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-scrolltofixed-min.js" type="text/javascript"></script>

</head>


<body>


	<!-- NAVBAR -->

	<div class="navbar">
		<!-- MENU ICON -->
		<div id="mySidebar" class="sidebar" style="float:left;">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Home</a>
      <a href="accommodations.php">Accommodations</a>
      <a href="gallery.php">Gallery</a>
      <a href="reservation.php">Reservations</a>
      <a href="newsletter.php">Newsletter</a>
      <a href="contact.php">Contact Us</a>
      <a href="feedback.php">Feedback</a>
      <a href="faqs.php">FAQS</a>
		</div>
		<div id="main" style="float:left;">
			<button class="openbtn" onclick="openNav()">☰</button>
		</div>

		<div class="logo" style="float:left;padding-left:20px">
			<!-- <img src="images/e1.png" width="250px" height="95px" > -->
			<img src="images/f1.png" width="350px" height="110px">
		</div>

		<div style="float:right; padding-top:30px; padding-right: 50px;">
			<a href="#container" class="btn">SUBSCRIBE</a>
		</div>
	</div>




	<div class="newsletter" id="newsletter">


		<div class="container" id="container">

			<div class="form-container sign-in-container">
				<form method="POST" action="newsletter.php">
					<h1 style="color: #284c63;">Unsubscribe</h1>
					<br><br>

					<input type="text" name="name" placeholder="First Name">
					<input type="text" name="name" placeholder=" Last Name">
					<input type="email" name="email" placeholder="Email">
					<br><br>

					<button name="unsubscribe">Unsubscribe</button>
				</form>
			</div>
			<div class="form-container sign-up-container">

				<form method="POST" action="newsletter.php">
					<h1 style="color: #284c63;">SUBSCRIBE!</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fa fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fa fab fa-google"></i></a>
						<a href="#" class="social"><i class="fa fa-envelope"></i></a>
					</div>
					<span>or use your email for registration</span>
					<input type="text" name="fname" placeholder="First Name">
					<input type="text" name="lname" placeholder=" Last Name">
					<input type="email" name="email" placeholder="Email">
					<br>
					<button name="subscribe">SignUp</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>New here? Subscribe to our Newsletter!</h1>
						<p>Let's get you started at:</p>
						<img src="images/f1.png" width="190px" height="150px">
						<br><br>
						<button class="ghost" id="signUp">Sign Up</button>
					</div>
					<div class="overlay-panel overlay-right">

						<h1>Want to stop receiving our mails?</h1>
						<p>You can unsubscribe here.</p>
						<button class="ghost" id="signIn">Unsubscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
		<a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
		<a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile"> <i class="social-icon fab fa-instagram"></i></a>
		<a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile"> <i class="social-icon fab fa-twitter"></i></a>


		<p>All Rights Reserved. © Copyright 2020 Ocean Breeze Beach Resort.</p>

	</div>

	<script type="text/javascript">
		function myFunction(x) {
			x.classList.toggle("change");
		}


		/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
		}

		/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}


		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signInButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});
		signUpButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>


</body>

</html>
