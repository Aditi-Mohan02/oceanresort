<?php

 // Database connection
 $conn = new mysqli("localhost","id15369435_root","?gaQgY<wt0Gfl/Ih","id15369435_customer");

if(isset($_POST['button'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact (FullName, Email, Mobile, Message) VALUES (?, ?, ?, ?)");
    // echo $conn -> error;die;
    $stmt->bind_param("ssss", $fullName, $email, $mobile, $message);
    $stmt->execute();
    echo '<script type="text/JavaScript">
     alert("Message sent successfully");
     </script>';
    $stmt->close();
    $conn->close();
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Trispace:wght@600&display=swap" rel="stylesheet">
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
        <a href="#contact" class="btn">CONTACT US</a>
      </div>
      </div>

<div class="connect">
  <img class="contact-image" src="images/contact.png">
</div>

<div id="contact" class="add-info">
<div class="info-form">
<h2 class="heading">DROP A MESSAGE!</h2>
<p class="para">Please fill out the quick from and we will be touch in lightening speed.</p>
<form class="message" action="contact.php" method="POST">
  <label for="">Full Name</label>
   <input type="text" name="name" placeholder="Enter your First Name" style="height:35px; width:400px; margin-left:40px;">
   <br><br>
   <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter your Email" style="height:35px; width:400px;margin-left:100px;">
    <br><br>
    <label for="">Mobile</label>
    <input type="text" name="mobile" maxlength="10" placeholder="Enter your Mobile Number" style="height:35px; width:400px;margin-left:85px;">
    <br><br>
    <label for="">Message</label><br>
    <textarea name="message" rows="8" cols="80" placeholder="Drop your message here.." ></textarea>
    <br><br>
    <button id="subm" type="Submit" name="button" class="btn">SUBMIT</button>
</form>
</div>
<div class="info-add">
  <h2 class="heading" style="color: #fff;">CONNECT WITH US:</h2><br>
  <h4 class="heading2">ADDRESS</h3>
    <pre class="message1">
    123 Silverside road, A-123,
    First Floor,Okhla Area,Near Baga
    Beach, Goa.</pre>
  <h4 class="heading2">PHONE</h3>
    <pre class="message1">
    0832-4324-1344
    0832-6547-4334
    9875673844
    8765849374
    </pre class="message1">
  <h4 class="heading2">EMAIL</h3>
    <pre class="message1">
    For any support or any query:
    oceanbreezebeachresort@gmail.com
    </pre>

</div>

</div>


<div class="copyright">
  <div class="container-fluid" style="padding-top:15px;">
    <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
    <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
    <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
    <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


    <p>All Rights Reserved. © Copyright 2020 Ocean Breeze Beach Resort.</p>

  </div>
</div>

    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
