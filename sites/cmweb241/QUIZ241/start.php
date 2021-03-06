<?php
session_start();
?>
<!DOCTYPE html>
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
<!-- ❓ Starting Up... ❓ -->
<?php
//⌛Getting things ready...
$status = $_GET[ 'output_status' ];
$sys_notif = $_GET[ 'sys_notif' ];
$log_path_authorized = urlencode( "admin/authorized.txt" );
$log_path_unauthorized = urlencode( "admin/unauthorized.txt" );
$alert_class = $is_authorized ? 'alert-success-light' : 'alert-neutral-light';
$command = $_GET[ 'command' ];
$username = $_SESSION[ 'user' ];
$input = $_GET[ 'input' ];

//⌛Loading saved settings...
REQUIRE 'includes/config.php';

//⌛Setting Privilages...
if ( isset( $_SESSION[ 'usergroup' ] ) && $_SESSION[ 'usergroup' ] === 'administrator' ) {
  //⌛Enabling admin access...
  $is_authorized = true;
  $sys_notif_class = 'sys-notif-banner-yellow';
  $sys_notif = "Hello, $username";

} else {
  $is_authorized = false;
  $sys_notif_class = 'sys-notif-banner';
}

//⌛Connecting to database...
REQUIRE( "../../../../galleryDBaccess.php" );
//⌛Creating query...
$query = 'SELECT filename, caption FROM photographs';
//⌛Getting result...
$result = mysqli_query( $conn, $query );

//⌛Pre-processing page content...
if ( $status != '' ) {
  switch ( $status ) {
    case 'empty':
      $alert = 'You must first enter a value.';
      $error_code = 'ERROR: ' . $status;
      $alert_class = 'alert-error';
      break;
    case 'not_numeric':
      $alert = 'Please enter a number.';
      $alert_class = 'alert-error';
      $error_code = 'ERROR: ' . $status;
      break;
    case 'out_of_bounds':
      $alert = "Values less than 1 or greater than 2 won't work. Please try again.";
      $alert_class = 'alert-error';
      $error_code = 'ERROR: ' . $status;
      break;
    default:
      $alert = "⚠️ <strong>Something went wrong...<br> </strong><em>\"An error occured while trying to process your request. Please try again later.\"</em>";
      $alert_class = 'alert-error-light';
      $error_code = 'ERROR: ' . $status;
  }

} else {
  $alert = $is_authorized ? "✅ You are currenlty signed in and can upload images to the gallery, insha'Allah" : '⚠️ You are currently not signed in.';

}

/* 📖 Documentation
----------------------
This next code is processing dynamic UI related code. Depending on the status of "$is_authroized", the UI the user sees will differ, Insha'Allah.*/

/* Alert Messages /*
/*🍩---🍩        🍩---🍩*/


/*🍩---🍩        🍩---🍩*/
/* End of Alert Messages */

/* Photo Gallery /*
/*🥫---🥫        🥫---🥫*/

//⌛Checking for parameters...
if ( isset( $_GET[ 'encoded_path' ] ) && $_GET[ 'encoded_caption' ] != '' ) { //❔ Page will strtup in "single image" mode, Insha'Allah

  $path_decoded = urldecode( $_GET[ 'encoded_path' ] );
  $caption_decoded = urldecode( $_GET[ 'encoded_caption' ] );

  $lily_heading = "Image Preview";
  $lily_message = "This large view of the photo is generated from PHP code, based on the information provided to it through the URL.";

  $display_image = "<div class=\"fullsize-image\"><img src=\"$path_decoded\" alt=\"flowers\" style=\"width: 100%; hight: auto;\" ><div class=\"large-caption\"><p> $caption_decoded</p><br><div><a href=\"start.php?#app1\" class=\"button-ornate\"><span class=\"button-text-decoration\">Return to Gallery</span></a></div></div></div>";

} else { //❔ Page will load in standard mode & display gallery, Insha'Allah.

  //⌛Getting things ready...
  $lily_heading = "Photo Gallery";
  $lily_message = 'This photo gallery is generated using PHP code. Click on any of the images below to view a larger version of it.';

  //📸Smile!
  //⌛Fetching data from database & allocating images...
  $img_path = IMAGE_PATH;
  $images = mysqli_fetch_all( $result, MYSQLI_ASSOC );
}

/*🥫---🥫        🥫---🥫*/
/* End of Photo Gallery */

/* Administration Menu/*
/*☕---☕        ☕---☕*/

/*☕---☕        ☕---☕*/
/* End of Administration Menu */

//⌛Cleaning up...
mysqli_free_result( $result );
mysqli_close( $conn );
?>
<!-- /❓ End of PHP startup sequence ❓ -->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Photo Gallery - CMWEB 241 NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="21.0.20.1216 (Gold)">
<meta name="patch" content="1.20.1217a">
<link rel="stylesheet" type="text/css" href="css/quiz.css">
</head>

