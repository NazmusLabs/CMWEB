<!--
:::::::::::::::::::::::::::::::::::::::::::::::::::
     ⭐️ Welcome to the CMWEB Lab Source Code!
:::::::::::::::::::::::::::::::::::::::::::::::::::
In the Name of Allah, the Most Gracious and Most Merciful.

This student site was originally created for the CMWEB program at Illinois Central College. CMWEB is officially certified by the "Web Professional Academy".

System requirements, lab description, documentation, and license information available at the end of this document, insha’Allah.

ℹ About this HTML Document
---------------------------
CMWEB Student Site Webpage
Version 21.0.20.1216 (Gold)
Patch version: 1.20.1217a

(See documentation below for changelog)


Written & designed by Nazmus Shakib Khandaker
Instructor: Shari Tripp

CC-BY-SA 4.0


© 2020 NazmusLabs. Some rights reserved.


So, you are here to view the source code for this page, yes?
Well, I'm glad you did; make yourself at home and explore at your leasure!
-->
<!-- ❓ PHP ❓ -->
<?php
//Starting up...
$alert = "";
$alert_class = "";

if ( isset( $_GET[ 'output' ] ) ) {

  //Enabling admin access...
    $is_authorized = ture;

  //Processing input parameter...
  $status = $_GET[ 'output' ];

  if ( $status != "null" ) {

    $debug_arg = $_GET[ 'debug' ]; /*🚩*/

    if ( $status == 'success' ) {
      $alert_class = 'alert-success-medium';
      $alert = "✅ Done! Your file has uploaded successfully.<br><br><a href=\"index.php?event=logoff#app2\" style=\"color: darkgreen; text-decoration: none; \"><strong>&nbsp &nbsp Sign Out</strong></a>";
      $debug_arg = "";
      $error_code = "";
        
        $view_mode = 'single_image';

    } else {

      $alert_class = 'alert-error-lite';

      switch ( $status ) {
        case 'empty':
          $alert = "<strong>File upload error:<br> </strong><em>\"Oops, you didn't select any images to upload. Select the \"browse\" button to choose an image and then click \"Upload\".\"</em>";
          $error_code = $status;
          break;
        case 'fatal':
          $alert = "<strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"An error occured while trying to uploading this file. Try again later or try uploading a different file.\"</em>";
          $error_code = $status;
          break;
        case 'ext':
          $alert = "<strong><strong>Sorry, there was a problem uploading your file:<br></strong></strong> <em>\"The file type you selected is not allowed. Please upload a jpeg (.jpg, .jpeg) or a GIF (.gif) image.\"</em>";
          $error_code = $status;
          break;
        case 'size':
          $alert = "<strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"The file you selected is too large. Please upload an image that is 1MB or less.\"</em>";
          $error_code = $status;
          break;
        case 'conflict':
          $alert = "<strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"There's already a photo what that file name. Please rename the photo and try uploading again.\"</em>";
          $error_code = $status;
          break;
        default:
          $alert = "<strong>File upload error:<br> </strong><em>\"Oops, something went wrong! Please try again.\"</em>";
          $error_code = $status;
      }
      $debug_dump = "<em><small> ▪ Error Code: $error_code (debug_output = \"$debug_arg\")</small><em><br><a href=\"index.php?event=logoff#app2\" style=\"text-decoration: none; \"><strong>&nbsp Sign Out</strong></a>"; /*🚩*/
    }
  } else {
    $alert_class = 'alert-success-lite';
    $login_status = '✅ You are currently signed in.<br><br><a href="index.php?event=logoff#app2" style="color: darkgreen; text-decoration: none; "><strong>&nbsp &nbsp Sign Out</strong></a>';
  }
} else {
    
  if ( isset( $_POST[ 'submit' ] ) ) {
    $alert_class = 'alert-error-lite';
    $alert = "<strong><strong>Sorry, there was a problem uploading your file:</strong></strong> <em>\"This action requires administrator privileges.\"</em>";
    $error_code = "elevation_required";
    $debug_dump = "<em><small> ▪ Error Code: $error_code (debug_output = \"$debug_arg\")</small>"; /*🚩*/
  } else {
    $error_code = "";
    if ( $_GET[ 'event' ] == "logoff" ) {
      $login_status = "⚠ You Have successfully signed out.";
      $alert_class = 'alert-warning-lite';
    } else {
      $login_status = "⚠ You are not signed in.";
      $alert_class = 'alert-neutral-lite';
    }
  }

}

