<?php
$conn = mysqli_connect('localhost','root','','studentsgist');
if (isset($_GET['clicked'])) {
      $clicked = (int)$_GET['clicked'];
} else {
      $clicked = 9;
}
	$qry = "SELECT * FROM SGDATABASE WHERE adid=$clicked";
	$result = mysqli_query($conn, $qry) or die(mysqli_error($conn));

	$row = mysqli_fetch_assoc($result);
		?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript/product-detail-script.js"></script>
    <link rel="stylesheet" href="css/product-detail-style.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css" />
    <link href='css\header.css' rel='stylesheet' type='text/css'>
    <link href='css\modal.css' rel='stylesheet' type='text/css'>

    </script>
  </head>
  <body>

      <div class="main-headerr" >
          <div class="inner-header">
              <a href="http://localhost/studentsgist.github.io/index.php"> <h1>STUDENT<span style="opacity: 1;color:white;"> Gist</span></h1></a>
              <div class="search-container">
              <form>
              <input type="text" placeholder="Search here"  id="searchtext" >
              <!-- <input type="submit" id="mybtn" value="<img src='searchh.png'>"> -->
              <input type="image" src="graphics\searchh.png" alt="Submit" width="48" height="48" id="mybtn">
              </form>
              </div>


              <ul class="navigation">
                  <li><a href="http://localhost/studentsgist.github.io/index.php"><img src="graphics\wish list.png"></a></li>
                  <li><a href="ad-upload.php">SELL</a></li>
                  <li><a href="http://localhost/studentsgist.github.io/index.php">Wish list</a></li>
                  <li><a href="http://localhost/studentsgist.github.io/index.php">MY ACCOUNT</a></li>
                  <li><a id="Sign_up" class="topButtons" style="display:none;">Sign Up</a></li>
                  <li><a id="Sign_in" class="topButtons">Sign In</a></li>

              </ul>
          </div>
      </div>
      <div id="mySignInModal" class="modal">

      	<!-- Insert code for Sign In modal here -->

          <div class="modal-content">
              <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2 class="black">Welcome Back!</h2>
                  <hr>
              </div>

              <div class="modal-body">

                  <form id="mySignInForm">


                      <div >
                          <label>Username</label><br>
                          <input type="text" class="formSignUp" name="formSignIn"  placeholder=" Enter Username" required="">
                      </div>

                      <div >
                          <label>Password</label><br>
                          <input type="password" name="PASSWORD" class="formSignIn" placeholder="Enter Password" required="">
                      </div >


                  </form>
                  <button id="SignInbtn" class="formSignIn" onclick="alert("Signed In!")" form="mySignInForm">Sign In</button>

                  <div class="modal-footer">
                      <span><strong>Not a member?</strong> <a class="hyper" href="#"><strong>Sign Up</strong></a></span>
                  </div>

              </div>


          </div>


      </div>



      <div id="myModal" class="modal">

      	<!-- Insert code for Sign Up modal here -->

          <!-- Modal content -->
              <div class="modal-content">
                  <div class="modal-header">
                      <span class="close">&times;</span>
                      <h2 class="black">Get Started</h2>
                      <hr>
                  </div>

                  <div class="modal-body">

                      <form id="mySignUpForm">

                          <div >
                              <label>Full Name</label><br>
                              <input type="text" class="formSignUp" name="name"  placeholder="Enter Full Name" required="">
                          </div>

                          <div >
                              <label>Username</label><br>
                              <input type="text" class="formSignUp" name="username"  placeholder=" Enter Username" required="">
                          </div>

                          <div >
                              <label>Password</label><br>
                              <input type="password" name="PASSWORD" class="formSignUp" placeholder="Enter Password" required="">
                          </div >
                          <div >
                              <label>Confirm Password</label><br>
                              <input type="password" name="confirm password" class="formSignUp" placeholder="Confirm Password" required="">
                          </div >

                      </form>
                      <button id="btn-margin" class="formSignUp" onclick="alert("Congratulations! Your are Signed Up.")" form="mySignUpForm">Sign Up</button>

                  </div>


              </div>



      </div>

  	<!-- Place all Javascript for header in this file -->
  	<script src="javascript\header.js"></script>




    <div class="product-detail-container">
      <div id="product-detail-conn">
        <div id="pro-left-coln">
          <div class="template" id="pro-duct-name-heading">
            <div id="pro-duct-heading-inner">
              <span> <h1><?php echo $row['adtitle'] ?></h1> </span>
            </div>
          </div>
          <div id="pro-left-coln-inner" class="template">
            <span class="icon prev" onclick="procurrentimg(25);">&#11207;</span>
            <span class="icon next" onclick="procurrentimg(-25);">&#11208;</span>
            <div id="pro-det-image-container">
              <div id="pro-det-image-conn">
                <div class="pro-duct-img">
                  <img class="pro-duc-image" src="<?php echo $row['image1'] ?>" alt="">
                </div>
                <div class="pro-duct-img">
                  <img class="pro-duc-image" src="<?php echo $row['image2'] ?>" alt="">
                </div>
                <div class="pro-duct-img">
                  <img class="pro-duc-image" src="<?php echo $row['image1'] ?>" alt="">
                </div>
                <div class="pro-duct-img">
                  <img class="pro-duc-image" src="<?php echo $row['image3'] ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div id="pro-seller-det" >
            <div class="template" style="padding: 10px 30px; height:230px;">
              <div id="pro-duct-seller-heading"><h1><u>Seller's Detail </u></h1></div>
              <span id="pro-seller-proimg"> <img src="images/picture1.png" height="109px" width="109px" alt=""></span>
              <span class="prosellercon">
                <div id="pro-sellername"><h2> Kartik Tyagi </h2></div>
              </span>
              <span id="msgtoseller"> <img src="graphics/msg2.png" alt="" height="74px" width="74px"> </span>
              <div id="show-additional-det">
                <div id="show-add-head">Show Additional Details</div><br>
                <div id="addi-contain">

                  <div class="shw-ad-det" id="show-con-no">&#8226; Contact Number:<span>+91-9876543210</span></div>
                  <div class="shw-ad-det" id="show-email">&#8226; Email: <span>kyubtau@coldmail.comb</span> </div>
                  <div class="shw-ad-det" id="show-course">&#8226; Course: <span>BTech CSE</span> </div>
                  <div class="shw-ad-det" id="show-grad-yr">&#8226; Year of Study: <span>3rd year</span> </div>
                  <div class="shw-ad-det" id="show-residence">&#8226; I'm a: <span>Hostler/Day Scholar</span> </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="javascript/product-detail-script.js"></script>
        
        <div id="pro-right-coln">
          <div id="pro-right-coln-inner">
            <div id="pro-det-detail" class="template">
              <div id="pro-dut-sumry">
                <span class="tags" id="offer-price">Rs.<?php echo $row['adop'] ?></span>
                <span class="tags" id="savpri">&nbsp;&nbsp;(Save: &nbsp; </span>
                <span class="tags" id="saving-price">Rs. <?php echo $row['admp']-$row['adop'] ?></span>
                <span class="tags" id="savpri">)</span>
                <br><br>
                <span class="tags" id="marpri">Regular Price: &nbsp; </span>
                <span class="tags" id="market-price">Rs. <?php echo $row['admp'] ?></span>
                <div class="foot">
                  <br>
                  <span id="place">Phagwara, Jalandhar</span>
                  <span id="upload-time">15 Aug 2019</span>
                </div>
              </div>
            </div>
            <div id="pro-det-description" class="template">
              <div class="pro-det-des-inner">
                <div class="product-heading"><u>Description</u></div>
                <div id="product-detailed-desc" class="product-detailed-desc" style="font-size: 0.8em">
                  <span><?php echo $row['addesc'] ?></span>
                </div>
              </div>
            </div>
            <div id="pro-sel-location" class="template">
              <div class="pro-map-loc" class="pro-map-loc">
                <div class="pro-up-loc"><u>Seller Location</u></div><br>
                <div class="pro-up-loc-name">jalandhar, Phagwara</div>
                <div class="pro-map-location">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109066.42047296917!2d75.50337932579876!3d31.3223787389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f676e7d7fe7%3A0xe4a8094148da0abe!2sDivsion%20of%20student%20affairs%2C%20Punjab%20144411!5e0!3m2!1sen!2sin!4v1571937152733!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="">
                  </iframe>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
