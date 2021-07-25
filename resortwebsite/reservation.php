<?php

 // Database connection
 $conn = new mysqli("localhost","id15369435_root","?gaQgY<wt0Gfl/Ih","id15369435_customer");

if(isset($_POST['book'])){
  if($conn->connect_error){
    die("Connect failed: %s\n" .$conn -> error);
  }else{

    $fullName = $_POST['fname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $zcode = $_POST['zcode'];
    $phone = $_POST['phone'];
    $roomtype = $_POST['roomtype'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $checkin = $_POST['Idate'];
    $checkout = $_POST['Odate'];
    $payment = $_POST['colorRadio'];
    $food = $_POST['food'];
    $id=rand(0,1000);
    $amount= $_COOKIE['gfg'];

    $signature = $_POST['signature'];
    $signatureFileName = $id.'.png';
    $signature = str_replace('data:image/png;base64,', '', $signature);
    $signature = str_replace(' ', '+', $signature);
    $data = base64_decode($signature);
    $file = 'signatures/'.$signatureFileName;
    file_put_contents($file, $data);


    $stmt = $conn->prepare("INSERT INTO reservation (booking_id, name, address, zcode, email, phone, roomtype, rooms, adults, children, checkin, checkout, payment, food, amount) VALUES (?, ?,?, ?, ?, ?, ? ,?,?, ?, ?, ?, ?, ? ,?)");
    //echo $conn -> error;die;
    $stmt->bind_param("ississsiiisssss",$id, $fullName, $address, $zcode, $email, $phone, $roomtype, $rooms, $adults, $children, $checkin, $checkout, $payment, $food, $amount);
    $stmt->execute();


  echo '<script type="text/javascript">alert("Congratulations!! Booking Successful!! \nYour Booking ID is '.$id.' \nConfirmation mail is sent to your email");</script>';
    $stmt->close();



    $conn->close();
  }
}


if(isset($_POST['delete'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   $id = $_POST['id'];

  // sql to delete a record
  $sql = "DELETE FROM reservation WHERE booking_id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/JavaScript">
     alert("Booking cancelled!!");
     </script>';
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();
}


if(isset($_POST['update'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   $id = $_POST['id'];
   $rooms = $_POST['rooms'];
   $payment = $_POST['colorRadio'];



  $sql = "UPDATE reservation SET payment='$payment', rooms='$rooms' WHERE booking_id='$id'";
// echo $conn -> error;die;
  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/JavaScript">
     alert("Booking details changed!!");
     </script>';
  } else {
    echo "Error changing record: " . $conn->error;
  }

  $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="icon" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<style media="screen">
body{
  width: 100%;
  overflow-x: hidden;
}
#canvasDiv{
    position: relative;
    border: 2px dashed black;
    height:50px;
    width: 200px;
    margin-left: 200px;

}
.form{
padding-top: 50px;
padding-left: 100px;
padding-right: 100px;
padding-bottom: 80px;
background-color: #b2ebf2;
margin-top: 500px;
position: relative;
left: 190px;
border-radius: 70px;
}
.form1{
  padding-top: 50px;
  padding-left: 100px;
  padding-right: 100px;
  padding-bottom: 80px;
  background-color: #b2ebf2;
  margin-top: 80px;
  position: relative;
  left: 190px;
  border-radius: 70px;
}
.form2{
  padding-top: 50px;
  padding-left: 100px;
  padding-right: 100px;
  padding-bottom: 80px;
  background-color: #b2ebf2;
  margin-top: 40px;
  position: relative;
  left: 190px;
  border-radius: 70px;
}
.big-div{
padding-left: 200px;
padding-right: 500px;
}
.main-img{
height: 450px;
width: 100%;
position: absolute;
top: 0;
left: 0;
right:0;
}

.heading1{
font-size: 50px;
font-family: 'Crimson Text', serif;
margin-right: 10px;
position: relative;
left: 200px;
top: 480px;
color: black;
padding-bottom: 50px;
padding-top: 50px;

}

.selectt {
padding: 15px;
display: none;
margin-left: 50px;
width: 60%;
  }

.name{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.input[type=text], input, textarea, select, option{
width: 50px;
box-sizing: border-box;
border: 2px solid black;
border-radius: 4px;
font-size: 14px;
background-color: white;
background-position: 10px 10px;
background-repeat: no-repeat;
padding: 10px 10px 11px 10px;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
background: transparent;
/* float: right; */
}

.input[type=text]:focus, input, textarea, select, option {
width: 50%;
}

.address{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.zipcode{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.email{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.phone{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.room-type{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.rooms{
font-family: 'Source Serif Pro', serif;
font-size: 25px;
}

.adults{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.children{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.check-in{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.check-out{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.payment{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.cash{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.card{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.food{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.extra-charges{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.total{
font-family: 'Source Serif Pro', serif;
font-size: 23px;
}

.wrapper {

    /* Keeping the Text in the
       center of the Screen */
    display: flex;
    justify-content: center;
}

.typewriter h1 {
/* Content is not revealed
   until the animation */
overflow: hidden;
/* Keeps the content on a single line */
white-space: nowrap;
/* Gives that scrolling effect
   as the typing happens */
margin-top: 100px;
/* Typing Effect Animation */
animation: typing 8s steps(100, end);
animation-delay: 0.3s;

position: absolute;
 top: 360px;
 left: 540px;
font-family: 'Dancing Script', cursive;
color: #f0a500;
font-size: 35px;
}
.copyright{
  background-color: #AAAAFF;
  left: 0;
  right: 0;
  position: absolute;
  display: block;
  margin-top: 80px;
  text-align: center;
  width: 100%;
}
/* Typing Effect on Website Loading */
@keyframes typing {
    from {
        width: 0
    }
    to {
        width: 100%
    }
}

.availability{
  border: 1px solid;
  padding: 10px;
  font-size: 23px;
  color: white;
  background-color: black;
  text-decoration: none;
  position: relative;
  left: 675px;
  top: 15px;
}

.availability:hover{
  background-color: white;
  color: black;
  border-color: black;
  font-size: 28px;
}
.delete{
  width: 100%;
  top:90px;
  height: 400px;
  background-color: white;
}

.update{
  width: 100%;
  top:90px;
  height: 400px;
  background-color: white;
}

.reserve{
  width: 250px;
  radius: 20px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black ;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
  position: relative;
  top: 60px;
  left: 200px;
}

.reserve:hover {
  background-color: gray;
  color: black;
 }

.reserve:active {
  background-color: #226597;
  box-shadow: 0 5px #d9e4dd;
  transform: translateY(4px);}

</style>

<script type="text/javascript">
function computePayment(){
  var roomtype = document.querySelector('#roomtype').value;
  var rooms = parseInt(document.getElementById('rooms').value);
  var adults = parseInt(document.getElementById('adults').value);
  var payment;

  if(adults>2){
    if(roomtype='Luxe Double Room'){
      payment= (9245 + 1650*adults)*rooms;
    }else if(roomtype='Standard'){
      payment= (6245 + 1350*adults)*rooms;
    }else if(roomtype='Superior King') {
      payment= (7245 + 1750*adults)*rooms;
    }else if(roomtype='Superior Double Room'){
      payment= (8245 + 1850*adults)*rooms;
    }else if(roomtype='Premier Luxe Double Room'){
      payment= (10245 + 2350*adults)*rooms;
    }
  }else{
    if(roomtype='Luxe Double Room'){
      payment= (9245)*rooms;
    }else if(roomtype='Standard'){
      payment= (6245)*rooms;
    }else if(roomtype='Superior King') {
      payment= (7245)*rooms;
    }else if(roomtype='Superior Double Room'){
      payment= (8245)*rooms;
    }else if(roomtype='Premier Luxe Double Room'){
      payment= (10245)*rooms;
    }
  }
  payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
document.getElementById('payment').innerHTML = "Total amount = Rs. " +payment;

$(document).ready(function () {
    createCookie("gfg", payment , "10");
});

// Function to create the cookie
function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}

}

</script>
<script>


// validation for name
function validateForm() {
  var x = document.forms["myform1"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}


// validation for address
function validateaddress() {
  var x = document.forms["myform1"]["address"].value;
  if (x == "") {
    alert("Address must be filled out");
    return false;
  }
}


// Validation for zipcode
function CheckIndianZipCode(b)
   {
       var a = /(^\d{6}$)/;
       if (a.test(b))
       {
           alert("Your Entered Zip Code Is Valid.")
       }
       else
       {
           alert("Your Entered Zip Code Is Not Valid.")
       }
   };

// Validation for email
function validatemail() {
  var x = document.forms["myform1"]["email"].value;
  if (x == "") {
    alert("Email-id must be filled out!");
    return false;
  }
}


function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    alert("Please enter only Numbers.");
    return false;
  }

  return true;
}


function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile no. is not valid, Please Enter 10 Digit Mobile no.");
    return false;
  }

}


// validation for checkin
function validateCheckin() {
  var x = document.forms["myform1"]["Idate"].value;
  if (x == "") {
    alert("Checkin date must be added");
    return false;
  }
}


// validation for checkout
function validateCheckout() {
  var x = document.forms["myform1"]["Odate"].value;
  if (x == "") {
    alert("Checkout date must be added");
    return false;
  }
}


// Validation for email
function validatemailid() {
  var x = document.forms["myform2"]["email"].value;
  if (x == "") {
    alert("Email-id must be filled out!");
    return false;
  }
}

// validation for reason
function validateReason() {
  var x = document.forms["myform2"]["address"].value;
  if (x == "") {
    alert("Reason must be filled out");
    return false;
  }
}

  // Validation for email
  function validatemailid() {
    var x = document.forms["myform3"]["email"].value;
    if (x == "") {
      alert("Email-id must be filled out!");
      return false;
    }
  }



</script>
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
    <div class="links">
      <a href="#delete" class="hlink" style="padding-right:20px;padding-left:90px;"> Cancel Booking</a>
      <a href="#update" class="hlink" style="padding-right:20px;">Change Booking</a>

    </div>
    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <a href="#bform" class="btn">BOOK NOW</a>
    </div>
    </div>
  </div>
<div class="wrapper">
    <div class="typewriter">
        <h1>There's magic in the atmosphere</h1>
    </div>
</div>

<img class="main-img" src="https://i.pinimg.com/originals/21/0e/eb/210eeb61699474897e147a110c3615b8.jpg" alt="Stay">

<h1 class="heading1"> Book Your Stay. </h1>

<div class="big-div">
<form id="bform" class="form" name="myform1" method="POST" action="bill.php" onsubmit="return validateForm() || validateaddress() || validateCheckin() || validateCheckout() ||  ValidateNo() || validatemail();">
<div class="name">
  <label for="name">Name:</label>
  <input type="text" name="fname" value="" placeholder="Your fullname" style="float:right;">
  <br><br>
</div>
<br>
<div class="address">
  <label for="address">Address:</label>
  <textarea  name="address" rows="4" cols="50" style="float:right;"></textarea><br><br>
</div>
<br><br> <br>
<div class="zipcode">
  <label class="label-text" for="zipcode">Zip-code:</label>
  <input type="number" id="txtZipCode" value="zcode" name="zcode" style="float:right;"><br><br>
</div>
<br>
<div class="email">
  <label class="label-text" for="email">E-mail:</label>
  <input type="mail" value="" name="email" placeholder="Email" style="float:right;"><br> <br>
</div>
<br>
<div class="phone">
  <label class="label-text" for="phone">Phone:</label>
  <input type="tel" id="txtPhoneNo" onkeypress="return isNumber(event)" name="phone" maxlength="10" placeholder="Phone" style="float:right;"> <br><br>
</div>
<br>
<div class="room-type">
  <label for="Room type">Room type:</label>
  <select name="roomtype" id="roomtype" style="float:right;" onchange="computePayment()">
    <option value="Standard">Standard</option>
    <option value="Superior King">Superior King</option>
    <option value="Superior Double Room">Superior Double Room</option>
    <option value="Luxe Double Room" selected>Luxe Double Room</option>
    <option value="Premier Luxe Double Room">Premier Luxe Double Room</option>
  </select><br><br>
</div>
<br>
<div class="rooms">
  <label for="rooms">Rooms:</label>
  <input type="number"  id="rooms" value="1" name="rooms" min="1" style="float:right;" onchange="computePayment()" onkeypress="javascript:return isNumber(event)"> <br><br>
</div>
<br>
<div class="adults">
  <label for="adults">Adults:</label>
  <input type="number" id="adults" value="1" name="adults" min="1" style="float:right;" onchange="computePayment()" onkeypress="javascript:return isNumber(event)"> <br> <br>
</div>
<br>
<div class="children">
  <label for="children">Children:</label>
  <input type="number" value="0" name="children" style="float:right;" onkeypress="javascript:return isNumber(event)"> <br><br>
</div>
<br>
<div class="check-in">
  <label for="Idate">Check-In:</label>
  <input type="date"  name="Idate" style="float:right;"> <br> <br>
</div>
<br>
<div class="check-out">
  <label for="Odate">Check-Out:</label>
  <input type="date"  name="Odate" style="float:right;"> <br> <br>
</div>
<br>

<div class="payment">
 <label for="payment">Payment Mode:</label> <br>
<input class="radio1" type="radio" name="colorRadio" value="Cash" style="float:left; padding:0;"> Cash
<input class="radio2" type="radio" name="colorRadio" value="Card" style=" padding:0;">Card
</div><br>

<br><br>
<div class="food">
  <label for="food">Food:</label>
  <select name="food" style="float:right;">
    <option value="only Breakfast" selected>Only Breakfast</option>
    <option value="Only Lunch">Only Lunch</option>
    <option value="Only Dinner">Only Dinner</option>
    <option value="Breakfast + Lunch">Breakfast + Lunch</option>
    <option value="Lunch + Dinner">Lunch + Dinner</option>
    <option value="Dinner + Breakfast">Dinner + Breakfast</option>
    <option value="Breakfast + Lunch + Dinner">Breakfast + Lunch + Dinner</option>
  </select><br><br>
</div>
<br>

<div class="extra-charges">
  <p>*Extra charges would be applied as per food selection*</p>
</div>
<h2  id="payment"></h2>

<div class="container">
    <div class="row">
        <div class="col-md-3" >
            <br>
              <h2>Signature:</h2>

            <div id="canvasDiv"></div>
            <br>
            <button type="button"  id="reset-btn" style="width: 80px; height: 30px; font-weight:bold; margin-left:220px;">Clear</button>
            <button type="button"  style="width: 80px; height: 30px; font-weight:bold;" id="btn-save">Save</button>
        </div>
            <input type="hidden" id="signature" name="signature" style="width: 50px;">
            <input type="hidden" name="signaturesubmit" value="1">

    </div>
</div>
<div class="submit-div" >
   <button class="reserve" id="signatureform" type="submit" name="book" style="float:center; padding:10px 10px;">Confirm your Booking! </button>
</div>
</form>
<br><br><br><br><br><hr><br>



</div>


<div class="delete" id="delete">

  <div class="big-div">
    <h1>Cancel your Stay.</h1>
  <form id="bform" class="form2" name="myform2" method="POST" action="reservation.php">
    <div class="zipcode">
      <label class="label-text" for="zipcode">Booking ID:</label>
      <input type="number" id="txtZipCode" value="zcode" name="id" style="float:right;"><br><br>
    </div>
  <div class="email">
    <label class="label-text" for="email">E-mail:</label>
    <input type="mail" value="" name="email" placeholder="Email" style="float:right;"><br> <br>
  </div>
  <br>

    <div class="address">
      <label for="address">Reason:</label>
      <textarea  name="address" rows="4" cols="50" placeholder="Reason for cancellation" style="float:right;"></textarea><br><br>
    </div>
    <br><br> <br>


  <div class="submit-div" >
     <button class="reserve" type="submit" name="delete" style="float:center; padding:10px 10px;">Cancel your Booking! </button>
  </div>
  </form>
  <br><br><br><br><br><hr><br><br><br><br><br>
</div>


<div class="update" id="update">

  <div class="big-div">
    <h1>Change your booking information.</h1>
  <form id="bform" class="form1" name="myform3" method="POST" action="update.php" onsubmit= "validatemailid();">
    <div class="zipcode">
      <label class="label-text" for="zipcode">Booking ID:</label>
      <input type="number" id="txtZipCode" value="zcode" name="id" style="float:right;"><br><br>
    </div>
  <div class="email">
    <label class="label-text" for="email">E-mail:</label>
    <input type="mail" value="" name="email" placeholder="Email" style="float:right;"><br> <br>
  </div>
  <br>

    <div class="address">



        <div class="rooms">
          <label for="rooms">Rooms:</label>
          <input type="number" value="1" name="rooms" min="1" style="float:right;" onkeypress="javascript:return isNumber(event)"> <br><br>
        </div>
      </div>



    <div class="payment">
     <label for="payment">Payment Mode:</label> <br>
    <input class="radio1" type="radio" name="colorRadio" value="Cash" style="float:left; padding:0;"> Cash
    <input class="radio2" type="radio" name="colorRadio" value="Card" style=" padding:0;">Card
    </div><br>


  <div class="submit-div" >
     <button class="reserve" type="submit" name="update" value="" style="float:center; padding:10px 10px;">Change your Booking! </button>
  </div>
  </form>

</div>


<div class="copyright">
<div class="container-fluid">
  <a class="footer-link" href="https://www.facebook.com/" title="GO TO my Facebook profile"><i class="social-icon fab fa-facebook-f"></i></a>
  <a class="footer-link" href="https://www.gmail.com/" title="GO TO my Gmail"> <i class="social-icon fas fa-envelope"></i></a>
  <a class="footer-link" href="https://www.instagram.com/" title="GO TO my Instagram profile">  <i class="social-icon fab fa-instagram"></i></a>
  <a class="footer-link" href="https://twitter.com/" title="GO TO my Twitter profile">  <i class="social-icon fab fa-twitter"></i></a>

  <p>All Rights Reserved. © Copyright 2020 Ocean Breeze Beach Resort.</p>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }

        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#signature");
            anchor.val(img);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);


        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })

</script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>
