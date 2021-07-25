<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=IBM+Plex+Sans:wght@700&family=Merriweather+Sans&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Trispace:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral+SC:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Lobster&family=Slabo+27px&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
<style media="screen">
.logo{
  width: 50px;
  height: 50px;
  padding-left: 10px;
}


.video-div{
height: 900px;
background-color: black;
}

.vid{
  height: 600px;
  width: 1000px;
  position: relative;
  left: 250px;
  top: 110px;
  box-shadow: 1px 2px 10px 6px white;
}

.space{
  height: 50px;
}

.vid-text{
color: white;
position: relative;
top: 100px;
left: 480px;
font-family: 'Slabo 27px', serif;
font-size: 30px;
}

</style>
<body>
  <div class="navbar" style="margin-bottom:20px;">
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

 <div class="logo" style="float:left;width:300px; height:350px;">

      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/f1.png" width="350px" height="110px">
    </div>

    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="reservation.php" class="btn">BOOK NOW</a>
    </div>
    </div>
  </div>
  <br><br>
<div class="heading-section" style="margin-top:20px;">
  <h1 class="head-h1"> Ocean Breeze Beach Resort Photos </h1>
  <h2 class="head-h2"> Experience the luxury...</h2>
</div>

<div class="photo-gallery">
<div class="grid-container">
    <article id="1" class="location-listing">
      <a class="location-title" href="#section-location">
       Location </a>
        <div class="location-image">
            <a href="#section-location">
            <img class="sep-image" src="https://www.thephuketnews.com/photo/listing/2018/1525344511_1-org.jpg" alt="san francisco">      </a>
        </div>
    </article>

    <article id="2" class="location-listing">
        <a class="location-title" href="#section-amenities">Hotel Amenities </a>
            <div class="location-image">
            <a href="#section-amenities">
            <img class="sep-image" src="https://i.pinimg.com/originals/62/6a/25/626a25396ba39e474ecc3faf37e2e9c4.jpg" alt="london">    </a>
            </div>
    </article>

    <article id="3" class="location-listing">
      <a class="location-title" href="#section-beaches">
                        Beaches  </a>
          <div class="location-image">
            <a href="#section-beaches">
            <img class="sep-image" src="https://sulekhaholidays.com/wp-content/uploads/2019/03/Goa-Mgoa-hotel-booking.jpg" alt="new york">    </a>
          </div>
    </article>

    <article id="4" class="location-listing">
          <a class="location-title" href="#section-accommodation">
                        Accommodation </a>
              <div class="location-image">
              <a href="#section-accommodation">
              <img class="sep-image" src="https://images7.alphacoders.com/463/463342.jpg" alt="cape town">  </a>
              </div>
    </article>

    <article id="5" class="location-listing">
          <a class="location-title"href="#section-pools">
                        Pools </a>
          <div class="location-image">
            <a href="#section-pools">
            <img class="sep-image" src="https://samikshaholidays.com/wp-content/uploads/2016/11/Exotic-Resort-Wallpapers-1.jpg" alt="beijing">      </a>
          </div>
    </article>

    <article id="6" class="location-listing">
          <a class="location-title" href="#section-spa">
                        Revive Spa  </a>
              <div class="location-image">
                 <a href="#section-spa">
                <img class="sep-image" src="https://conradhotels3.hilton.com/resources/media/ch/en_US/img/shared/carousel/main/CN_sparoom3_750x350_FitToBoxSmallDimension_Center.jpg" alt="paris">
                  </a>
              </div>
    </article>

    <article id="7" class="location-listing">
          <a class="location-title" href="#section-tree">
                        Tree House </a>
              <div class="location-image">
                 <a href="#section-tree">
                <img class="sep-image" src="https://divisare-res.cloudinary.com/images/c_limit,f_auto,h_2000,q_auto,w_3000/v1478754621/tjzrufxptqtv4jd7pdvu/kimshasa-baldwin-treehouse-suite-at-playa-viva-sustainable-boutique-hotel.jpg" alt="paris">
                  </a>
              </div>
    </article>

    <article id="8" class="location-listing">
          <a class="location-title" href="#section-resto">
                        Restaurant & Bar  </a>
              <div class="location-image">
                 <a href="#section-resto">
                <img class="sep-image" src="https://b.zmtcdn.com/data/pictures/0/16600380/7f8ae265c30f4f0390ef73d75de25462_featured_v2.jpg" alt="paris">
                  </a>
              </div>
    </article>

    <article id="9" class="location-listing">
          <a class="location-title" href="#section-clubs">
                        Clubs  </a>
              <div class="location-image">
                 <a href="#section-clubs">
                <img class="sep-image" src="https://images.unsplash.com/photo-1556035511-3168381ea4d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="paris">
                  </a>
              </div>
    </article>
</div>
      <!-- end grid container -->
</div>

<!-- location -->
<div id="section-location">
  <h2 class="all-headings">Location Gallery</h2>
     <div class="first-location">

     </div>
</div>

<!-- Hotel Amenities -->
<div id="section-amenities">
  <h2 class="all-headings">Hotel Amenities Gallery</h2>
     <div class="second-amenities">

     </div>
</div>

<!-- Beaches -->
<div id="section-beaches">
    <h2 class="all-headings">Beaches Gallery</h2>
     <div class="third-beaches">

     </div>
</div>

<!-- Section-Accommodation -->
<div id="section-accommodation">
    <h2 class="all-headings">Accommodation Gallery</h2>
     <div class="fourth-accommodation">

     </div>
</div>

<!-- Section-Pools -->
<div id="section-pools">
  <h2 class="all-headings">Pools Gallery</h2>
     <div class="fifth-pools">

     </div>
</div>

<!-- Section-spa -->
<div id="section-spa">
  <h2 class="all-headings">Spa Gallery</h2>
     <div class="sixth-spa">

     </div>
</div>

<!-- Section-tree -->
<div id="section-tree">
  <h2 class="all-headings">Tree house Gallery</h2>
     <div class="seventh-tree">

     </div>
</div>

<!-- Section-resto -->
<div id="section-resto">
  <h2 class="all-headings">Resto-Bar Gallery</h2>
     <div class="eighth-resto">

     </div>
</div>

<!-- Section-clubs -->
<div id="section-clubs">
  <h2 class="all-headings">Clubs Gallery</h2>
     <div class="ninth-clubs">

     </div>
</div>


<p class="space"></p>

<div class="video-div">
  <p class="vid-text">Feel the waves crashing the shore with us!</p>
<video class="vid" width="400" controls>
  <source  src="images/1904748505.mp4" type="video/mp4" >
</video>
</div>

<script type="text/javascript" src="index.js"></script>




  </body>
</html>
