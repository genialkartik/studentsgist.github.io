<?php
$conn = mysqli_connect('localhost','root','','studentsgist');
if (isset($_GET['clicked'])) {
      $clicked = (int)$_GET['clicked'];
} else {
      $clicked = 3;
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
    <script src="javascript/product-detail-script.js"></script>
    <link rel="stylesheet" href="css/product-detail-style.css">
  </head>
  <body>
    <div class="product-detail-container">
      <div id="product-detail-conn">
        <div id="pro-left-coln">
          <div class="template" id=pro-duct-name-heading>
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
        </div>
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
            <div id="pro-seller-det">

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
  </body>
</html>
