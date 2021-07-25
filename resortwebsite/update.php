<?php

 // Database connection
 $conn = new mysqli("localhost","id15369435_root","?gaQgY<wt0Gfl/Ih","id15369435_customer");
 if(isset($_POST['update'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   $id = $_POST['id'];
   $email = $_POST['email'];
   $rooms = $_POST['rooms'];
   $payment = $_POST['colorRadio'];



  $sql = "UPDATE reservation SET payment='$payment', rooms='$rooms' WHERE booking_id='$id'";
  $conn->query($sql);

  $result=$conn->query("SELECT name, address, zcode, phone from reservation where booking_id='$id'");
}
// echo $conn -> error;die;
  // if ($conn->query($sql) === TRUE) {
  //   echo '<script type="text/JavaScript">
  //    alert("Booking details changed!!");
  //    </script>';
  // } else {
  //   echo "Error changing record: " . $conn->error;
  // }

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Updated Details</title>
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
    <h2>Your Personal and Updated details</h2>

    <?php while($row = $result->fetch_assoc()) { ?>
      <div class="info">


    <table>
      <th>Booking ID:</th>
      <td><?php echo "$id" ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php  echo $row['name'] ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php  echo $row['address'] ?></td>
    </tr>
    <tr>
      <th>Zipcode:</th>
      <td><?php  echo $row['zcode'] ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php  echo "$email" ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php  echo $row['phone'] ?></td>
    </tr>
    <tr>
      <th>Rooms:</th>
      <td><?php  echo "$rooms" ?></td>
    </tr>
    <tr>
      <th>Payment mode:</th>
      <td><?php  echo "$payment" ?></td>
    </tr>
    </table>
    <p style="font-weight: bold; text-align:center;">**Contact the resort if your details don't match. **</p>
    <a href="reservation.php"><button class="reserve" type="button" name="back" style="padding:10px 10px;">OKAY!</button></a>
      </div>

<?php } ?>
  </body>
</html>
