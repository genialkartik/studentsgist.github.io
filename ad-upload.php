<?php
$conn = mysqli_connect('localhost','root','','studentsgist');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Client Side InterFace</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript/client-product-upload.js"></script><link href='css\header.css' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href = "css/footer.css" />
    <link href='css\modal.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/ad-upload.css">
    <link rel="stylesheet" href="css/ad-upload-preview.css">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

  </head>
  <body>


        <!--Header -->
        <div class="main-headerr" style="position:relative; z-index: 2;filter: opacity(1);">
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
                  <li><a href="wishlist.php"><img src="graphics\wish list.png"></a></li>
                  <li><a href="ad-upload.php">SELL</a></li>
                  <li><a href="http://localhost/studentsgist.github.io/index.php">My Account</a></li>
                  <li><a id="Sign_up" class="topButtons" style="display:none;">Sign Up</a></li>
                  <li><a id="Sign_in" class="topButtons" style="cursor: pointer;">Sign In</a></li>

                </ul>
            </div>
        </div>


      
    	<!-- Place all Javascript for header in this file -->
    	<script src="javascript\header.js"></script>

      <style media="screen">
      #closeit{
          position: relative;
          top:-21px;
          right:-21px;
          color: grey;
          padding: 6px;
          float: right;
          font-size: 3.2em;
          font-weight: bold;
          border: 4px solid grey;
          background: black;
          border-radius: 50%;

      }
      #closeit:hover{
        cursor: pointer;
        color: red;
        border: 4px solid red;
      }
      </style>




      <div  ng-app="ng-pre" ng-controller="ng-cont">

        <div class="product-detail-container" id="ad-preview-box">
          <span id="closeit">&times;</span>
          <div id="product-detail-conn">
            <div id="pro-left-coln">
              <div class="template" id=pro-duct-name-heading>
                <div id="pro-duct-heading-inner">
                  <span> <h2>{{adtit}}</h2> </span>
                </div>
              </div>
              <div id="pro-left-coln-inner" class="template">
                <span class="icon prev" onclick="procurrentimg(25);">&#11207;</span>
                <span class="icon next" onclick="procurrentimg(-25);">&#11208;</span>
                <div id="pro-det-image-container">
                  <div id="pro-det-image-conn">
                        <div class="pro-duct-img">
                          <img class="pro-duc-image" src="images/testingimg.jpg" alt="">
                        </div>
                        <div class="pro-duct-img">
                          <img class="pro-duc-image" src="images/1.jpg" alt="">
                        </div>
                        <div class="pro-duct-img">
                          <img class="pro-duc-image" src="images/2.jpg" alt="">
                        </div>
                        <div class="pro-duct-img">
                          <img class="pro-duc-image" src="images/3.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pro-seller-det" >
                    <div class="template" style="padding: 10px 30px; height:230px;">
                      <div id="pro-duct-seller-heading"><h3><u>Seller's Detail </u></h3></div>
                      <span id="pro-seller-proimg"> <img src="images/picture1.png" height="69px" width="69px" alt=""></span>
                      <span class="prosellercon">
                        <div id="pro-sellername"><h5> Kartik Tyagi </h5></div>
                      </span>
                      <span id="msgtoseller"> <img src="graphics/msg2.png" alt="" height="34px" width="34px"> </span>
                      <div id="show-additional-det">
                        <div id="show-add-head">Show Additional Details</div><br>
                        <div class="shw-ad-det" id="show-con-no">&#8226; Contact Number:<span>+91-9876543210</span></div>
                        <div class="shw-ad-det" id="show-email">&#8226; Email: <span>kyubtau@coldmail.comb</span> </div>
                        <div class="shw-ad-det" id="show-course">&#8226; Course: <span>BTech CSE</span> </div>
                        <div class="shw-ad-det" id="show-grad-yr">&#8226; Year of Study: <span>3rd year</span> </div>
                        <div class="shw-ad-det" id="show-residence">&#8226; I'm a: <span>Hostler/Day Scholar</span> </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div id="pro-right-coln">
              <div id="pro-right-coln-inner">
                <div id="pro-det-detail" class="template">
                  <div id="pro-dut-sumry">
                    <span class="tags" id="offer-price">Rs.{{adopri}}</span>
                    <span class="tags" id="savpri">&nbsp;&nbsp;(Save: &nbsp; </span>
                    <span class="tags" id="saving-price">Rs. {{admpri-adopri}}</span>
                    <span class="tags" id="savpri">)</span>
                    <br><br>
                    <span class="tags" id="marpri">Regular Price: &nbsp; </span>
                    <span class="tags" id="market-price">Rs.{{admpri}}</span>
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
                      <span>{{addesc}}</span>
                    </div>
                  </div>
                </div>
                <div id="pro-seller-det">

                </div>
                <div id="pro-sel-location" class="template">
                  <div class="pro-map-loc" class="pro-map-loc">
                    <div class="pro-up-loc"><u>Seller's Location</u></div><br>
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


    <div id="product-page-container" class="product-page-container">
      <img src="images/aduploadbackimage1.jpg" alt="">
      <div id="product-upload-container" class="product-upload-container">
        <form class="" action="ad-upload.php" method="post" enctype="multipart/form-data">
        <div id="ad-header-container" class="ad-detailed-container">
          <div id="ad-header">
            <h1> <span>Post Your Ad</span> </h1>
          </div>
        </div>
        <div id="post-ad-container" class="ad-detailed-container">
          <div id="post-ad-details">
            <div id="post-ad"><h2>Enter Ad details<h2></div>
            <div id="ad-detail-container">
              <div id="ad-detail">
                <div id="enter-ad-detail" class="form-group">
                  <input class="form-control" ng-model="adtit" type="text" name="ad-title" placeholder="Enter Product Name..." maxlength="40" required/>
                  <span style="font-weight: normal; font-size:.9em;"><b>Ad Title:</b> {{adtit}}</span>
                </div>
                <div id="ad-description">Ad Description</div>
                <div id="enter-ad-description">
                  <textarea type="text" row="12" coln="40" name="ad-descrip" ng-model="addesc" placeholder="Enter Ad description..."  required></textarea>
                </div>
                <div id="ad-detail-title"><span>Product OFfer Price*<span></div>
                <div id="enter-ad-price" class="form-group">
                  <input class="form-control" type="text" name="ad-oripri" value="" placeholder="Enter Offer Price..." maxlength="40" ng-model="adopri"  required/><span> Rs. {{adopri}}</span>
                </div>
                <div id="ad-detail-title"><span>Market Price of the Product<span></div>
                <div id="enter-ad-marpri" class="form-group">
                  <input class="form-control" type="text" name="ad-marpri" value="" placeholder="Enter Market Price..." maxlength="40" ng-model="admpri" required/><span> Rs. {{admpri}}</span>
                </div>

                <div id="catagory-container">
                  <div id="ad-catagory">Catagory</div>
                  <div id="select-catagory">
                    <select id="product-catagory" name="catagory">
                      <option value="select catagory" selected>>select catagory</option>
                      <option value="Furniture" >Furniture</option>
                      <option value="electronic-devices">Electronics Devices</option>
                      <option value="gadgets">Gadgets</option>
                      <option value="vehicle">Vehicle</option>
                      <option value="study-material">Study Material</option>
                      <option value="sport">Sport</option>
                      <option value="fashion">Fashion</option>
                      <option value="hobbies">Hobbies</option>
                      <option value="services">Services</option>
                      <option value="mobile-accessories">Mobile Accessories</option>
                      <option value="laptop-accessories">Laptop Accessories</option>
                    </select>
                  </div>
                  <div id="select-sub-catagory">
                    <div id="ad-sub-catagory">Sub-Catagory</div>
                    <div id="product-sub-catagory" name="sub-catagory">
                      <select id="type-Furniture" class="por-sub-cat" name="furniture">
                        <option value="studytable">Study Table</option>
                        <option value="mattress">Mattress</option>
                        <option value="pillow">Pillow</option>
                        <option value="other-furniture">Other</option>
                      </select>
                      <select id="type-electronic-devices" class="por-sub-cat" name="electronic-devices">
                        <option value="lcdmonitor">LCD/Monitor & Computer</option>
                        <option value="mobile">Mobile</option>
                        <option value="Laptop">Laptop</option>
                        <option value="other-electronic-devices">Other</option>
                      </select>
                      <select id="type-gadgets" class="por-sub-cat" name="gadgets">
                        <option value="drone">Drone</option>
                        <option value="arduino">Arduino</option>
                        <option value="raspberry">Raspberry Pi3</option>
                        <option value="other-gadgets">Other</option>
                      </select>
                      <select id="type-vehicle" class="por-sub-cat" name="vehicle">
                        <option value="bike">Bike</option>
                        <option value="cycle">Cycle</option>
                        <option value="car">Car</option>
                        <option value="other-vehicle">Other</option>
                      </select>
                      <select id="type-study-material" class="por-sub-cat" name="study-material">
                        <option value="books">Books</option>
                        <option value="notes">Notes</option>
                        <option value="other-study-material">Other</option>
                      </select>
                      <select id="type-sport" class="por-sub-cat" name="sports">
                        <option value="sports-kit">Sport kit</option>
                        <option value="sports-wear">Sports Wear</option>
                        <option value="sports-equipment">Sports Equipment</option>
                        <option value="other-sports">Other</option>
                      </select>
                      <select id="type-fashion" class="por-sub-cat" name="fashion">
                        <option value="male-fashion">Male</option>
                        <option value="female-fashion">Female</option>
                        <option value="other-fashion">Other</option>
                      </select>
                      <select id="type-hobbies" class="por-sub-cat" name="hobbies">
                        <option value="musical-instruments">Musical Instruments</option>
                        <option value="gym-fitness">Gym & Fitness</option>
                        <option value="other-hobbies">Other</option>
                      </select>
                      <select id="type-services" class="por-sub-cat" name="services">
                        <option value="domain">Domain</option>
                        <option value="subscription">subscription</option>
                        <option value="other-services">Other</option>
                      </select>
                      <select id="type-mobile-accessories" class="por-sub-cat" name="mobile-accessories">
                        <option value="backcover">Back Cover</option>
                        <option value="otg">OTG</option>
                        <option value="charger">Fast Charger</option>
                        <option value="other-mobile-accessories">Other</option>
                      </select>
                      <select id="type-laptop-accessories" class="por-sub-cat" name="laptop-accessories">
                        <option value="lapstand">Laptop Stand</option>
                        <option value="laptop-charger">Laptop Chager</option>
                        <option value="laptop-cover">Laptop Cover</option>
                        <option value="other-vehicle">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div id="ad-images-container">
                  <div id="ad-imgages-upload"><span>Upload Images*<span></div>
                  <div id="ad-image1" class="form-group">
                    <input class="form-control" type="file" name="img1"  required>
                  </div>
                  <div id="ad-image1" class="form-group">
                    <input class="form-control" type="file" name="img2" required>
                  </div>
                  <div id="ad-image1" class="form-group">
                    <input class="form-control" type="file" name="img3" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
        <div id="Location-container"  class="ad-detailed-container">
          <div id="loc-con"> <h2>Location</h2> </div>
          <!-- <div id="postee-location-type">
            <ul>
              <li id="manual-location">
                <div id="manual-loc-div">Manual Location</div>
              </li>
              <li id="current-location">
                <div id="current-loc-div">Current Location</div>
              </li>
              <li id="provided-location">
                <div id="provided-loc-div">Provided Location</div>
              </li>
            </ul>
          </div>  -->



          <div id="select-manual-location">
            <div id="sel-man-loc-state">State</div>
            <div id="sel-man-loc-state-div">
              <select id="select-state" name="stated">
                <option value="unknown" selected>>select state</option>
                <option value="2001145">Andhra Pradesh</option>
                <option value="2001146">Arunachal Pradesh</option>
                <option value="2001147">Assam</option>
                <option value="2001148">Bihar</option>
                <option value="2001149">Chandigarh</option>
                <option value="2001178">Chhattisgarh</option>
                <option value="2001150">Dadra &amp; Nagar Haveli</option>
                <option value="2001151">Daman &amp; Diu</option>
                <option value="2001152">Delhi</option>
                <option value="2001153">Goa</option>
                <option value="2001154">Gujarat</option>
                <option value="2001155">Haryana</option>
                <option value="2001156">Himachal Pradesh</option>
                <option value="2001157">Jammu &amp; Kashmir</option>
                <option value="2001158">Jharkhand</option>
                <option value="2001159">Karnataka</option>
                <option value="2001160">Kerala</option>
                <option value="2001161">Lakshadweep</option>
                <option value="2001162">Madhya Pradesh</option>
                <option value="2001163">Maharashtra</option>
                <option value="2001164">Manipur</option>
                <option value="2001165">Meghalaya</option>
                <option value="2001166">Mizoram</option>
                <option value="2001167">Nagaland</option>
                <option value="2001168">Odisha</option>
                <option value="2001169">Pondicherry</option>
                <option value="2001170">Punjab</option>
                <option value="2001171">Rajasthan</option>
                <option value="2001172">Sikkim</option>
                <option value="2001173">Tamil Nadu</option>
                <option value="2007599">Telangana</option>
                <option value="2001174">Tripura</option>
                <option value="2001176">Uttar Pradesh</option>
                <option value="2001175">Uttaranchal</option>
                <option value="2001177">West Bengal</option>
              </select>
            </div>

              <div id="smlc-div">
                <div id="sel-city">City</div>
                <div class="selected-city" id="sel-cities-conn">
                <select id="smlc2001145" name="AandN" class="select-city">
                  <option value="unknown"></option>
                  <option value="4393583">Bakultala</option>
                  <option value="4393569">Bambooflat</option>
                  <option value="4393567">Car Nicobar</option>
                  <option value="4296465">Diglipur</option>
                  <option value="4393581">Garacharma</option>
                  <option value="4393577">Hut Bay</option>
                  <option value="4393579">Kamorta</option>
                  <option value="4393563">Malacca</option>
                  <option value="4393565">Mayabunder</option>
                  <option value="4157273">Port Blair</option>
                  <option value="4393571">Prothrapur</option>
                  <option value="4393575">Rangat</option>
                  <option value="4393573">Tarasa Island</option>
                </select>



                <select id="smlc2001170" name="Pun" class="select-city">
              </option><option value="4059068">Abohar</option><option value="4399489">Adampur</option><option value="4399461">Ahmedgarh</option><option value="4399467">Ajnala</option><option value="4399753">Akalgarh</option><option value="4399557">Alawalpur</option><option value="4399561">Amargarh</option><option value="4399659">Amloh</option><option value="4059069">Amritsar</option><option value="4399491">Anandpur Sahib</option><option value="4399689">Apra</option><option value="4399733">Aur</option><option value="4399651">Baba Bakala</option><option value="4399649">Baddowal</option><option value="4399567">Badhni Kalan</option><option value="4399569">Balachaur</option><option value="4399571">Banga</option><option value="4399573">Banur</option><option value="4399575">Bareta</option><option value="4399751">Bariwala</option><option value="4059070">Barnala</option><option value="4399655">Baryar</option><option value="4399661">Bassi Pathana</option><option value="4059071">Batala</option><option value="4059072">Bathinda</option><option value="4387717">Beas</option><option value="4399623">Begowal</option><option value="4399639">Behrampur</option><option value="4399617">Bhadaur</option><option value="4399563">Bhadson</option><option value="4399619">Bhagha Purana</option><option value="4399721">Bhagta Bhai Ka</option><option value="4399687">Bhankarpur</option><option value="4399549">Bhawanigarh</option><option value="4399607">Bhikhi</option><option value="4399591">Bhikhiwind</option><option value="4399601">Bhisiana</option><option value="4399625">Bhogpur</option><option value="4399527">Bhucho Mandi</option><option value="4399627">Bhulath</option><option value="4399769">Budha Theh</option><option value="4399603">Budhlada</option><option value="4399643">Bungal</option><option value="4399685">Chamkaur Sahib</option><option value="4399605">Cheema</option><option value="4399653">Chogawan</option><option value="4399559">Chohal</option><option value="4399645">Daper</option><option value="4399481">Dasuya</option><option value="4399595">Dera Baba Nanak</option><option value="4399785">Dera Bassi</option><option value="4399683">Dera Bassi Industrial Area</option><option value="4399599">Dhanaula</option><option value="4399611">Dharamkot</option><option value="4399747">Dhariwal</option><option value="4399681">Dhilwan</option><option value="4399759">Dhin</option><option value="4387761">Dhuri</option><option value="4399621">Dinanagar</option><option value="4399529">Dirba</option><option value="4399587">Doraha</option><option value="4059073">Faridkot</option><option value="4399771">Fatehgarh Churian</option><option value="4059074">Fazilka</option><option value="4059075">Firozpur</option><option value="4059076">Firozpur Cantonment</option><option value="4399539">Gardhiwala</option><option value="4399533">Garhshankar</option><option value="4399535">Ghagga</option><option value="4399537">Ghanaur</option><option value="4399641">Ghoh</option><option value="4399589">Giddarbaha</option><option value="4059077">Gobindgarh</option><option value="4399781">Goindwal</option><option value="4399541">Goniana</option><option value="4399487">Goraya</option><option value="4059078">Gurdaspur</option><option value="4399543">Guru Har Sahai</option><option value="4399671">Hajipur</option><option value="4399637">Halwara</option><option value="4399779">Handiaya</option><option value="4399583">Hariana</option><option value="4059079">Hoshiarpur</option><option value="4399669">Hussainpur</option><option value="4059080">Jagraon</option><option value="4399577">Jaitu</option><option value="4399579">Jalalabad</option><option value="4059081">Jalandhar</option><option value="4399667">Jandiala Amritsar District</option><option value="4399581">Jandiala Jalandhar District</option><option value="4399647">Jodhan</option><option value="4399777">Jugial</option><option value="4399585">Kalan</option><option value="4059082">Kapurthala</option><option value="4399773">Karoran</option><option value="4399495">Kartarpur</option><option value="4399739">Kathanian</option><option value="4399463">Khamanon</option><option value="4399691">Khambra</option><option value="4399471">Khanauri</option><option value="4059083">Khanna</option><option value="4399725">Kharar</option><option value="4399497">Khemkaran</option><option value="4399711">Khilchian</option><option value="4399695">Korianwali</option><option value="4399761">Kot</option><option value="4399465">Kot Fatta</option><option value="4399697">Kot Ise Khan</option><option value="4059084">Kotkapura</option><option value="4399701">Kotla Nihang</option><option value="4399493">Kurali</option><option value="4399699">Lalru</option><option value="4399749">Leather Complex Industrial Area</option><option value="4399469">Lehragaga</option><option value="4399499">Lohian Khas</option><option value="4399501">Longowal</option><option value="4059085">Ludhiana</option><option value="4399663">Machhiwara</option><option value="4346194">Machhiwara Sahib</option><option value="4399505">Mahilpur</option><option value="4399673">Majitha</option><option value="4399597">Makhu</option><option value="4059087">Malaut</option><option value="4059086">Malerkotla</option><option value="4399633">Mallanwala Khass</option><option value="4399657">Maloud</option><option value="4399717">Mamun</option><option value="4387847">Mandi Govindgarh</option><option value="4059088">Mansa</option><option value="4399735">Manwal</option><option value="4399755">Maraar Kalan</option><option value="4399679">Maur</option><option value="4399737">Mehna</option><option value="4059089">Moga</option><option value="4296460">Mohali</option><option value="4399677">Moonak</option><option value="4399485">Morinda</option><option value="4399635">Mubarakpur</option><option value="4399731">Mudal</option><option value="4399741">Mudki</option><option value="4399483">Mukerian</option><option value="4387867">Muktsar</option><option value="4399613">Mullanpur Dakha</option><option value="4399665">Mullanpur Garib Dass</option><option value="4059091">Nabha</option><option value="4399723">Nag Kalan Industrial Area</option><option value="4399475">Nakodar</option><option value="4387875">Nangal</option><option value="4399727">Nangli</option><option value="4399715">Narot Mehra</option><option value="4399507">Nawanshahr</option><option value="4399525">Nehon</option><option value="4399519">Nurmahal</option><option value="4059092">Pathankot</option><option value="4059093">Patiala</option><option value="4399523">Patran</option><option value="4399479">Patti</option><option value="4399521">Payal</option><option value="4059094">Phagwara</option><option value="4399477">Phillaur</option><option value="4399783">Qadian</option><option value="4399545">Rahon</option><option value="4399547">Raikot</option><option value="4399703">Rail</option><option value="4399707">Raipur Rasulpur</option><option value="4399503">Raja Sansi</option><option value="4059095">Rajpura</option><option value="4399729">Rakri</option><option value="4399473">Raman</option><option value="4399767">Ramdas</option><option value="4387937">Rampura Phul</option><option value="4399509">Rayya</option><option value="4387943">Rupnagar</option><option value="5331570">Rupnagar Town</option><option value="4399675">Rurki Kasba</option><option value="4059096">S.A.S. Nagar</option><option value="4399531">Sahnewal</option><option value="4399705">Saloh</option><option value="4387947">Samana</option><option value="4399517">Samrala</option><option value="4399553">Sanaur</option><option value="4399609">Sangat</option><option value="4059097">Sangrur</option><option value="4399765">Sansarpur</option><option value="4399709">Sarai Khas</option><option value="4399565">Sardulgarh</option><option value="4399763">Sarna</option><option value="4399743">Satyewala</option><option value="4399555">Shahkot</option><option value="4399631">Sham Chauras I</option><option value="4399745">Shikar</option><option value="4059098">Sirhind</option><option value="4387963">Sirhind Fatehgarh Sahib</option><option value="4399629">Sri Hargobindpur</option><option value="4059090">Sri Muktsar Sahib</option><option value="4399757">Sufipind</option><option value="4399787">Sujanpur</option><option value="4399593">Sultanpur</option><option value="4059099">Sunam</option><option value="4399615">Talwandi Bhai</option><option value="4399693">Talwandi Sabo</option><option value="4399513">Talwara</option><option value="4399511">Tapa</option><option value="4059100">Tarantaran</option><option value="4399719">Tharial</option><option value="4399713">Tibri</option><option value="4399515">Urmar Tanda</option><option value="4399551">Zira</option><option value="4399775">Zirakpur</option>

            </select>

            </div>
          </div>
            <br>
          </div>
          <!--
          <div id="select-current-location">
            <div id="cur-google-location">
              <span>fetch current location from Google API</span>
            </div>
          </div>
          <div id="select-provided-location">
            <div id="fetch-provided-location">
              <ul>
                <li id="addresslist1">
                  <div id="Address1">
                    <input type="radio" name="address1" value="Adress1" unselected>
                    <span>Address 1</span>
                  </div>
                </li>
                <li id="addresslist2">
                  <div id="Address2">
                    <input type="radio" name="address2" value="Adress2"selected>
                    <span>Address 2</span>
                  </div>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
        <div id="details-to-show-container"  class="ad-detailed-container">
          <div id="postee-details">
            <div id="detail-to-show">
              <h2>Personal Details Privacy</h2>
            </div>
            <div id="personal-details">
              <ul>
                <li id="number-privacy">
                  <div id="number-detail">
                    <input type="radio" name="provided-no" value="provided-no">
                    <span>Show phone Number Or</span>
                    <input type="text" name="alternative-no" value="" placeholder="Alternative number..">
                  </div>
                </li>
                <li id="email-privacy">
                  <div id="email-detail">
                    <input type="radio" name="provided-email" value="provided-email">
                    <span>Show E-mail Or</span>
                    <input type="text" name="alternative-email" value="" placeholder="Alternative Email..">
                  </div>
                </li>
                <li id="student-privacy">
                  <div id="student-identity-privacy"><br>
                    <span style="font-size: 1.1em;" > &nbsp &nbsp &nbsp Graduation identity Privacy</span>
                    <ul>
                      <li>
                        <div id="student-stream">
                          <input type="radio" name="course-stream" value="">
                          <span>Show My Course/Stream</span>
                        </div>
                      </li>
                      <li>
                        <div id="graduation-year-privacy">
                          <input type="radio" name="graduation-year-privacy" value="">
                          <span>Show Graduation Year</span>
                        </div>
                      </li>
                      <li>
                        <div id="hostel-detail-privacy">
                          <input type="radio" name="hostel-detail-privacy" value="">
                          <span>Show Hostel Detail/Day Scholar</span><br><br>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="accept-pp-container"  class="ad-detailed-container">
          <div id="check-policy-box">
                <input type="checkbox" name="accept_terms" id="accept_terms" value="1"  required>
                <b>I ACCEPT the <a target="_blank" href="privacy-policy.html">Terms of Use & Privacy Policy</a></b>
                <label for="accept_terms" generated="false" class="error"></label><br><br>
                <div style="padding-left:5px;">By checking the box above, you acknowledge and represent that you have read and reviewed the Terms of Use in its entirety and agree to be bound by its terms.</div>
                <br> <small>All fields marked by <span style="color:red;">*</span> must be completed</small>
          </div>
        </div>
        <div class="submission-container">
          <div id="submission-presub-conn">
            <ul>
              <li>
                <div id="preview-conn"  class="ad-detailed-container" ng-app="ng-preview-app" ng-controller="ng-preview-ctrl">
                  <input type="text" id="preview-button" name="Preview" value="&nbsp &nbsp &nbsp &nbsp Preview" style="margin-left: 50px; background: #F2F2F2; border: none;"></input>
                </div>
              </li>
              <li>
                <div id="submit-conn"  class="ad-detailed-container">
                <input type="submit" name="submit" value="Post My Ad"  style="margin:10px 85px;">
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div><br><br><br>

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
                      <a href="index.php"><li> Home </li></a>
                      <a href="aboutus.html"><li>About Us</li></a>
                      <a href="contactform.html"><li>Help</li></a>
                      <a href="privacy-policy.html"><li>Privacy Policy</li></a>
                      <a href="disclaimer.html"><li>Disclaimer</li></a>
                      <a href="wishlist.php"><li>Wish List</li></a>
                  </ul>
              </div>
          </div>
          <div id="footer-section">
              <div id="contact-form">
                  <h2>Contact Us</h2>
                  <div id="contact-post">
                    <form >
                        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...."><br>
                        <textarea name="message"  class="text-input contact-input" placeholder="Your message..."></textarea><br>
                        <input style="cursor:pointer" type="button" class="btn btn-big contact-btn" onclick="alert('Message Sent!')" value="Send">
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


            <script type="text/javascript">
            var pbtn = document.getElementById('preview-button');
            var pbox = document.getElementById('ad-preview-box');
            var pup = document.getElementById('product-upload-container');
            var ppage = document.getElementById('product-page-container');
            var ppageimg = document.getElementById('product-page-container-img');
            var clsit = document.getElementById('closeit');
            clsit.onclick = function(){
              pbox.style.display="none";
              pup.style.display="block";
              ppageimg.style.filter="opacity(.7)";
              ppage.style.position="absolute";

            }
              pbtn.onclick = function(){
                pbox.style.display="block";
                pup.style.display="none";
                ppageimg.style.filter="blur(5px)";
                ppage.style.position="fixed";
              }
            </script>

            <script>
            var app = angular.module('ng-pre', []);
            app.controller('ng-cont', function($scope) {
            });

            </script>

