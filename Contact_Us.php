<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
     
      $request = " insert into contact(name, email, phone, message) values('$name','$email','$phone','$message')";
      mysqli_query($connection, $request);

      header('location:contact_Us.php'); 

   }else{
      echo '';
   }

?>







<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styless.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="contact_Us.php">contact_Us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
   



<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
               <div>
            <div class="container">
                <div class="contact-parent">
                    <div class="contact-child child1">
                        <p>
                           
                    </div>

                    <div class="contact-child child2">
                        <div class="inside-contact">
                            <h2>Contact Us</h2>
                            <h3>
                               <span id="confirm">
                            </h3>
                            <form action="contact_Us.php" method="post" class="book-form">
                            <p>Name </p>
                            <input id="txt_name" type="text" name="name" Required="required">

                            <p>Email </p>
                            <input id="txt_email" type="text" name="email"  Required="required">

                            <p>Phone </p>
                            <input id="txt_phone" type="text" name="phone"  Required="required">

                            <p>Message </p>
                            <textarea id="txt_message" name="message" rows="4" cols="20"  Required="required" ></textarea>
                            
                            <input type="submit" value="submit" id="btn_send" name="send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    		
           
    		</div>
		</div>
    </div>
    
</section>
    



<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>