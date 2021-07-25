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


  //echo '<script type="text/javascript">alert("Congratulations!! Booking Successful!! \nYour Booking ID is '.$id.' \nConfirmation mail is sent to your email");</script>';
    $stmt->close();
    $conn->close();
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Details</title>
  </head>
  <style media="screen">
body{
  background-image: url("images/billbg.jpg");
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
}
    th {
      text-align: left;
      font-weight: 900;
      font-size: 22px;
      padding-right: 35px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    td{
      font-weight: light;
      font-size: 22px;
    }
    .info{
      background-color: #b2ebf2;
      position: relative;
      border-radius: 70px;
      width: 800px;
      margin-left: 350px;
      padding-bottom: 100px;
    }
    table{
      margin-left: 200px;

    }

    h2, h3 {
      text-align: center;
      font-weight: bolder;
      color: white;
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
      top: 20px;
      left: 300px;
    }
    .reserve:hover {
      background-color: gray;
      color: black;
     }

    .reserve:active {
      background-color: #226597;
      box-shadow: 0 5px #d9e4dd;
      transform: translateY(4px);}
    a {
      color: white;
      font-weight: bolder;
    }
    a:link, a:visited, a:active{
      background-color: transparent;
      text-decoration: none;
    }
    }
  </style>
  <body>
    <h2>Congratulations, Booking Successful!!</h2>
    <h2>Booking Details</h2>
    <div class="info">
      <table>
        <tr>
          <th>Booking ID:</th>
          <td><?php echo "$id" ?></td>
        </tr>
        <tr>
          <th>Name:</th>
          <td><?php  echo "$fullName" ?></td>
        </tr>
        <tr>
          <th>Address:</th>
          <td><?php  echo "$address" ?></td>
        </tr>
        <tr>
          <th>Zipcode:</th>
          <td><?php  echo "$zcode" ?></td>
        </tr>
        <tr>
          <th>Email:</th>
          <td><?php  echo "$email" ?></td>
        </tr>
        <tr>
          <th>Phone:</th>
          <td><?php  echo "$phone" ?></td>
        </tr>
        <tr>
          <th>Room type:</th>
          <td><?php  echo "$roomtype" ?></td>
        </tr>
        <tr>
          <th>Rooms:</th>
          <td><?php  echo "$rooms" ?></td>
        </tr>
        <tr>
          <th>Adults:</th>
          <td><?php  echo "$adults" ?></td>
        </tr>
        <tr>
          <th>Child:</th>
          <td><?php  echo "$children" ?></td>
        </tr>
        <tr>
          <th>Checkin:</th>
          <td><?php  echo "$checkin" ?></td>
        </tr>
        <tr>
          <th>Checkout:</th>
          <td><?php  echo "$checkout" ?></td>
        </tr>
        <tr>
          <th>Payment mode:</th>
          <td><?php  echo "$payment" ?></td>
        </tr>

        <tr>
          <th>Food:</th>
          <td><?php  echo "$food" ?></td>
        </tr>

        <tr>
          <th>Payable amount:</th>
          <td>Rs. <?php  echo "$amount" ?></td>
        </tr>

        <tr>
          <th>Signature:</th>
          <td> <img src="signatures/<?php echo $id .'.png'  ?>" alt=""> </td>
        </tr>

      </table>
      <p style="font-weight: bold; text-align:center;">** You will receive confirmation mail shortly. **</p>
      <a href="reservation.php"><button class="reserve" type="button" name="back" style="padding:10px 10px;">OKAY!</button></a>

    </div>

  </body>
</html>
