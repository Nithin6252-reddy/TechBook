<?php

  $message_sent = false;
  if(isset($_POST['Email']) && $_POST['Email'] != ''){

    if( filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){

      $userName = $_POST['UName'];
      $userEmail = $_POST['Email'];
      $messageSubject = $_POST['subject'];
      $message = $_POST['msg'];

      
      $body = "";

      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "message: ".$message. "\r\n";

      $message_sent = true;

    }

   

  }


?>


<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TechBooks</title>
</head>
<body>

<nav>
  <div class="logo" data-aos="zoom-out-down">
      <h1>Tech<span>Books</span></h1>
      <p>Better place for learning</p>
  </div>

  <div class="main-nav">
    <ul>
        <li data-aos="zoom-in"><a href="#nav">Home</a></li>
        <li data-aos="zoom-in"><a href="#about">About Us</a></li>
        <li data-aos="zoom-in"><a href="#category">Category</a></li>
        <li data-aos="zoom-in"><a href="explorebooks.php">ExploreBooks</a></li>
        <li data-aos="zoom-in"><a href="#contact">Contact Us</a></li>
    </ul>
  </div>

  <?php

  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
  {
    echo "
    <div class='user'>
    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
    </div>
    ";
  }
  else
  {
     echo "
    <div class='sign-in-up'>
    <a href = 'login.php'>
    <button type='button'>LOGIN</button>
    </a>
    <a href='login.php'>
    <button type= 'button'>REGISTER</button>
    </a>
    </div>
     
     ";
  }


  ?>

<div class="cart-btn">
  <?php
  $count = 0;
  if(isset($_SESSION['cart']))
  {
    $count = count($_SESSION['cart']);
  }

  ?>
<a href="mycart.php">Mycart (<?php echo $count; ?>)</a>
</div>


</nav>

<header>
<div class="slider">
    <div class="slide">
        <div>
            
            <h1 data-aos="zoom-in">Welcome To Tech<span data-aos="zoom-in">Books</span></h1>
            <p data-aos="zoom-in">“If you don’t like to read, you haven’t found the right book.” </p>
            <div class="slider-btn"  data-aos="zoom-in">
              <a href="login.php">
              <button>Get Started</button>
              </a>
            </div>
        </div>
    </div>
</div>
</header>

<!-----------------------------------------------Menu-section------------------------------------>
<section class="container menu-container">
    <h1>Pick up your book of our menu</h1>
    <div class="menu">
        <div class="left-menu">
            <div class="top-menu">
                <div class="inner-top-menu">
                    <img data-aos="flip-up" src="./images/java-1.jpg" alt="" height="235px">
                    <p data-aos="zoom-in">Computer programming language Java is not easy to understand. It takes lot of time and practice to understand the complex programming language. But this book takes an interactive and fun approach for better understanding of different fundamentals of Java. The book offers multi-sensory and fun learning experience for new programmers, so they can easily pick up the new language.</p>
                </div>
                <a data-aos="slide-left" href="explorebooks.php" class="btn">Explore More &#10132;</a>
            </div>
            <div data-aos="zoom-out" class="bottom-menu">
                <p>Please, no matter how we advance technologically, please don't abandon the book. There is nothing in our material world more beautiful than the book.</p>
              
            </div>
        </div>

        <div class="right-menu">
            <div data-aos="flip-left" class="card1">
              <img src="./images/c++3.jpg" alt="">
            </div>
            <div data-aos="flip-left" class="card2">
            <img src="./images/DSA-2.jpg" alt="">
            </div>
            <div data-aos="flip-left" class="card3">
            <img src="./images/React-1.jpg" alt="">
            </div>
            <div  data-aos="flip-left" class="card4">
            <img src="./images/Nodejs-2.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-------------------------------------------About-section--------------------------------->
<section class="container about-container" id="about">
    <h1 class="h11"  data-aos="zoom-in">About Us</h1>
    <div class="About">
        <div class="left-about-section">
            <div class="card1"  data-aos="zoom-in-right">
                <img src="./images/id.jpg" alt="" height="50px" width="50px">
                <h1>Member Card </h1>
                <p>To get the early access for new arrivals of books you can take the member card so that there will be no chanes of missing new updates</p>
            </div>
            <div class="card2" data-aos="zoom-in-left">
                <img src="./images/books.jpg" alt="" height="50px" width="50px">
                <h1>Up to date books</h1>
                <p>The books which we provide on this platform are up to date if you feel that the author published new edition you can access it from here.</p>
            </div>
            <div class="card3" data-aos="zoom-in-right">
                <img src="./images/reading book.jpg" alt="" height="50px" width="50px">
                <h1>Free books</h1>
                <p>The best thing about this website is that maximun number of books can be dowloaded for free but still there are some premium books which you can purchase.</p>
            </div>
            <div class="card4" data-aos="zoom-in-left">
                <img src="./images/medal.jpg" alt="" height="50px" width="50px">
                <h1>Quality books</h1>
                <p>We provide you the best quality books online for free. so sit back and get access to best books around you.</p>
            </div>
        </div>

        <div class="right-about-section"  data-aos="flip-right">
            <img src="./images/about.jpg" alt="">

        </div>
    </div>
</section>