//loading Gallery...

//Checking for parameters...
if ( isset( $_GET[ 'encoded_path' ] ) ) { //Page will strtup in "single image" mode, Insha'Allah

    $path_decoded = base64_decode(strtr($_GET['encoded_path'], '-_', '+/'));
    $caption_decoded = base64_decode(strtr($_GET['encoded_caption'], '-_', '+/'));

  $display_image = "<div class=\"fullsize-image\"><img src=\"$path_decoded\" alt=\"flowers\" style=\"width: 100%; hight: auto;\" ><div class=\"large-caption\"><p> $caption_decoded</p><br><div><a href=\"index.php?clearance=$clearance_l2#photo\" class=\"button-ornate\">Return to Gallery</a></div></div></div>";

} else { // Page will load in standard mode & display gallery, Insha'Allah.

  //Getting things ready...
  $img_path = "assets/images/";
  //Allocating images
  $images = array(
    /*📸 Smile!*/
    array( "img_name" => "car.jpg",

      "path" => $img_path,

      "alt-text" => "Antique car",

      "caption" => '"Oldtimer" by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/oldtimer-car-fency-colorful-50567/" target="_blank">Pixabay</a>.' ),
    /*📸 Smile!*/
    array( "img_name" => "city.jpg",

      "path" => $img_path,

      "alt-text" => "Cityscape",

      "caption" => 'Photo by <a href="https://pixabay.com/users/wikiimages-1897/" target="_blank">WikiImages</a> on <a href="https://pixabay.com/photos/city-building-night-view-night-11087/" target="_blank">Pixabay</a>.' ),
    /*📸 Smile!*/
    array( "img_name" => "sunset_trees.jpg",

      "path" => $img_path,

      "alt-text" => "Trees in sunset",

      "caption" => 'Photo by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/sunset-san-diego-california-weather-52933/" target="_blank">Pixabay</a>.' ),
    /*📸 Smile!*/
    array( "img_name" => "flowers.jpg",

      "path" => $img_path,

      "alt-text" => "Purple flowers (💜PURPLE!)",

      "caption" => '"Smooth Leaf Aster" by <a href="https://pixabay.com/users/hans-2/" target="_blank">Hans Braxmeier</a> on <a href="https://pixabay.com/photos/smooth-leaf-aster-aster-herbstaster-56225/" target="_blank">Pixabay</a>.' ),
    /*📸 Smile!*/
    array( "img_name" => "fruits.jpg",

      "path" => $img_path,

      "alt-text" => "Some fruits",

      "caption" => '"Pasta Ingredients" by <a href="https://morguefile.com/creative/hotblack" target="_blank">"hotblack"</a> on <a href="https://morguefile.com/p/133487" target="_blank">Morguefile</a>.' )
  );

}

// ❔ The upload form's "Action" attribute is dependent on the current state of "$is_authorized".
if($is_authorized){
    $form_action = 'action="admin/photo_upload.php" method="POST" enctype="multipart/form-data"';
    $admin_banner = 'ATTENTION: You are currently logged in as Administrator.';
} else 
    $form_action = "action=\"index.php#app2\" method='POST'";

?>
<!-- /❓ PHP ❓ -->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Lab 5 - CMWEB 241 NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="21.0.20.1216 (Gold)">
<meta name="patch" content="1.20.1217a">
<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
</head>

