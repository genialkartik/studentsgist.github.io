<?php
$conn = mysqli_connect("localhost", "root", "", "studentsgist" );
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Corner</title>
    <link href='css\header.css' rel='stylesheet' type='text/css'>
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css" />
    <link rel="stylesheet" href="css/template.css">
    <script src="javascript/template.js"></script>
    <script src="javascript/indexjs.js"></script>
  </head>
  <body>
    <!--Header -->
    <div class="main-headerr">
        <div class="inner-header">
            <h1>STUDENT<span style="opacity: 1;color:white;">HUB</span></h1>
            <div class="search-container">
            <form>
            <input type="text" placeholder="Search here"  id="searchtext" >
            <!-- <input type="submit" id="mybtn" value="<img src='searchh.png'>"> -->
            <input type="image" src="graphics\searchh.png" alt="Submit" width="48" height="48" id="mybtn">
            </form>
            </div>


            <ul class="navigation">
                <li><a><img src="graphics\cart-logo.png"></a></li>
                <li><a href="ad-upload.php">SELL</a></li>
                <li><a>MY ORDERS</a></li>
                <li><a >MY ACCOUNT</a></li>
                <li><a>Sign In/Up</a></li>

            </ul>
        </div>
    </div>


<!--Product list container -->

<div class="template-container" id="template-container-id">
  <div id="template-inner-container">

    <!--Product list templates-->

    <?php
    $i = 1;
    while ($i < 9) {
    $qry = "SELECT * FROM SGDATABASE where adid=$i";
    $result = mysqli_query($conn, $qry) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    ?>

  <a href="product-detail.php?clicked=<?php echo $row['adid'];?>">
    <div id="template">

      <h3><?php echo $row['adtitle'] ?></h3>
      <div id="product-images">
          <div class="product-image">
            <img class="pro-img" src="<?php echo $row['image1'] ?>" alt="">
          </div>
      </div>
      <div id="product-detail">
        <span class="tags" id="offpri">OFFER PRICE: </span>
        <span class="tags" id="offer-price">Rs.<?php echo $row['adop'] ?></span>
        <br>
        <span class="tags" id="marpri">Market Price: </span>
        <span class="tags" id="market-price">Rs. <?php echo $row['admp'] ?> </span>
        <span class="tags" id="savpri"> &nbsp;&nbsp;&nbsp;(Save: </span>
        <span class="tags" id="saving-price">Rs. <?php echo $row['admp']-$row['adop'] ?></span>
        <span class="tags" id="savpri">)</span>
        <div class="foot">
          <br>
          <span id="place">Phagwara, Jalandhar</span>
          <span id="upload-time">15 Aug 2019</span>
        </div>
      </div>
    </div>
  </a>

  <?php
    $i++;
    }
   ?>
  </div>
  </div>
  <br><br>

<!--Footer -->
  <div id="footer">
      <div id="footer-content">
          <div id="footer-section">
              <h1 id="logo-text"><span>Student</span> Gist</h1>
              <div id="footer-about-sg">
                <p>When you shop online for books thencheck
                  for ongoing deals for extra discounts & offers,
                  you can get an access to a number of titles and publishers.
                </p>
              </div>
              <div id="contact">
                  <span><i class="fas fa-phone">&nbsp; 8427888943</i></span>
                  <span><i class="fas fa-envelope">&nbsp; info@studentgist.com</i></span>
                </div>
                <div id="socials">
                  <a href="#"><img src="graphics/facebook.png" ></a>
                  <a href="#"><img src="graphics/insta.png" ></a>
                  <a href="#"><img src="graphics/github.png" ></a>
                  <a href="#"><img src="graphics/linkedin.png" ></a>
                </div>
              </div>

              <div id="footer-section">
                <div id="quick-link">
                  <h2>Quick Links</h2>
                  <ul>
                      <a href="#"><li> Home </li></a>
                      <a href="#"><li>About Us</li></a>
                      <a href="#"><li>Help</li></a>
                      <a href="#"><li>Privacy Policy</li></a>
                      <a href="#"><li>Trending</li></a>
                      <a href="#"><li>Wish List</li></a>
                    </ul>
                  </div>
                </div>
                <div id="footer-section">
                  <div id="contact-form">
                    <h2>Contact Use</h2>
                    <div id="contact-post">
                      <form method="POST">
                          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...."><br>
                          <textarea name="message"  class="text-input contact-input" placeholder="Your message..."></textarea><br>
                          <button type="submit" class="btn btn-big contact-btn">
                              <i class="fas fa-envelope"></i>
                              send
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="footer-bottom">
                    <span>StudentGist.com | Design By: Shalini, Pragya, Kartik</span>
                  </div>
                </div>

  </body>
</html>