<body>
<!--🥤-1-🥤-->
<div class="<?php echo $sys_notif_class ?>" >
  <p style="padding-left: 1em" ><small><?php echo $sys_notif ?> <?php echo $is_authorized ? '<a style="color: white; text-decoration: none; position: absolute; right: 2em" href="admin/admin.php?command=logoff"><strong>Sign Out</strong></a>' : '' ?></small></p>
</div>
<!--/🥤-1-🥤--> 
<!--==============================
	 🚥 START OF HEADER SECION 🚥
	==============================-->

<?php include 'includes/header.php' ?>

<!--============================
	 🚥 END OF HEADER SECION 🚥
	============================--> 

<!--===========================
	 🎀 START OF FEATURED 🎀
	===========================--> 
<!--🍧-1-🍧-->
<div id="featured">
  <h1>Special - CMWEB 241 - NazmusLabs</h1>
</div>
<!--🍧-1-🍧--> 
<!--=========================
	  🎀 END OF FEATURED 🎀
	=========================--> 

<!--=================================
	 📕 START OF CONTENT SEGMENT A 📕
	=================================-->
<div class="content-section-light"> 
  <!--🍨-1-🍨-->
  <div class="container" style="position: relative"> 
    <!--🍦-2-🍦-->
    <h1>Semester Wrap-up Quiz (QUIZ241)</h1>
    <!--Bismillah--> 
    <!--⚓-->
    <p id="Bismillah"> In the name of Allah, the Most Gracious, Most Merciful. </p>
    <!--/Bismillah--> 
    <!--========================
	 🧭 START OF SIDEBAR 🧭
	========================-->
    <?php include 'includes/sidebar.php' ?>
    <!--======================
	 🧭 END OF SIDEBAR 🧭
	======================--> 
    
    <!--========================
	 📃 START OF ARTICLE 📃
	========================-->
    <article id="intro"> 
      <!--====================
	 📢 INTRODUCTION 📢
	====================-->
      <section> <!--🔖--> 
        <!--👓-3👓-->
        <div class="page-intro"> <img src="images/graphics/circles.svg"
				 alt="Circles"
				 class="tripple-float" style="max-height: 300px; width: auto" > <!--📸 Smile!--> 
          <!--⚓-->
          <p>Welcome to the the QUIZ 241  Demo. This is a mod of the Photo Gallery application, that is a culmunation of a whole semester's worth of effort, with no exageration. The entire PHP course at Illinois Central College, CMWEB, involved developing this application, weith each lab and assignment either directly contributing to the code to what would eventually become this multi-functional web applicaion or covered one or more of several variety of concepts that went into creating this application. Without further ado, let's get straight into it; select the <em>Jump to the Demo</em> button to begin.</p>
          <!--⚓-->
          <p style="text-align: center"><!--🔗 Click!--> <a class="button-ornate" href="#app2"> <span class="button-text-decoration">Jump to the Demo</span> </a></p>
        </div>
        <!--👓-3👓--> 
        <!--🔖--> 
      </section>
      
      <!--=====================
	 📢 END OF INTRO 📢
	=====================--> 
      
      <!--=============================
	 📖 START OF MAIN CONTENT 📖
	==============================-->
      
      <section> <!--🔖-->
        <h2>Main Application</h2>
        <p>This image gallery below dates all the way back to "<a href="/sites/cmweb120/labs/lab6/lab6.html">lab 6 of CMWEB 120</a>". What started out as nothing more than a hand coded HTML photo gallery is now a fully dynamic PHP application.</p>
        <p>This application uses PHP code to grab the necessary file metadata from a MySQL database, from which it then creates a two-dimentional array that is used to populate the image gallery with content.</p>
        <!--🔖--> 
      </section>
    </article>
    <!--====================
	 📃 END OF ARTICLE 📃
	========================--> 
  </div>
  <!--🍦-2-🍦--> 
</div>
<!--🍨-1-🍨--> 
<!--=================================
	 📕 END OF CONTENT SEGMENT A 📕
	=================================--> 

<!--=================================
	 📗 START OF CONTENT SEGMENT B 📗
	=================================--> 

<!--=====================
	 🍰 APPLICATION I 🍰
	=====================--> 
