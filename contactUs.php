<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact Us </title>
    <link rel="stylesheet" href="contactUs.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php 
session_start();
?>
<div> <?php include ("navbar2.php") ?></div>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Shakti 404 Shakti Complex, Shakti 404,
                    2nd Floor, Shakti 404, Sarkhej - Gandhinagar Hwy, opp. New Gurudwara, Thaltej, Ahmedabad,
                    Gujarat 380054</div>
          
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 9825213051</div>
          
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">charity@gmail.com</div>
          
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <!-- <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p> -->
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
        <input type="textarea" placeholder="Enter your message">
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  <div class="sfooter">
        <?php include("footer.php") ?>
    </div>
</body>
</html>