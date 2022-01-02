<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style4.css">
    <title>Explorebooks</title>
</head>
<body>
<nav>
  <div class="logo" data-aos="zoom-out-down">
      <h1>Tech<span>Books</span></h1>
      <p>Better place for learning</p>
  </div>

  <div class="main-nav">
    <ul>
        <li data-aos="zoom-in"><a href="index.php">Home</a></li>
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
  <button type='button'><a href='login.php'>LOGIN</a></button>
  <button type= 'button'><a href='login.php'>REGISTER</a></button>
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
<!-------------------------------------------explore-section---------------------------------->
<section class="explore-section">
    <h1>Explore Section</h1>
<div class="hero">
      <div class="btn-box">
        <button id="btn-1" onclick="openWD()">Web Development</button>
        <button id="btn-2" onclick="openDSA()">
          Data structures & Algorithms
        </button>
        <button id="btn-3" onclick="openPL()">Programming Languages</button>
        <button id="btn-4" onclick="openAD()">Android Development</button>
        <button id="btn-5" onclick="openEH()">Premium Books</button>
      </div>


      <div class="content-wrapper">
        <div id="content-1" class="content">
          <div class="content-section">
            <div class="content-card">
                <img src="./images/HTML-2.jpg" alt="" width="255px" height="270px">
                <h2>Head First HTML</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./Books/head_first_html_css_xhtml.pdf">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/javascript-1.jpg" alt="" width="255px" height="270px">
                <h2>Javascript and Jquery</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/javascript and jquery">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/React-1.jpg" alt="" width="255px" height="270px">
                <h2>Full stack React.js</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/fullstack react">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/Nodejs-1.jpg" alt="" width="255px" height="270px">
                <h2>Learning Node.Js</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/nodejs development">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/pyhton-2.jpg" alt="" width="255px" height="270px">
                <h2>Python Crash Course</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/python crash course">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/javascript-3.jpg" alt="" width="255px" height="270px">
                <h2>Head First Javascript</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/python-8.jpg" alt="" width="255px" height="270px">
                <h2>Python Programming</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/python programming">Download</a></button>
                </div>
            </div>
            <div class="content-card">
                <img src="./images/Nodejs-3.jpg" alt="" width="255px" height="270px">
                <h2>Practical Node.Js</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/Practical Nodejs">Download</a></button>
                </div>
            </div>
          </div>
        </div>

        <div id="content-2" class="content">
          <div class="content-section">
            <div class="content-card">
            <img src="./images/DSA-1.jpg" alt="" width="255px" height="270px">
                <h2>Data Structures & Algorithms</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/Data Structures and Algorithms">Download</a></button>
                </div>
            
            </div>
            <div class="content-card">
            <img src="./images/DSA-2.jpg" alt="" width="255px" height="270px">
                <h2>Data Structures & Algorithms in Java</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/Data Structures and Algorithms in Java">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-3.png" alt="" width="255px" height="270px">
                <h2>Data Structures & Algorithms in Javascript</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/Data Structures and Algorithms with JavaScript">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-4.jpg" alt="" width="255px" height="270px">
                <h2>Data Structures & Algorithms in C</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/data structures and algorithms in c">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-5.jpg" alt="" width="255px" height="270px">
                <h2>The Algorithm Design Manual</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/algorithmic design manual">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-6.jpg" alt="" width="255px" height="270px">
                <h2>Algorithms By Robert Sedgiwick</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/algorithm design">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-7.jpg" alt="" width="255px" height="270px">
                <h2>CodeLess Data Structures & Algorithms</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/codeless data structures and algorithms">Download</a></button>
                </div>
            </div>
            <div class="content-card">
            <img src="./images/DSA-8.jpg" alt="" width="255px" height="270px">
                <h2>Data Structures & Algorithms In Python</h2>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <br>
                <div class="Dl-btn">
                <button class="download-btn"><i class="fa fa-download"></i><a href="./books/Data Structures and Algorithms Using Python">Download</a></button>
                </div>
            </div>
          </div>
        </div>

        <div id="content-3" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c++1.jpg" alt="" width="255px" height="270px">
                <h2>The C++ Programming Language</h2>
                <div class="price">
                <p>Price: Rs.599</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="The C++ Programming Language">
                <input type="hidden" name="Price" value="599">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/java-1.jpg" alt="" width="255px" height="270px">
                <h2>Head First Java for begginers By O'Relley</h2>
                <div class="price">
                <p>Price: Rs.499</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Head First Java for begginers By O'Relley">
                <input type="hidden" name="Price" value="499">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/javascript-1.jpg" alt="" width="255px" height="270px">
                <h2>Javascript and Jquery for Web development</h2>
                <div class="price">
                <p>Price: Rs.1050</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Javascript and Jquery for Web development">
                <input type="hidden" name="Price" value="1050">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/pyhton-2.jpg" alt="" width="255px" height="270px">
                <h2>Python Crash Course For Beginners</h2>
                <div class="price">
                <p>Price: Rs.1100</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Python Crash Course For Beginners">
                <input type="hidden" name="Price" value="1100">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/React-3.jpg" alt="" width="255px" height="270px">
                <h2>Learn React Hooks</h2>
                <div class="price">
                <p>Price: Rs.1000</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Learn React Hooks">
                <input type="hidden" name="Price" value="1000">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c++8.png" alt="" width="255px" height="270px">
                <h2>C++ For Dummies</h2>
                <div class="price">
                <p>Price: Rs.1050</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="C++ For Dummies">
                <input type="hidden" name="Price" value="1050">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/java-8.jpg" alt="" width="255px" height="270px">
                <h2>Java For Dummies</h2>
                <div class="price">
                <p>Price: Rs.499</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Java For Dummies">
                <input type="hidden" name="Price" value="499">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/javascript-2.jpg" alt="" width="255px" height="270px">
                <h2>Eloquent Javascript</h2>
                <div class="price">
                <p>Price: Rs.699</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Eloquent Javascript">
                <input type="hidden" name="Price" value="699">
                </div>
            </div>
            </form>
          </div>
        </div>

        <div id="content-4" class="content">
          <div class="content-section">
          <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-1.jpg" alt="" width="255px" height="270px">
                <h2>Head First Andriod Development</h2>
                <div class="price">
                <p>Price: Rs.1450</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Head First Andriod Development">
                <input type="hidden" name="Price" value="1450">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/java-8.jpg" alt="" width="255px" height="270px">
                <h2>Beginning Programming In Java</h2>
                <div class="price">
                <p>Price: Rs.850</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Beginning Programming In Java">
                <input type="hidden" name="Price" value="850">
                </div>
            </div>
            </form> 

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/java-7.jpg" alt="" width="255px" height="270px">
                <h2>Optimizing Java By James Gough And Chris Newland</h2>
                <div class="price">
                <p>Price: Rs.550</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Optimizing Java By James Gough And Chris Newland">
                <input type="hidden" name="Price" value="550">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-2.jpg" alt="" width="255px" height="270px">
                <h2>Android Development For Beginners</h2>
                <div class="price">
                <p>Price: Rs.1400</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Android Development For Beginners">
                <input type="hidden" name="Price" value="1400">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-3.jpg" alt="" width="255px" height="270px">
                <h2>Android Programming With Kotlin For Beginners</h2>
                <div class="price">
                <p>Price: Rs.999</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Android Programming With Kotlin For Beginners">
                <input type="hidden" name="Price" value="999">
                </div>
            </div> 
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-4.jpg" alt="" width="255px" height="270px">
                <h2>Head First Kotlin. A Brain Friendly Guide</h2>
                <div class="price">
                <p>Price: Rs.1599</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Head First Kotlin. A Brain Friendly Guide">
                <input type="hidden" name="Price" value="1599">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-5.jpg" alt="" width="255px" height="270px">
                <h2>Mastering Android Game Development</h2>
                <div class="price">
                <p>Price: Rs.1199</p>
                </div>    
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Mastering Android Game Development">
                <input type="hidden" name="Price" value="1199">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/AD-6.jpg" alt="" width="255px" height="270px">
                <h2>Andriod Security CookBook For Practical Knowledge</h2>
                <div class="price">
                <p>Price: Rs.888</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Andriod Security CookBook For Practical Knowledge">
                <input type="hidden" name="Price" value="888">
                </div>
            </div>
            </form>
          </div>
        </div>


        <div id="content-5" class="content">
          <div class="content-section">
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/EHacking-1.jpg" alt="" width="255px" height="270px">
                <h2>Hacking by Jon Ericson</h2>
                <div class="price">
                <p>Price: Rs.450</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Hacking by Jon Ericson">
                <input type="hidden" name="Price" value="450">
                </div>
            </div>
            </form>
            

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/EHacking-2.jpg" alt="" width="255px" height="270px">
                <h2>Basics of Hacking</h2>
                <div class="price">
                <p>Price: Rs.399</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Basics of Hacking">
                <input type="hidden" name="Price" value="399">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/EHacking-3.jpg" alt="" width="255px" height="270px">
                <h2>Hacking</h2>
                <div class="price">
                <p>Price: Rs.300</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Hacking">
                <input type="hidden" name="Price" value="300">
                </div>
            </div>
            </form>

            <form  action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/c++8.png" alt="" width="255px" height="270px">
                <h2>C++ for Dummies</h2>
                <div class="price">
                <p>Price: Rs.459</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="C++ for Dummies">
                <input type="hidden" name="Price" value="459">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/React-3.jpg" alt="" width="255px" height="270px">
                <h2>React Hooks</h2>
                <div class="price">
                <p>Price: Rs.299</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="React Hooks">
                <input type="hidden" name="Price" value="299">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/python-8.jpg" alt="" width="255px" height="270px">
                <h2>Python programming</h2>
                <div class="price">
                <p>Price: Rs.250</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Python programming">
                <input type="hidden" name="Price" value="250">
                </div>
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/python-7.jpg" alt="" width="255px" height="270px">
                <h2>Core Python Programming</h2>
                <div class="price">
                <p>Price: Rs.699</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Core Python Programming">
                <input type="hidden" name="Price" value="699">
                </div>
            </div>
            </form>
            
            <form action="manage_cart.php" method="POST">
            <div class="content-card">
            <img src="./images/java-6.webp" alt="" width="255px" height="270px">
                <h2>Think Java</h2>
                <div class="price">
                <p>Price: Rs.550</p>
                </div>
                <br>
                <div class="Dl-btn">
                <button type="submit" name="Add_To_Cart" class="download-btn"><i class="fa fa-shopping-cart"></i><a href="manage_cart.php">Add to cart</a></button>
                <input type="hidden" name="Item_Name" value="Think Java">
                <input type="hidden" name="Price" value="550">
                </div>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
