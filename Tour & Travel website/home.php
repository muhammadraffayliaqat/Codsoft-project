<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header sec start -->
   <section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
   </section>
    <!-- header sec ends -->

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url(image/heading-1.jpg)no-repeat">
                   <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>travel around the world</h3>
                  <a href="package.php" class="btn">discover more</a>
                   </div> 
                </div>

                <div class="swiper-slide" style="background:url(image/heading-2.jpg)no-repeat">
                   <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
                   </div> 
                </div>

                <div class="swiper-slide" style="background:url(image/heading-3.jpg)no-repeat">
                   <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
                   </div> 
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
     <!-- home section end -->

    <!-- service section starts -->
    <section class="services">
   <h1 class="heading-title">our services</h1>
   <div class="box-container">

   <div class="box">
    <img src="image/icon-1.png" alt="" />
    <h3>adventure</h3>
   </div>

   <div class="box">
   <img src="image/icon-2.png" alt="" />
    <h3>tour guide</h3>
   </div>

   <div class="box">
   <img src="image/icon-3.png" alt="" />
    <h3>trekking</h3>
   </div>

   <div class="box">
   <img src="image/icon-4.png" alt="" />
    <h3>camp fire</h3>
   </div>

   <div class="box">
   <img src="image/icon-5.png" alt="" />
    <h3>off road</h3>
   </div>

   <div class="box">
   <img src="image/icon-6.png" alt="" />
    <h3>camping</h3>
   </div>

   </div>
    </section>
    <!-- service section end -->
    
    <!-- home about section starts -->
   <section class="home-about">
    
     <div class="image">
        <img src="image/about-img.jpg" alt="about">
     </div>
     
     <div class="content">
        <h3>about us </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Consectetur vero quas quae voluptates pariatur dolore
              maxime quo explicabo corrupti quod doloribus placeat suscipit,
             modi reiciendis cupiditate porro, vitae iusto ad.</p>
             <a href="about.php" class="btn">read more</a> 
     </div>

   </section>
    <!-- home about section ends -->

    <!-- home about packages section starts -->

    <section class="home-packages">

      <h1 class="heading-title">our packages</h1>

      <div class="box-container">

      <div class="box">
        <div class="image">
            <img src="image/package-img-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Optio magni!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
            <img src="image/package-img-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Optio magni!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
            <img src="image/package-img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Optio magni!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      </div>
      <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <!-- home about packages section ends -->

     <!-- home offer section start -->

     <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus explicabo esse distinctio, aspernatur dolores
                 vero perspiciatis voluptatum qui facilis mollitia!</p>
            <a href="book.php" class="btn">book now</a>     
        </div>
     </section>
      <!-- home offer section end -->














<!-- footer section start -->
<section class="footer">
   <div class="box-container">
    <div class="box">
        <h3>quick  links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
        <a href="#"><i class="fas fa-envelope"></i>gostbaba123@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>lahore, pakistan -52000</a>
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>
   </div> 
   <div class="credit">created by <span>rL . web developer</span> | all right reserved!</div>
</section>
<!-- footer section end -->
<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- js file link  -->
<script src="script.js"></script>

</body>
</html>