<?php
if(isset($_POST['submit'])){

	$adtitle = $_POST['ad-title'];
 	$addesc = $_POST['ad-descrip'];
  $adop = $_POST['ad-oripri'];
  $admp = $_POST['ad-marpri'];
  $image1 = $_FILES['img1']['name'];
  $image2 = $_FILES['img2']['name'];
	$image3 = $_FILES['img3']['name'];
  $filetmp1 = $_FILES['img1']['tmp_name'];
  $filetmp2 = $_FILES['img2']['tmp_name'];
	$filetmp3 = $_FILES['img3']['tmp_name'];
  $imagedestination1 = "items/".basename($_FILES['img1']['name']);
  $imagedestination2 = "items/".basename($_FILES['img2']['name']);
	$imagedestination3 = "items/".basename($_FILES['img3']['name']);

  move_uploaded_file($filetmp1, $imagedestination1);
  move_uploaded_file($filetmp2, $imagedestination2);
	move_uploaded_file($filetmp3, $imagedestination3);

	$query = "INSERT INTO `SGDATABASE` (`adtitle`,`addesc`,`adop`,`admp`,`image1`,`image2`,`image3`) VALUES ('$adtitle','$addesc','$adop','$admp','$imagedestination1','$imagedestination2','$imagedestination3')";
	$data = mysqli_query($conn, $query);

	if($data){
    echo '<script language="javascript">';
    echo 'alert("Your Ad has Successfully Posted!")';
    echo '</script>';
	}
	else{
		echo "error " . mysqli_error($conn);
	}
}
?>
  </body>
</html>