</section>

<!--------------------------------------footer-section-------------------------------------->
<section class="footer">
        <div class="container">
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



    <script>
      var content1 = document.getElementById("content-1");
      var content2 = document.getElementById("content-2");
      var content3 = document.getElementById("content-3");
      var content4 = document.getElementById("content-4");
      var content5 = document.getElementById("content-5");
      var btn1 = document.getElementById("btn-1");
      var btn2 = document.getElementById("btn-2");
      var btn3 = document.getElementById("btn-3");
      var btn4 = document.getElementById("btn-4");
      var btn5 = document.getElementById("btn-5");

      function openWD() {
        content1.style.transform = "translatex(0)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "orange";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0.3s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openDSA() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(0)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "orange";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0.3s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openPL() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(0)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "orange";
        btn4.style.color = "black";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0.3s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0s";
      }
      function openAD() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(0)";
        content5.style.transform = "translatex(100%)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "orange";
        btn5.style.color = "black";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0.3s";
        content5.style.transitionDelay = "0s";
      }
      function openEH() {
        content1.style.transform = "translatex(100%)";
        content2.style.transform = "translatex(100%)";
        content3.style.transform = "translatex(100%)";
        content4.style.transform = "translatex(100%)";
        content5.style.transform = "translatex(0)";
        btn1.style.color = "black";
        btn2.style.color = "black";
        btn3.style.color = "black";
        btn4.style.color = "black";
        btn5.style.color = "orange";
        content1.style.transitionDelay = "0s";
        content2.style.transitionDelay = "0s";
        content3.style.transitionDelay = "0s";
        content4.style.transitionDelay = "0s";
        content5.style.transitionDelay = "0.3s";
      }
    </script>
</body>
</html>