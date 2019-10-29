<?php
include("connecttodatabase.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Client Side InterFace</title>
    <link rel="stylesheet" href="/css/client-product-upload.css">
    <link rel="stylesheet" href="/javascript/client-product-upload.js">
  </head>
  <body>
    <div id="product-page-container">
      <div id="product-upload-container">
        <form class="" action="index.html" method="post">
        <div id="ad-header-container">
          <div id="ad-header">
            <h2> <span>Post Your Product</span> </h2>
          </div>
        </div>
        <div id="post-ad-container">
          <div id="post-ad-details">
            <div id="post-ad"><h3>Enter Ad details<h3></div>
            <div id="ad-detail-container">
              <div id="ad-detail">
                <div id="ad-detail-title"><span>Ad Title*<span></div>
                <div id="enter-ad-detail">
                  <input type="text" name="ad-title" value="" placeholder="Enter Ad title here..." maxlength="40" />
                </div>
                <div id="ad-description">Ad Description</div>
                <div id="enter-ad-description">
                    <input type="text" name="ad-description" value="" placeholder="Enter Ad description..." style="height:120px; width:500px;">
                </div>
                <div id="catagory-container">
                  <div id="ad-catagory">Catagory</div>
                  <div id="select-catagory">
                    <select id="product-catagory" name="catagory">
                      <option value="Furniture" >Furniture</option>
                      <option value="electronic-devices">Electronics Devices</option>
                      <option value="gadgets">Gadgets</option>
                      <option value="vehicle">Vehicle</option>
                      <option value="study-material" selected>Study Material</option>
                      <option value="sport">Sport</option>
                      <option value="fashion">Fashion</option>
                      <option value="services">Services</option>
                      <option value="hobbies">Hobbies</option>
                      <option value="mobile-accessories">Mobile Accessories</option>
                      <option value="laptop-accessories">Laptop Accessories</option>
                    </select>
                  </div>
                  <div id="select-sub-catagory">
                    <div id="ad-sub-catagory">Sub-Catagory</div>
                    <div id="product-sub-catagory" name="sub-catagory">
                      <select id="type-furniture" name="furniture">
                        <option value="studytable">Study Table</option>
                        <option value="mattress">Mattress</option>
                        <option value="pillow">Pillow</option>
                        <option value="other-furniture">Other</option>
                      </select>
                      <select id="type-electronic-devices" name="electronic-devices">
                        <option value="lcdmonitor">LCD/Monitor & Computer</option>
                        <option value="mobile">Mobile</option>
                        <option value="Laptop">Laptop</option>
                        <option value="other-electronic-devices">Other</option>
                      </select>
                      <select id="type-vehicle" name="vehicle">
                        <option value="bike">Bike</option>
                        <option value="cycle">Cycle</option>
                        <option value="car">Car</option>
                        <option value="other-vehicle">Other</option>
                      </select>
                      <select id="type-study-material" name="study-material">
                        <option value="books">Books</option>
                        <option value="notes">Notes</option>
                        <option value="other-study-material">Other</option>
                      </select>
                      <select id="type-sports" name="sports">
                        <option value="sports-kit">Sport kit</option>
                        <option value="sports-wear">Sports Wear</option>
                        <option value="sports-equipment">Sports Equipment</option>
                        <option value="other-sports">Other</option>
                      </select>
                      <select id="type-fashion" name="fashion">
                        <option value="male-fashion">Male</option>
                        <option value="female-fashion">Female</option>
                        <option value="other-fashion">Other</option>
                      </select>
                      <select id="type-hobbies" name="hobbies">
                        <option value="musical-instruments">Musical Instruments</option>
                        <option value="gym-fitness">Gym & Fitness</option>
                        <option value="other-hobbies">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Location-container">
          <div id="loc-con"> <h3>Location</h3> </div>
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
            <div id="sel-man-loc-city">City</div>
            <div id="sel-man-loc-city-div">
              <div id="smlc-div-001">
                <select id="smlc001" name="AandN">
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
              </div>
            </div>
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
        <div id="details-to-show-container">
          <div id="postee-details">
            <div id="detail-to-show">
              <h3>Personal Details Privacy</h3>
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
                  <div id="student-identity-privacy">
                    <span>Graduation identity Privacy</span>
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
                          <span>Show Hostel Detail/Day Scholar</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="accept-pp-container">
          <div id="check-policy-box">
                <input type="checkbox" name="accept_terms" id="accept_terms" value="1">
                <b>I ACCEPT the <a target="_blank" href="privacy-policy.html">Terms of Use & Privacy Policy</a></b>
                <label for="accept_terms" generated="false" class="error"></label><br>
                <div style="padding-left:5px;">By checking the box above, you acknowledge and represent that you have read and reviewed the Terms of Use in its entirety and agree to be bound by its terms.</div>
                <small>All fields marked by <span style="color:red;">*</span> must be completed</small>
          </div>
        </div>
        <div class="submission-container">
          <div id="submission-presub-conn">
            <div id="preview-conn">
              <input type="submit" name="Preview" value="Preview">
            </div>
            <div id="submit-conn">
              <input type="submit" name="submit" value="Post My Ad">
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>

<?php
$ad_id = $_GET['ad-id'];
$ad_title = $_GET['ad-title'];
$ad_title = $_GET['ad-description'];
$ad_title = $_GET['ad-title'];
$query = "INSERT INTO ADUPLOAD VALUES ('1A','electronics book','It is a good book','book','electronics','UP','bijnor','a.png')";
$data = mysqli_query($conn, $query);

if($data){
	echo "inserted";
}
?>
  </body>
</html>