<br><br><br><br><br>
        <div id="footer">
            <div id="footer-content">
                <div id="footer-section">
                    <h1 id="logo-text"><span>Student</span> Gist</h1>
                    <div id="footer-about-sg">
                      <p>When you shop online for books thencheck
                        for ongoing deals for extra discounts & offers,
                        you can get an access to a number of titles and publishers.
                      </p>
                      <br>
                  </div>
                    <div id="contact">
                        <span><i class="">8427888943</i></span>
                        <span><i class="">info@studentgist.com</i></span>
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
                            <a href="index.php"><li> Home </li></a>
                            <a href="aboutus.html"><li>About Us</li></a>
                            <a href="contactform.html"><li>Help</li></a>
                            <a href="privacy-policy.html"><li>Privacy Policy</li></a>
                            <a href="disclaimer.html"><li>Disclaimer</li></a>
                            <a href="index.php"><li>Wish List</li></a>
                        </ul>
                    </div>
                </div>
                <div id="footer-section">
                    <div id="contact-form">
                        <h2>Contact Us</h2><br>
                        <div id="contact-post">
                            <form >
                                <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...."><br>
                                <textarea name="message"  class="text-input contact-input" placeholder="Your message..."></textarea><br>
                                <input style="cursor:pointer" type="button" class="btn btn-big contact-btn" onclick="alert('Message Sent!')" value="Done">
                                </input>
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
