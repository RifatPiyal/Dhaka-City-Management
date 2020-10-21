<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Dhaka City
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a class="navbar-brand">🌅 Dhaka City</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
<!--                <a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a>-->
             <a href="https://www.google.com/maps/place/Dhaka/@23.7805733,90.2792382,11z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.810332!4d90.4125181?hl=en" target="_blank">Dhaka-1206</a>
              </li>
              <li class="nav-item">
                <a class="" href="tel:+8801000000000">Contract Us: +8801000000000</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
