<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accommodations</title>

<link rel="stylesheet" href="styles.css">
<link rel="icon" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


<style media="screen">
.html {
scroll-behavior: smooth;
}

.head1{
font-family: 'Montserrat', sans-serif;
padding-top: 80px;
padding-left: 525px;
padding-bottom: 10px;
font-size: 45px;
}

.head2{
font-family: 'Cedarville Cursive', cursive;
font-size: 30px;
margin-left: 530px;
color: grey;
font-weight: lighter;
line-height: 5px;
}

.head3{
font-family: 'Itim', cursive;
font-size: 22px;
}


.images{
position: relative;
text-align: center;
color: white;
}

.container {
position: relative;
font-family: Arial;
}

.text-block {
position: absolute;
top: 0;
left: 100px;
background-color: black;
color: white;
padding-left: 10px;
padding-right: 10px;
height: 420px;
width: 200px;
margin-left: 150px;
}

.Bimg1{
height: 520px;
width: 800px;
padding-left: 20px;
padding-bottom: 100px;

}

.main{
position: relative;
text-align: center;
color: white;
}

#section0 {
height: 500px;
width: 100%;
}
#section1 {
height: 1500px;
width: 100%;
}

#section2 {
height: 1500px;
}

#section3 {
height: 1190px;
}

.beach{
height: 300px;
width: 460px;
position: absolute;
top: 40px;
left: 20px;
}

.garden{
height: 300px;
width: 460px;
position: absolute;
top: 40px;
left: 522px;
}

.pool{
height: 300px;
width: 460px;
position: absolute;
top: 40px;
right: 20px;
}

.beach-text{
position: absolute;
top: 45%;
left: 10%;
font-family: 'Noto Sans JP', sans-serif;
color: white;
font-size: 20px;
animation-name: example;
animation-duration: 3s;
animation-delay: 1s;
animation-fill-mode: both;
}

@keyframes example {
from {top: 0; }
to {top: 250px; }
}

.garden-text{
position: absolute;
top: 46%;
left: 50%;
font-family: 'Noto Sans JP', sans-serif;
color: white;
font-size: 20px;
animation-name: example;
animation-duration: 3.5s;
animation-delay: 1.5s;
animation-fill-mode: both;
}

.pool-text{
position: absolute;
top: 46%;
right: 10%;
font-family: 'Noto Sans JP', sans-serif;
color: white;
font-size: 20px;
animation-name: example;
animation-duration: 3.5s;
animation-delay: 2s;
animation-fill-mode: both;

}
.beach-text:hover{font-size: 30px;}
.garden-text:hover{font-size: 30px;}
.pool-text:hover{font-size: 30px;}

.parab1{
padding-top: 150px;
font-family: 'Barlow Condensed', sans-serif;
color: black;
font-size: 30px;
padding-left: 200px;
padding-right: 200px;
}

.parab2{
padding-top: 20px;
font-family: 'Barlow Condensed', sans-serif;
font-size: 30px;
padding-left: 200px;
padding-right: 200px;
padding-bottom: 50px;
color: black;
}

.parab3{
padding-left: 20px;
padding-right: 20px;
font-size: 20px;
font-family: 'Barlow Condensed', sans-serif;
}

.dots{
border-style: none;
border-top-style: dotted;
border-color: #226597;
border-width: 10px;
width: 5%;
}

.book-now{
background-color: white;
border: 1px solid;
border-radius: 25px;
padding: 8px;
font-size: 19px;
color: black;
text-decoration: none;
position: absolute;
top: 360px;
left: 20px;
}

.gall{
background-color: white;
border: 1px solid;
border-radius: 25px;
padding: 8px;
font-size: 15px;
color: black;
text-decoration: none;
position: absolute;
top: 290px;
right: 20px;
}

.book-now:hover{
background-color: black;
color: white;
border-color: white;
}

.gall:hover{
background-color: black;
color: white;
border-color: white;
}

.back-div{
height: 5px;
}

.take-back{
border: 5px double;
padding: 8px;
font-size: 23px;
color: white;
background-color: black;
text-decoration: none;
}

.take-back:hover{
background-color: white;
color: black;
border-color: black;
font-size: 30px;
}

.copyright{
background-color: #87c0cd;
left: 0;
right: 0;
position: absolute;
display: block;
margin-top: 100px;
text-align: center;
width: 100%;
}

.container-fluid{
padding-bottom: 15px;
}

.footer-link {
font-weight: bold;
color: #162252;
}

.social-icon{
margin: 30px 20px;
}
</style>
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

    <div class="logo" style="float:left;">
      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/f1.png" width="350px" height="110px">
    </div>

    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="reservation.php" class="btn">BOOK NOW</a>
    </div>
    </div>
  </div>
<h1 class="head1" id="first">ACCOMMODATIONS</h1>
<h2 class="head2">Find the Perfect Retreat for You</h2>

<div class="images" id="section0">

  <!-- for beach -->
  <a href="#section1">
  <img class="beach" src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
       <div class="beach-text">
           Beach Houses
       </div>
  </a>

