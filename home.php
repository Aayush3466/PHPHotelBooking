<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /><!-- I have used this to add the touch functionality while using 
      this website on my mobile -->

   <!-- font awesome cdn link  --><!--  helps you automate accessibility support more easily so your icons work for the most people possible -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">SYDNEY HOTEL</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/standard_twin.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/executive_twin.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/superior_suite.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
          <div class="swiper-slide slide" style="background:url(images/delux_suite.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
          <div class="swiper-slide slide" style="background:url(images/executive_suite.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
          <div class="swiper-slide slide" style="background:url(images/presidential_suite.jpg) no-repeat">
            <div class="content">
               <span>stay awhile</span>
               <h3>make your stay worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      

     

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img1.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Our hotel booking company provides better facilities and amenities to our customers around the world. We have a wide range of hotels that cater to different needs and budgets, so you can find the perfect place to stay no matter where you're going. We also offer a variety of deals and discounts on hotel rooms, so you can save even more money on your next vacation.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/standard_twin.jpg" alt="">
         </div>
         <div class="content">
            <h3>STAY AWHILE</h3>
            <p>Get Better Experience</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/executive_suite.jpg" alt="">
         </div>
         <div class="content">
            <h3>STAY AWHILE</h3>
            <p>Get Better Experience</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/presidential_suite.jpg" alt="">
         </div>
         <div class="content">
            <h3>STAY AWHILE</h3>
           <p>Get Better Experience</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

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
         <h3>contact info</h3>
         <a href="mailto:ayushadhikari3466@gmail.com?subject=Subject%20Here" target="blank"> <i class="fas fa-envelope"></i>ayushadhikari3466@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kathmandu, India </a>
      </div>

      

   </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>