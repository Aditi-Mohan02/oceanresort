<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>OCEAN BREEZE</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
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

    <div class="logo" style="float:left;">
  
      <img src="images/f1.png" width="350px" height="110px">
    </div>
    <div class="links">
      <a href="#about" class="hlink" style="padding-right:20px;padding-left:10px;"> ABOUT US</a>
      <a href="#testimonials" class="hlink" style="padding-right:20px;">TESTIMONIALS</a>
      <a href="#newsletter" class="hlink">NEWSLETTER</a>
    </div>
    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="reservation.php" class="btn">BOOK NOW</a>
    </div>
    </div>
  </div>


  <!-- SLIDESHOW -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides1 fade">
      <div class="numbertext">1 / 4</div>
      <img src="images/a.png" class="image">
    </div>

    <div class="mySlides1 fade">
      <div class="numbertext">2 / 4</div>
      <img src="images/b.png" class="image">
    </div>

    <div class="mySlides1 fade">
      <div class="numbertext">3 / 4</div>
      <img src="images/c.png" class="image">
    </div>

    <div class="mySlides1 fade">
      <div class="numbertext">4 / 4</div>
      <img src="images/d.png" class="image">
    </div>

    <!-- Next and previous buttons -->
     <a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
    <a class="next" onclick="plusSlides(1,0)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center; padding-top:580px;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

<div id="about" class="about">
  <h1 class="heading"> OCEAN BREEZE BEACH RESORT</h1>
  <h3 class="para">There's magic in the atmosphere</h3>
  <pre class="about-us">
    Located on the largest stretch of beach in Playa del Carmen, Ocean Breeze Beach Resort invites you to experience the best of the
    Riviera Maya. Discover lush gardens, tranquil pools, exquisite dining, and high-end accommodations that channel the spirit
    of the region. Choose between the barefoot elegance of our beach houses, high-end suites, and peaceful treehouses
    surrounded by lush green foliage — whichever you pick, you will enjoy high-end amenities, thoughtful service, and one
    of the most beautiful settings imaginable.

    Our dreamy resort is perfect for romantic retreats, family getaways, and spectacular meetings and events. Unplug and
    unwind with a handcrafted cocktail by one of our four pools, soak up sun on the sand, and treat yourself to a soothing
    massage or Mayan inspired treatment at the Revive Spa.  Adventure-seekers will want to explore ancient Yucatan
    Peninsula cultural sites and natural treasures, snorkel, or scuba dive with our Ocean Breeze 35-year-old Dive Shop through reefs
    filled with tropical fish and native turtles or experience the magic of cenotes.  Our in-town beachfront resort location is only
    steps from local shops, boutiques, and restaurants.  Experience Ocean Breeze Beach Resort and let authentic
    Mexican hospitality and the magic of Mexico’s Caribbean coast and white sand beach sweep you off your feet.

    Ocean Breeze Beach Resort's unique layout of outdoor pathways with lush gardens and open-air restaurants and venues, gives
    us the ability to re-imagine your travel experience and feel safe.
  </pre>
</div>




<div id="testimonials" class="testimonials">
  <div class="mySlides2 fade">
    <img src="images/r1.png" class="reviews">
  </div>

  <div class="mySlides2 fade">
    <img src="images/r2.png" class="reviews">
  </div>

  <div class="mySlides2 fade">
    <img src="images/r3.png" class="reviews">
  </div>

  <div class="mySlides2 fade">
    <img src="images/r4.png" class="reviews">
  </div>

  <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1,1)">&#10095;</a>
</div>
<br>


<div id="newsletter" class="newsletter">
  <div style="padding-top:50px;" >
    <h2 class="heading">SIGN UP to our NEWSLETTER!!</h2>
    <p class="para"> stay up to date with our latest news and events.</p>
    <a href="newsletter.php" class="btn">SIGN UP</a>

  </div>

</div>

<div class="info" style="right:0; left:0;">
  <div style="padding-top:18px;">
    <a href="reservation.php" class="Ilink" style="padding-right:80px;margin-top:50px;">RESERVATIONS</a></a>
    <a href="contact.php" class="Ilink"  style="padding-right:80px;">CONTACT US</a>
    <a href="faqs.php" class="Ilink"  style="padding-right:80px;">FAQS</a>
    <a href="feedback.php" class="Ilink">FEEDBACK</a>
  </div>



</div>
  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
      <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
      <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
      <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>


      <p>All Rights Reserved. © Copyright 2020 Ocean Breeze Beach Resort.</p>

    </div> </footer>


  <script type="text/javascript" src="index.js"></script>
</body>

</html>