<body>
<div class="admin-banner">
  <p><small><?php echo $admin_banner; ?></small></p>
</div>
<!--==============================
	 🚥 START OF HEADER SECION 🚥
	==============================-->

<?php include 'layouts/header.php' ?>

<!--============================
	 🚥 END OF HEADER SECION 🚥
	============================--> 

<!--===========================
	 🎀 START OF FEATURED 🎀
	===========================-->
<div id="featured">
  <h1>Lab 5 - CMWEB 241 - NazmusLabs</h1>
</div>
<!--=========================
	  🎀 END OF FEATURED 🎀
	=========================--> 
<!--===============================
	 📜 START OF CONTENT SECION 📜
	===============================-->
<div class="content-section-light"> 
  <!--///////////////////////
	  📥 START of Container 📥
	  ////////////////////////-->
  <div class="container">
  <h1>Photo Upload</h1>
  <!--Bismillah-->
  <p id="Bismillah"> In the name of Allah, the Most Gracious, Most
    Merciful. </p>
  <!--/Bismillah--> 
  <!--//////////////////////
		   💡 START of Sidebar 💡
		  ////////////////////////-->
  
  <?php include 'layouts/sidebar.php' ?>
  
  <!--//////////////////////////////
		  💡 END of Sidebar Content 💡
		  ////////////////////////////--> 
  <!--//////////////////////////////
		   📖 START of Main Article 📖
		  ////////////////////////////-->
  <article id="intro">
  <section> <!--🔖--> 
    <!--📸 Smile!--> 
    <!--📢 Content Intro 📢-->
    <div class="page-intro"> <img src="assets/graphics/puzzle.svg"
				 alt="A puzzle piece"
				 class="tripple-float" >
      <p>In this lab, image upload system has been added. This feature includes restrictions, such as file size limits, file override protection, file type enforcement, etc. Code has been added to gracefully handle with common types of effors. Additionally a crude form of authentication has been implimented via PHP that only allows uploads if the user is at a signed-in state. Also included in this lab are dynamic UI, text, and banners that reflect a variety of scenarios.</p>
    </div>
    <!--/📢 Content Intro 📢--> 
  </section>
  <!--🔖--> 
  <!--📑 Main Content 📑-->
  <section> <!--🔖-->
    <h2>Main Application</h2>
    <p>Below is the gallery I originally created earlier as part of "lab 6" of the CMWEB 120 course using HTML and CSS. For this lab, I have ported over the gallery here, but this time, I switched out all of the manual HMTL markups for laying out the gallery and rebuilt it using PHP code that will generate the same gallery in a much more effecient manner.</p>
    <p>For this lab, I have hard-coded the image file names and paths in a two-dimentional array that the PHP code can use to generate the gallery.</p>
  </section>
  <!--🔖-->
  
  </div>
  <div class="content-section-navy"> 
    <!--APP 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 START-->
    <section id="app" class="container-wide"> <!--🔖-->
      <h3 id="gallery">Photo Gallery</h3>
      <!--App 1-->
      <p>This next photo gallery has been generated completely from PHP code. I have written the code in php to output a gallery that looks as close to the original CMWEB 120 one (i.e. Gallery A).</p>
      <!--🎨 Gallery-->
      <div class="gallery-container" id="photo">
        <?php
        for ( $i = 1; $i <= 2; $i++ ) {
          foreach ( $images as $daisy ) {

            //pre-processing metadata...
            $path = $daisy[ "path" ] . $daisy[ "img_name" ];
            $alt = $daisy[ "alt-text" ];
            $caption = $daisy[ "caption" ];
              
              //Encoding image metadata...
              $path_encoded = strtr(base64_encode($path), '+/', '-_');
              $caption_encoded = strtr(base64_encode($caption), '+/', '-_');

            echo "
            <!--📸 Smile!-->
            <figure class=\"gallery\"><a href=\"index.php?encoded_path=$path_encoded&encoded_caption=$caption_encoded&clearance=$clearance_m2#gallery\"><img src=\"$path\" alt=\"$alt\" width=\"600\" height=\"400\"></a>
            <figcaption class=\"caption\">$caption</figcaption>
            </figure>";
          }
        }

              //Single Image (Large)
        echo $display_image;

        ?>
      </div>
      <br>
      <br>
      <!--/🎨 Gallery--> 
      
    </section>
    <!--🔖--> 
    
  </div>
  <div class="content-section-grey"> 
    <!--🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧-->
    
    <section> <!--🔖-->
      <div class="container">
        <h2 id="app2">Image Upload</h2>
        <!--App 2--> 
        <!--❓ Output ❓-->
        <div class="<?php echo $alert_class; ?>" style="width: 70%"> <?php echo $alert.$login_status; ?>
          <div style="font-size: medium;"><?php echo "$debug_dump"; ?></div>
        </div>
        <!--❓ Output ❓--> 
      </div>
      <div style="background-color: #D6D6D6; padding-top: 1em; padding-bottom: 1em;">
        <div class="upload-container" style="width: 50%">
          <h2>Upload Photos</h2>
          <!--📨 Form-->
          <form class="feedback-form" <?php echo $form_action;?> >
            <div class="button-wrap">
              <label class="button-lime" for="file">Browse Files...</label>
              <input type="file" name="file" id="file">
              <button class="button-wire" type="submit" name="submit">Upload</button>
            </div>
          </form>
          <!--/📨 Form--> 
          <br>
        </div>
      </div>
    </section>
    <!--🔖--> 
    <!--APP 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 END--> 
  </div>
  <div class="container"><br>
    <section> <!--🔖-->
      <h2>How to Get the Code</h2>
      <img style="float: right; width: 40%" src="assets/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" >
      <p>Because this course deals with PHP getting the code behind these labs won't be as simple as viewing the page source ("CTRL+U on Windows"). All of the PHP code is processed on the server, and the resulting output is an HTML webpage that is passed on to the client's web browser. As a result, the only thing the client can see by viewing the page source is the resulting HMTL and JavaScript code, with no PHP.</p>
      <p>Fortunately, there is a way around this. I have placed all of the PHP source code for this student site for anyone to view, download, and modify. They are hosted on my CMWEB GitHub repository, which you can view from the link below.</p>
      <p><a href="https://github.com/NazmusLabs/CMWEB/tree/master/sites/cmweb241" target="_blank">View the php source codes for this course on GitHub</a></p>
    </section>
    <!--🔖--> 
    <!--/📑 Main Content 📑--> 
    <!--🎁 Bonus Content 🎁-->
    <h2>External Links</h2>
    <!--🔗 External Links-->
    <ul>
      <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">A Complete Guide to Flexbox</a></li>
      <li><a href="https://www.goodreads.com/quotes" target="_blank">Popular Quotes (it's where I get my quotes for this website)</a></li>
      <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">Basic Concept of Flexbox - Documentation from MDN (excellent reference material)</a></li>
      <li><a href="https://answers.microsoft.com/en-us/microsoftedge/forum/msedge_other-msedge_win10/in-edge-surf-game-we-can-become-the-octopus/7b1a3d82-bb3b-41e6-b6c8-0a36ceac45b1" target="_blank">Did you know Microsoft Edge ships with an "in-browser" game? It even works without internet connection! Learn how to become an octopus in the game!</a></li>
    </ul>
    <!--/🔗 External Links-->
    <h3>Thanks for visiting!</h3>
    <!--/🎁 Bonus Content 🎁--> <em><small>Featured image credit: Photo by <a href="https://unsplash.com/@rmvisuals" target="_blank">Renaldo Matamoro </a> on <a href="https://unsplash.com/photos/nrQ3V0A4bxk" target="_blank">Unsplash</a>.</small></em>
    </article>
    <!--/////////////////////////////
		   📖 END of Main Article 📖
		  ///////////////////////////--> 
  </div>
  <!--//////////////////////
	  📤 END of Container 📤
	  //////////////////////--> 
</div>
<!--=============================
	 📜 END OF CONTENT SECION 📜
	=============================-->

<?php
include 'inc/config.php';
include 'layouts/footer.php';
?>

<!--🌐 End of HTML Document 🌐--> 

<!--
Thanks for stopping by the back-stage!

© 2020 NazmusLabs. Some rights reserved. 

CMWEB Student Site
-------------------
Written By Nazmus Shakib Khandaker

CC-BY-SA 4.0

======================
   📘 DOCUMENTATION
======================
System requirements:  Chromium based web browser (Google Chrome, Microsoft Edge, Opera, Brave, etc) version 87 or later. Apple Safari 14 or later. Mozilla Firefox 84 or later. Microsoft Internet Explorer and Microsoft Edge (Legacy) are not supported.

📖 Introduction - NazmusLabs Help
----------------------------------
LAB OBJECTIVE: To build a simple calculator based on predefined specs using PHP server-side scripting.

This student site was originally created for the CMWEB program at Illinois Central College. CMWEB is officially certified by the "Web Professional Academy".

📣 What’s New in v21
----------------------------
 - Version 21 is a major upgrade. Along with dozens of minor improvements and fixes, it is packed with several new features and enhancements! It's one of the biggest updates yet.
 - [CSS] several new styles of alert messages that ads to the variety and more wide range of scenarios.
 - [CSS] Feedback-form now uses flexbox.
 - [CSS] Brand new lime button. Great for uploads and/or sign-ups.
 - [CSS] Updates and quality of life improvements to the styling throughout.
 - [PHP] First customization features have been added. A new config file allows you to set the format of the copyright date.
 - [PHP] Multiple startup modes are now possible, providing users different experiences and content based on contexts and permissions.
 - [PHP][CSS] New UI to identify logged in state. Banner will display letting you know you are logged in.
 - Bug fixes and quality improvements.
 - Minor updates to documentation.
 - Updated emoji based markers and designators in the in-line documentation.
 - Minimum system requirements have been revised.

⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects.

📝 Patch Notes for 19.0
--------------------------
20.0 (Update 2)
Patch 1.20.1227c
 - [PHP] Main document broken down into multiple php files and connected using php includes.
 - Updated document in-line comment to better accomidate php include statements.
 - Updates to the sidebar navigation

20.0 (Update 1)
Patch 1.20.1217b
 - Fixed an issue where large number of documentation text as well as some HTML markups had several duplicates.

21.0 (Gold)
Patch 1.20.1216a
 - Initial publication

*See documentation on version numbers for more info.

📖 Additional Information
---------------------------
Below are some general documentation that applies to this and other CMWEB webpage source codes. Contextual documentation on specefic features or layout may be available in-line with the code.

💡 Terminology 
----------------
Daisy: the term "Daisy" may be used to indicate the client device that is rendering the webpage. E.g. files stored on "Daisy” vs files stored on server”.

It may be used in names of variables that relate specefically to the end-device. For instance, a variable that holds the content to be read aloud by the device may have "Daisy" in its name (as in “Daisy” will speak the following text).

Other examples: "Daisy set to silent", "Daisy on airplane mode", "Daisy will execute this javascript if...", etc.

    ****

Cordelia: The term "Cordelia" may be used when referring to the server. Variables with this designation may be used in pages containing PHP or any other server side code.

💡 Getting Help
-------------------
Refer to in-line comments throughout this and all related source codes. Addional documentation is contextually available where appropriate.


📖 License Information
-------------------------
This work is licensed under the Creative Commons Attribution-ShareAlike 4.0 International License.

To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/4.0/ or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.

⌛️ End of Document
-------------------
  /// Thank you! /// 
-->