<!-----------------------------------------Our-Category------------------------------------->
<section class="container category-container" id="category">
<h1 data-aos="zoom-out-down">Our Category</h1>
    <div class="category">
        <div class="category-wrap">
            <div class="card1" data-aos="flip-up">
              <a href="explorebooks.php"><img src="./images/web-d.jpg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-down">
            <a href="explorebooks.php"><img src="./images/DS.png" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-up">
            <a href="explorebooks.php"><img src="./images/Ad.jpg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-down">
            <a href="explorebooks.php"><img src="./images/ethical.jpg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-up">
            <a href="explorebooks.php"><img src="./images/frontend.jpg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-down">
            <a href="explorebooks.php"><img src="./images/backend.jpeg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-up">
            <a href="explorebooks.php"><img src="./images/pyhton-2.jpg" alt="" height="255px" width="245px"></a>
            </div>
            <div class="card1" data-aos="flip-down">
            <a href="explorebooks.php"><img src="./images/React-1.jpg" alt="" height="255px" width="245px"></a>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------News-letter-section---------------------------------------->
<section class="News">
    <div class="main-section">
        <div class="sub-section" data-aos="zoom-in">
            <div class="top-section">
                <div class="inner-top-heading-section">
                    <h1>Subscribe to newsletter</h1>
                </div>
                <div class="inner-top-info-section">
                    <span>Free ebooks  </span>
                    <span>Free Ui Kits  </span>
                    <span>Free designs </span>
                </div>
            </div>

            <form action="index.php" method="POST">
              <?php
             
              ?>

            <div class="bottom-section">
                <div class="form-section">
                    <input type="email" name="email" placeholder="Enter your email Address" required>
                </div>
                <div class="button-1">
                    <input type="submit" name="subscribe" value="subscribe" style="background: transparent; cursor: pointer; border: none; outline: none; font-size: 15px; ">
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

<!------------------------------------------------clients-section------------------------------->
<section class="client">
      <div class="container">
      <h1>Testimonials</h1>
        <div class="client-box">
          <div class="card" data-aos="flip-right">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
              asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Reiciendis, nam!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/user-1.png" alt="" />
            <h2>Sean Parker</h2>
          </div>

          <div class="card" data-aos="zoom-in">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
              asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Reiciendis, nam!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/user-2.png" alt="" />
            <h2>Mike Smith</h2>
          </div>

          <div class="card" data-aos="flip-left">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
              asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Reiciendis, nam!
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="./images/user-3.png" alt="" />
            <h2>Mabel Joe</h2>
          </div>
        </div>
      </div>
    </section>

    <!--------------------------------------------Contactus-section--------------------------------->
    <section class="contact" id="contact">
        <div class="contact-head">
          <h1 class="contact-heading" data-aos="zoom-in">Contact Us</h1>

          <div class="contact-wrapper">
            <div class="card1" data-aos="zoom-out-down">
              <img
                src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/phone-512.png"
                alt=""
              />
              <h1>Call Us On</h1>
              <h6>+91 9048930201</h6>
            </div>
            <div class="card1" data-aos="zoom-out-up">
              <img
                src="https://www.nicepng.com/png/detail/518-5185628_email-icon-symbol-of-email-black.png"
                alt=""
              />
              <h1>Email Us On</h1>
              <h6>TechBooks@company.com</h6>
            </div>
            <div class="card1" data-aos="zoom-out-down">
              <img
                src="https://i.pinimg.com/736x/94/39/d2/9439d28c2485b8856f5994c4f261287b.jpg"
                alt=""
              />
              <h1>Visit Office</h1>
              <h6>99.51 Eden Gardens Kolkata</h6>
            </div>
          </div>

          <?php
          if($message_sent):
          ?>
            
            <div class="contact-box" style="width: 400px; height: 100px; margin-top: 2rem; background-color: #78f26b;">
            <h3 style="margin-top: 2rem; color: black; font-weight: 500; font-size: 2rem; text-align: center;">Thanks, We'll be in Touch</h3>
            </div>


          <?php
          else:
          ?>

          <form action="index.php" method="POST">
            <div class="input-wrap">
            
              <input type="text" placeholder="Your Name" name="UName" data-aos="zoom-in">
              <input type="email" placeholder="Your Email" name="Email" data-aos="zoom-in">
            </div>
            <div class="input-wrap-2">
              <input type="text" placeholder="Your Subject" name="subject" data-aos="zoom-in">
              <textarea  cols="30" rows="10" placeholder="Your Message"  data-aos="zoom-in"  name="msg" ></textarea
              >
          </div>
            <div class="btn-wrapper" data-aos="flip-right">
              <button class="btn-primary" name="btn-send">Send Message</button>
            </div>
            <?php
            endif;
            ?>
          </form>
        </div>
      </section>

    <!-----------------------------------------footer-section-------------------------------------->
    <section class="footer">
        <div class="container" data-aos="zoom-in"=>
            <div class="footer-wrapper">
                <div class="card-1">
                    <h2>Download Our App</h2>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="logos">
                        <img src="./images/play-store.png" alt="">
                        <img src="./images/app-store.png" alt="">
                    </div>
                </div>

                <div class="card-2">
                    <h1>Tech <span>Books</span></h1>
                    <p>Better place for learning</p>
                    <span>Our Purpose is To Sustainably Make the pleasure and Benefits of Sports Accessible to the Many</span>
                </div>

                <div class="card-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Join Affiliate</a></li>
                    </ul>
                </div>

                <div class="card-3">
                    <h3>Follow Us</h3>

                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h4>Copyright © 2021, All Right Reserved | Tech Books</h4>
    </section>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
</body>
</html>