<!-- for garden -->
  <a href="#section2">
     <img class="garden" src="https://cdn.home-designing.com/wp-content/uploads/2011/05/modern-room-with-garden-view.jpg" alt="">
     <div class="garden-text">
        Garden View
     </div>
  </a>

  <!-- for pool -->
  <a href="#section3">
    <img class="pool" src="https://www.fodors.com/wp-content/uploads/2017/09/Plunge-Pools-Lodge-at-Feline-Field.jpg" alt="">
       <div class="pool-text">
          Pool View
           </div>
        </a>
</div>

<!-- Beach view -->
<div class="main" id="section1">

  <p class="parab1">
  Accommodations at Ocean Breeze Resort provide a tranquil escape for mind and body.
  Our palapa-style bungalows and beach houses showcase Mayan-inspired architecture, with thatched roofs,
  traditional materials, and local decor, while the surrounding gardens and greenery make you feel one with nature.
  Staying here, you’ll enjoy a carefree, unplugged escape — our rooms do not feature TVs,
  though we provide Wi-Fi just in case you need help staying connected and entertained.</p>

  <p class="parab2">Our selection of guest rooms, suites, casitas, tree houses, and haciendas are scattered throughout
  the property and offer the perfect stay for any type of traveler. You can choose to stay right at the edge of the water,
  on the soft sands, or tucked away amid lush greenery. We also offer connecting rooms and haciendas that can accommodate larger groups
  and families. Opt for our Half-Board Package, complete with daily breakfast and either lunch or dinner, or our various room and
  breakfast plans.</p>

  <div class="container">
    <img class="Bimg1" src="https://www.homeinspirationideas.net/wp-content/uploads/2015/07/shangri-la-villingili-resort-spa-maldives-1.jpg" alt="Beach">
    <div class="text-block">
      <h3 class="head3">Beach House King Plunge Pool</h3>
      <p class="parab3">These peaceful rooms occupies the ground floor of two-story beach house, complete with Mayan-inspired decor.</p>
<a class="book-now" href="reservation.php">Book Now</a>
<a class="gall" href="gallery.php">View Gallery</a>
    </div>

  </div>

<hr class="dots">

<!-- garden view -->
  <div class="main" id="section2">
    <p class="parab1">Accommodations at Ocean Breeze Resort provide a tranquil escape for mind and body.
      Our palapa-style bungalows and beach houses showcase Mayan-inspired architecture, with thatched roofs,
      traditional materials, and local decor, while the surrounding gardens and greenery make you feel one with nature.
      Staying here, you’ll enjoy a carefree, unplugged escape — our rooms do not feature TVs,
      though we provide Wi-Fi just in case you need help staying connected and entertained.</p>

    <p class="parab2">Our selection of guest rooms, suites, casitas, tree houses, and haciendas are scattered throughout
    the property and offer the perfect stay for any type of traveler. You can choose to stay right at the edge of the water,
    on the soft sands, or tucked away amid lush greenery. We also offer connecting rooms and haciendas that can accommodate larger groups
    and families. Opt for our Half-Board Package, complete with daily breakfast and either lunch or dinner, or our various room and
    breakfast plans.</p>

  <div class="container">
    <img class="Bimg1" src="https://nz5.architecturemedia.net/site_media/media/cache/fd/8a/fd8ac18ebcc75cf0062d65281e2a2227.jpg" alt="Beach">
        <div class="text-block">
            <h3 class="head3">Garden-View King</h3>
            <p class="parab3">Our Garden-View rooms conveniently place you near our pools and lobby and just a short stroll from the palm-lined beach.</p>
            <a class="book-now" href="reservation.php">Book Now</a>
            <a class="gall" href="gallery.php">View Gallery</a>
        </div>
  </div>

<hr class="dots">

<!-- pool view -->
<div class="main" id="section3">
  <p class="parab1">Accommodations at Ocean Breeze Resort provide a tranquil escape for mind and body.
    Our palapa-style bungalows and beach houses showcase Mayan-inspired architecture, with thatched roofs,
    traditional materials, and local decor, while the surrounding gardens and greenery make you feel one with nature.
    Staying here, you’ll enjoy a carefree, unplugged escape — our rooms do not feature TVs,
    though we provide Wi-Fi just in case you need help staying connected and entertained.</p>

    <p class="parab2">Our selection of guest rooms, suites, casitas, tree houses, and haciendas are scattered throughout
    the property and offer the perfect stay for any type of traveler. You can choose to stay right at the edge of the water,
    on the soft sands, or tucked away amid lush greenery. We also offer connecting rooms and haciendas that can accommodate larger groups
    and families. Opt for our Half-Board Package, complete with daily breakfast and either lunch or dinner, or our various room and
    breakfast plans.</p>

  <div class="container">
    <img class="Bimg1" src="https://jaweb2019cdn.azureedge.net/assets/images/default-source/jarh-images/ja-ocean-view-hotel/accommodation/room-type/club-sea-view-room/accomodation-accordion/ocean-view---club-room-jpg.jpg?sfvrsn=67c4c5a4_7" alt="Beach">
        <div class="text-block">
          <h3 class="head3">Pool-View King</h3>
          <p class="parab3">Conveniently located near the pools, restaurants, and lobby. Pool-View rooms are located on the ground floor of our Mayan-inspired beach houses.</p>
          <a class="book-now" href="reservation.php">Book Now</a>
          <a class="gall" href="gallery.php">View Gallery</a>
        </div>
  </div>
</div>

<div class="back-div">
<a class="take-back" href="#first">Take Me Up</a>
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
