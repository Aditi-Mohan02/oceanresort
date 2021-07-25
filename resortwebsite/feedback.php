<?php

 // Database connection
 $conn = new mysqli("localhost","id15369435_root","?gaQgY<wt0Gfl/Ih","id15369435_customer");

if(isset($_POST['feedback'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];
    $view = $_POST['view'];
    $experience = $_POST['experience'];
    $purpose = $_POST['purpose'];
    $suggestions = $_POST['suggestions'];



    $stmt = $conn->prepare("INSERT INTO feedback (CustomerService, RestaurantService, RoomService, Housekeeping, OverallService, ResortStandards, YourExperience, PurposeofStay, Suggestions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
     // echo $conn -> error;die;
    $stmt->bind_param("sssssssss", $a1, $a2, $a3, $a4 ,$a5, $view, $experience, $purpose, $suggestions );
    $stmt->execute();
    echo '<script type="text/JavaScript">
     alert("Feedback sent successfully");
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
  <title>Feedback</title>
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
      <a href="#feedback" class="btn">FEEDBACK</a>
    </div>
  </div>

  <divclass="feedback">
    <img class="feedback" src="images/feedback.png">
    <div  id="feedback" class="feedback-form">
      <h1 class="heading">Please fill out this Feedback Form!</h1>
      <p class="para">for a better tomorrow...</p>
      <form class="fform" action="feedback.php" method="POST">
        <label>1) How would you rate the following services at Ocean Breeze Beach Resort?</label><br><br>
        <table cellpadding="0", cellspacing="0"  border="0">
          <tr style="background-color:#4981CE;">
            <th></th>
            <th>Very dissatisfied</th>
            <th>Dissatisfied</th>
            <th>Neutral</th>
            <th>Very satisfied</th>
            <th>Satisfied</th>
          </tr>
          <tr style="background-color:#ffffff;">
            <th style="color:#4981CE">Customer Service</th>
            <td><input type="radio" name="a1" value="Very dissatisfied"></input></td>
            <td><input type="radio" name="a1" value="Dissatisfied"></input></td>
            <td><input type="radio" name="a1" value="Neutral"></input></td>
            <td><input type="radio" name="a1" value="Very satisfied"></input></td>
            <td><input type="radio" name="a1" value="Satisfied"></input></td>
          </tr>
          <tr style="background-color:#CAE1FF;">
            <th style="color:#4981CE">Restaurant Service</th>
            <td><input type="radio" name="a2" value="Very dissatisfied"></input></td>
            <td><input type="radio" name="a2" value="Dissatisfied"></input></td>
            <td><input type="radio" name="a2" value="Neutral"></input></td>
            <td><input type="radio" name="a2" value="Very satisfied"></input></td>
            <td><input type="radio" name="a2" value="Satisfied"></input></td>
          </tr>
          <tr style="background-color:#ffffff;">
            <th style="color:#4981CE">Room Service</th>
            <td><input type="radio" name="a3" value="Very dissatisfied"></input></td>
            <td><input type="radio" name="a3" value="Dissatisfied"></input></td>
            <td><input type="radio" name="a3" value="Neutral"></input></td>
            <td><input type="radio" name="a3" value="Very satisfied"></input></td>
            <td><input type="radio" name="a3" value="Satisfied"></input></td>
          </tr>
          <tr style="background-color:#CAE1FF; ">
            <th style="color:#4981CE">Housekeeping</th>
            <td><input type="radio" name="a4" value="Very dissatisfied"></input></td>
            <td><input type="radio" name="a4" value="Dissatisfied"></input></td>
            <td><input type="radio" name="a4" value="Neutral"></input></td>
            <td><input type="radio" name="a4" value="Very satisfied"></input></td>
            <td><input type="radio" name="a4" value="Satisfied"></input></td>
          </tr>
          <tr style="background-color:#fff;">
            <th style="color:#4981CE">Overall Service Deliver</th>
            <td><input type="radio" name="a5" value="Very dissatisfied"></input></td>
            <td><input type="radio" name="a5" value="Dissatisfied"></input></td>
            <td><input type="radio" name="a5" value="Neutral"></input></td>
            <td><input type="radio" name="a5" value="Very satisfied"></input></td>
            <td><input type="radio" name="a5" value="Satisfied"></input></td>
          </tr>

        </table><br><br>
        <label>2) How would you view the Ocean Breeze Beach Resort as? </label><br>
        <input type="radio" name="view" value="Economy Resort">  </input>
        <label class="fradio" >Economy Resort</label><br>
        <input type="radio" name="view" value="Luxuiours Resort">  </input>
        <label class="fradio">Luxuiours Resort</label><br>
        <input type="radio" name="view" value="Midscale Resort">  </input>
        <label class="fradio">Midscale Resort</label><br>
        <input type="radio" name="view" value="Upscale Resort">  </input>
        <label class="fradio">Upscale Resort</label><br>
        <input type="radio" name="view" value="Budget Resort">  </input>
        <label class="fradio">Budget Resort</label><br><br>

        <label>3) Can you tell us about your experience at the Ocean Breeze Beach Resort?</label><br><br>
        <textarea name="experience" rows="5" cols="80"></textarea><br><br>

        <label>4) For what purpose do you prefer Ocean Breeze Beach Resort? (eg. leisure, conferences, business trips,...)</label><br><br>
        <textarea name="purpose" rows="5" cols="80"></textarea><br><br>

        <label>5) Any suggestions:</label><br><br>
        <textarea name="suggestions" rows="5" cols="80"></textarea><br><br>

        <button id="subm" type="Submit" name="feedback" class="btn">SUBMIT</button>

      </form>

    </div>

  </div>

    <div class="fcopyright">
      <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
      <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
      <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
      <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


      <p>All Rights Reserved. © Copyright 2020 Ocean Breeze Beach Resort.</p>

  <script type="text/javascript" src="index.js"></script>


</body>

</html>