<!--🍫-1-🍫-->
<div class="content-section-navy" id="app">
  <section id="app1" class="container-wide"> <!--🔖-->
    <h3 id="gallery"><?php echo $lily_heading ?></h3>
    <!--🚩--> <!--🚩-->
    <p style="padding-bottom: 1em" ><?php echo $lily_message ?></p>
    <!--🍬-2-🍬-->
    <div class="gallery-container" id="photo"> 
      <!--🎨 Image Gallery 🎨-->
      <?php
      //❔ Dsiplay photo gallery
      foreach ( $images as $daisy ) {
        //⌛Pre-processing metadata...
        $path = $img_path . $daisy[ "filename" ];
        $alt = $daisy[ "caption" ];
        $caption = $daisy[ "caption" ];

        //⌛Encoding image metadata...
        $path_encoded = urlencode( $path );
        $caption_encoded = urlencode( $caption );

        echo "
            <!--📸Smile!-->
            <figure class=\"gallery\"><a href=\"start.php?encoded_path=$path_encoded&encoded_caption=$caption_encoded#gallery\"><img src=\"$path\" alt=\"$alt\" width=\"600\" height=\"400\"></a>
            <figcaption class=\"caption\">$caption</figcaption>
            </figure>";
      }

      //❔ Display single image (Large);
      echo $display_image;

      ?>
    </div>
    <!--🍬-1-🍬--> 
    <br>
    <!--🎨 /Image Gallery 🎨--> 
    <!--🔖--> 
  </section>
</div>
<!--🍫-1-🍫--> 

<!--=====================
	 🍰 END OF APP I 🍰
	=====================--> 

<!--=======================
	 🧁 APPLICATION II  🧁
	=======================-->
<div class="content-section-grey" id="app">
<!--🍚-1-🍚-->
<section> <!--🔖--> 
  <!--🍟-2-🍟-->
  <div class="container" id="app2">
    <h2 style="color: #131A24; padding-top: 2em" >Demo Input Center</h2>
    <!--⚓-->
    <p><strong> For this demo application, please enter a value of 1 or 2 in the text box below, then select "GO".</strong> </p>
    <!--❓ Alert Box ❓-->
    <div class="<?php echo $alert_class; ?>" style="width: 70%"> <?php echo $alert; ?>
      <div style="font-size: medium;"><?php echo $error_code; ?></div>
    </div>
    <!--❓ /Alert Box ❓--> 
  </div>
  <!--/🍟-2-🍟--> 
  
  <!--🌳 -2- 🌳-->
  <div style="background-color: #EEEEF2;" >
    <div class="container" >
      <h2 style="color: #131A24" ><!--App 2--></h2>
    </div>
    
    <!--🌴-3-🌴-->
    <div>
      <h1 style="text-align: center">Demo</h1>
      <!--📨 Form-->
      <form class="feedback-form" action="quiz.php" method="POST" style="max-width: 20em;">
        <!--💐 -4- 💐-->
        <div class="form-group">
          <label for="input">Enter a Number</label>
          <input type="text" id="input" name="input" value="<?php echo $input ?>" />
          <!--❔ Preserves previously enter value--> 
        </div>
        <!--💐 -4- 💐--> 
        <!--🍭 -4- 🍭-->
        <div>
          <input class="button" type="submit" value="GO" id="submit" name="submit" >
          <input class="button" type="reset" value="Clear Form" name="reset-button" id="reset" />
        </div>
        <!--🍭 -4- 🍭-->
      </form>
      <!--/📨 Form--> 
    </div>
    <br >
  </div>
  <!--🌴 -3- 🌴-->
  </div>
  <!--🌳 -2- 🌳--> 
  <!--🔖--> 
</section>
</div>
<!--/🍚-1-🍚--> 
<!--======================
	 🧁 END OF APP II  🧁
	======================--> 
<!--================================
	 📗 END OF CONTENT SEGMENT B 📗
	================================--> 

<!--=================================
	 📘 START OF CONTENT SEGMENT C 📘
	=================================--> 
<!--===========================
	 📃 START OF ARTICLE II 📃
	===========================-->
