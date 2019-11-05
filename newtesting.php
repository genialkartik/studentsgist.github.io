<?php
$conn = mysqli_connect("localhost", "root", "", "studentsgist" );
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Corner</title>
    <link href='css\header.css' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css" />
    <link rel="stylesheet" href="css/testing.css">
    <link href='css\modal.css' rel='stylesheet' type='text/css'>
    <script src="javascript/template.js"></script>
    <script src="javascript/indexjs.js"></script>
  </head>
  <body>

    <!--Header -->
    <div class="main-headerr" >
        <div class="inner-header">
            <a href="http://localhost/studentsgist.github.io/index.php"> <h1>STUDENT<span style="opacity: 1;color:white;"> Gist</span></h1></a>
            <div class="search-container">
              <form>
                <input type="text" placeholder="Search here"  id="searchtext" >
                <!-- <input type="submit" id="mybtn" value="<img src='searchh.png'>"> -->
                <input type="image" src="graphics\searchh.png" onclick="searchit();" alt="Submit" width="48" height="48" id="mybtn">
              </form>
            </div>


            <script type="text/javascript">

            var vv;
            vv = 0;
              function searchit(){
                alert("adid: ");
              }
            </script>



            <ul class="navigation">
              <li><a href="http://localhost/studentsgist.github.io/index.php"><img src="graphics\wish list.png"></a></li>
              <li><a href="ad-upload.php">SELL</a></li>
              <li><a href="http://localhost/studentsgist.github.io/index.php">Wish list</a></li>
              <li><a href="http://localhost/studentsgist.github.io/index.php">MY ACCOUNT</a></li>
              <li><a id="Sign_up" class="topButtons" style="display:none;">Sign Up</a></li>
              <li><a id="Sign_in" class="topButtons" style="cursor: pointer;">Sign In</a></li>

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
                <button id="SignInbtn" class="formSignIn" form="mySignInForm">Sign In</button>

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
                    <button id="btn-margin" class="formSignUp" form="mySignUpForm">Sign Up</button>

                </div>


            </div>



    </div>

	<!-- Place all Javascript for header in this file -->
	<script src="javascript\header.js"></script>


<!--Product list container -->




<div class="template-container" id="template-container-id">
  <div id="template-inner-container">

    <!--Product list templates-->

    <?php
    $noofitemqry  = "SELECT count(1) FROM SGDATABASE";
    $noofrow = mysqli_query($conn, $noofitemqry) or die(mysqli_error($conn));
    $noi = mysqli_fetch_array($noofrow);
    $total = $noi[0];   //no of items in the table


    $i = 1;
    do {
    $qry = "SELECT * FROM SGDATABASE where adid=$i";
    $result = mysqli_query($conn, $qry) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    ?>

  <a href="product-detail.php?clicked=<?php echo $row['adid'];?>" class="templateclckd">
    <div id="template">
</a>
      <h3>
          <input type="button" name="cartname" id="cartheart" onclick="alert("Added to Wish List")" value="&#x2764;"></input>

      <a href="product-detail.php?clicked=<?php echo $row['adid'];?>" class="templateclckd">
      <?php echo $row['adtitle'] ?>
      </h3>
      <a href="product-detail.php?clicked=<?php echo $row['adid'];?>" class="templateclckd">
      <div id="product-images">
          <div class="product-image">
            <img class="pro-img" src="<?php echo $row['image1'] ?>" alt="">
          </div>
      </div>
      <div id="product-detail">
        <span class="tags" id="offpri">OFFER PRICE: </span>
        <span class="tags" id="offer-price">Rs.<?php echo $row['adop'] ?></span>
      </a>
        <span  id="likeit">
          <button type="button" class="like-btn" >
            <i class="fa fa-thumbs-up"  onclick="likeclckd()">
              <span id="ilikedit">0</span>
            </i>
          </button>
        </span>
        <br>
        <a href="product-detail.php?clicked=<?php echo $row['adid'];?>" class="templateclckd">
        <span class="tags" id="marpri">Market Price: </span>
        <span class="tags" id="market-price">Rs. <?php echo $row['admp'] ?> </span>
        <span class="tags" id="savpri">(Save: </span>
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

  <script type="text/javascript">


    var names_obj = [];
    names_obj[vv] = {
      "ad_id": "<?php echo $row['adid'];?>",
      "ad_names": "<?php echo $row['adtitle'];?>"
    };
    vv++;

  </script>



  <?php
    $i++;
  }while ($i <= $total);
   ?>
  </div>
  </div>
  <br><br>


    <!--Load More Button -->
    <style media="screen">
      #load-more-container{
        position: relative;
        width: 100%;
        height: 5%;
      }
      #load-more-inner{
        position: relative;
        width: 10%;
        left: 43%;
        margin: 15px;
      }
      #loadmorebtn{
        font-size: 1.2em;
        padding: 6px 10px;
        cursor: pointer;
        background-color:rgb(0, 225, 255);
      }
      #likeit{
        position: relative;
        float: right;
        top: -5px;
        z-index: 1;
        margin-right: 10px;
      }
      #ilikedit{
        right: 24px;
        padding: 0px 2px;
        font-size: .8em;
      }
    </style>


    <div id="load-more-container">
      <div id="load-more-inner">
        <form  action="" method="post">
          <input id="loadmorebtn" type="button" name="load-more" value="Load More">
        </form>
      </div>
    </div>

            <?php

          //  if(isset($_POST['load-more'])){
          //    $div = $total/4;
          //    $intdiv = intval($div);
          //    $rem = $total%4;



                //echo '<script language="javascript">';
                //echo 'alert("no of list in 4s:';
                //echo  intval($divide);
                //echo '")' ;
                //echo '</script>';

          //  }
             ?>



<!--Footer -->
<div id="footer">
    <div id="footer-content">
        <div id="footer-section">
            <h1 id="logo-text"><span>Student</span> Gist</h1>
            <div id="footer-about-sg">
              <p>'Worry less, Buy more' <br>
                It's good to get new things first. But Sometimes,
                You just runming out of money or in lack of trust to buy expensive things.<br>
                Hurrah!! We owe you this one. Make a deal with a seller under your convenience
                and get your dream thing. Right Now! <br>

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
                    <a href="http://localhost/studentsgist.github.io/index.php"><li> Home </li></a>
                    <a href="aboutus.html"><li>About Us</li></a>
                    <a href="contactform.html"><li>Help</li></a>
                    <a href="privacy-policy.html"><li>Privacy Policy</li></a>
                    <a href="http://localhost/studentsgist.github.io/index.php"><li>Trending</li></a>
                    <a href="http://localhost/studentsgist.github.io/index.php"><li>Wish List</li></a>
                </ul>
            </div>
        </div>
        <div id="footer-section">
            <div id="contact-form">
                <h2>Contact Us</h2>
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

<?php

  $addcartids = 0;
  $cartarray = [];
  if (isset($_GET['cn'])) {
        $clicked = (int)$_GET['cn'];

        ?>
            <script language="javascript">
                alert("<?php echo $clicked; ?>");
           </script>';

                   <?php
  }
  else {
        $clicked = 1;
  }



?>
<script type="text/javascript">



    var i;
    i=0;
    function likeclckd(){
      i++;
      document.getElementById('ilikedit').innerHTML=i;
    }
</script>

  </body>
</html>