<article> 
  <!--/🥨-1-🥨-->
  <div style="padding-bottom: 1.5em" >
    <div class="container"><br>
      <!--🍷-2-🍷-->
      <section> <!--🔖-->
        <h2>How to Get the Code</h2>
        <!--🚩--> <!--🚩--> 
        <img style="float: right; max-height: 1000px; width: auto" src="images/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" > <!--📸Smile!--> 
        <!--⚓-->
        <p>Because this course deals with PHP getting the code behind these labs won't be as simple as viewing the page source ("CTRL+U on Windows"). All of the PHP code is processed on the server, and the resulting output is an HTML webpage that is passed on to the client's web browser. As a result, the only thing the client can see by viewing the page source is the resulting HMTL and JavaScript code, with no PHP.</p>
        <!--⚓-->
        <p>Fortunately, there is a way around this. I have placed all of the PHP source code for this student site for anyone to view, download, and modify. They are hosted on my CMWEB GitHub repository, which you can view from the link below.</p>
        <!--⚓-->
        <p><a href="https://github.com/NazmusLabs/CMWEB/tree/master/sites/cmweb241" target="_blank">View the php source codes for this course on GitHub</a></p>
        <!--🔖--> 
      </section>
    </div>
    <!--/🍷-2-🍷--> 
  </div>
  <!--🥨-1-🥨--> 
  <!--============================
	 📖 END OF MAIN CONTENT 📖
	=============================--> 
  
  <!--===============================
	 💎 START OF BONUS CONTENT 💎
	===============================--> 
  <!--🍳-1-🍳-->
  <div class="content-section-light" <?php echo $is_authorized ? 'style="padding-top: 0"': '' ?> > 
    <!--🔔-1-🔔-->
    <aside class="container">
      <h2>External Links</h2>
      <!--📜--> <!--📜-->
      <ul>
        <!--🔗 Click!-->
        <li><a href="https://color.adobe.com/color-wheel-game" target="_blank">Color Wheel Game</a></li>
        <!--🔗 Click!-->
        <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">A Complete Guide to Flexbox</a></li>
        <!--🔗 Click!-->
        <li><a href="https://www.goodreads.com/quotes" target="_blank">Popular Quotes (it's where I get my quotes for this website)</a></li>
        <!--🔗 Click!-->
        <li><a href="http://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF" target="_blank">Create Your Own Color Pallete</a></li>
        <!--🔗 Click!-->
        <li><a href="https://answers.microsoft.com/en-us/microsoftedge/forum/msedge_other-msedge_win10/in-edge-surf-game-we-can-become-the-octopus/7b1a3d82-bb3b-41e6-b6c8-0a36ceac45b1" target="_blank">Did you know Microsoft Edge ships with an "in-browser" game? It even works without internet connection! Learn how to become an octopus in the game!</a></li>
      </ul>
      <!--📜--> <!--📜-->
      <h3>Thanks for visiting!</h3>
      <!--📸Smile!--> <!--📸Smile!--> 
      <em><small>Featured image credit:
      Photo by <a href="https://unsplash.com/@rmvisuals" target="_blank">Renaldo Matamoro </a> on <a href="https://unsplash.com/photos/nrQ3V0A4bxk" target="_blank">Unsplash</a>..</small></em> 
      <!--📸Smile!--> <!--📸Smile!--> 
    </aside>
    <!--🔔-1-🔔--> 
    <!--============================
	 💎 END OF BONUS CONTENT 💎
	============================--> 
  </div>
  <!--🍳-1-🍳--> 
</article>
<!--=========================
	 📃 END OF ARTICLE II 📃
	=========================--> 
<!--================================
	 📘 END OF CONTENT SEGMENT C 📘
	================================-->

<?php
include 'includes/footer.php';
?>

<!--🌐 End of HTML Document 🌐-->
</body>
</html>
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
 - 

⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects. This DOES NOT pertain to the PATCH NOTES below, which may document changes of any type that are made after initial publication.


📝 Patch Notes for 19.0
--------------------------
25.0 (update 6)
Patch 1.21.127f
 - Fixed an issue which caused the resulting HTML generated by the PHP interpreter would fail w3 validation.
 - Updates to the documentation
 - Quality-of-life updates to code indentations

25.0 (Update 5)
Patch 1.21.117e
 - Fixed an issue where some SVG images may appear overly large on high resolution displays or when the site is zoomed below 100%.
 - Updated incorrect button text
 - Updates to the sidebar
 - Button to jump to the gallery

25.0 (Update 4)
Patch 1.21.117c
 - Udates to main and footer nav-bars which enables the "Project" menu item.
 - Updates to the footer nav-bar that updates the link for the "Labs" menu item.

25.0 (Update 3)
Patch 1.21.115d
 - [PHP] Updates to the delete_photo.php to enable protection for pre-installed images. Attempting to delete these photos results in an error (insha'Allah). Users should still be able to delete photos uploaded by users to the gallery after the fact.
 - [PHP] Cumulative bug fixes and improvements to the sign-in experience
 - [PHP] Cumulative bug fixes for the Photo Gallery application
 - Content updates, with a few additions and general improvements to existing text accross the board.
 - Updated sidebar links
 - Fixed an issue where certain graphics would become disproportionately large on high-resolution displays or when the site viewed at zoom levels significanly below 100%.
 - Fixed an issue where the website logo was not properly alligned.

25.0 (Update 2)
Patch 1.21.112b
 - Added new SVG graphics
 - Added new human cut-out images (Image Credit: Microsoft)
 - [PHP] Bug fixes
 - [PHP] Cumulative bug fixes and improvements to the sign-in experience
 - [PHP] Cumulative bug fixes for the Photo Gallery application

25.0 (Update 1)
Patch 1.21.129a
 - Major updates to the in-line documentation. Emojie-based markers are now more complete and consistent.
 - General documentation updates
 - [PHP] Updates and improvements to in-line comments
 - [PHP] Bug fixes and general improvements

25.0 (Gold)
Release 1.20.1228
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