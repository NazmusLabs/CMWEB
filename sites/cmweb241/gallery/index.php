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
Version 25.0.21.120 (Update 6)
Patch version: 1.21.127f

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

//⌛Loading saved settings...
REQUIRE 'inc/config.php';

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

  if ( $status == 'success' ) {
    $alert_class = 'alert-success-medium';
    $alert = '✅ Success! The operation comleted successfully.';
    $error_code = '';

  } else {


    switch ( $status ) {
      case 'empty':
        $alert = "<strong>File upload error:<br> </strong><em>\"Oops, you didn't select any images to upload. Select the \"browse\" button to choose an image and then click \"Upload\".\"</em>";
        $error_code = 'ERROR: ' . $status;
        $alert_class = 'alert-error';
        break;
      case 'fatal':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"An error occured while trying to uploading this file. Try again later or try uploading a different file.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'ext':
        $alert = "⚠️ <strong><strong>Sorry, there was a problem uploading your file:<br></strong></strong> <em>\"The file type you selected is not allowed. Please upload a PNG, jpeg (.jpg, .jpeg) or a GIF (.gif) file.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'size':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"The file you selected is too large. Please upload an image that is 1MB or less.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'conflict':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"There's already a photo what that file name. Please rename the photo and try uploading again.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'credentials_invalid':
        $alert = "<strong>Sorry, we couldn't sign you in:<br></strong> <em>\"The user name and/or password you entered did not match our records.\"</em>";
        $alert_class = 'alert-error';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'elevation_required':
        $alert = "<strong>Operation Canceled: Needs Elevated Privilages <br></strong> <em>You are not authorized to perform that action. Please sign in first.</em>";
        $alert_class = 'alert-error';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'access_denied':
        $alert = "<strong>Operation Canceled: Access Denied <br></strong> <em>You are not authorized to view that item. Please sign in first.</em>";
        $alert_class = 'alert-error';
        $error_code = 'ERROR: ' . $status;
        break;
      case 'access_granted':
        $alert = "<strong>Sign-in Successful!<br></strong> <em>You are currently signed in as Administrator.</em>";
        $alert_class = 'alert-success';
        $error_code = '';
        break;
      default:
        $alert = "⚠️ <strong>Something went wrong...<br> </strong><em>\"An error occured while trying to process your request. Please try again later.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = 'ERROR: ' . $status;
    }
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

//Checking for parameters...
if ( isset( $_GET[ 'encoded_path' ] ) ) { //Page will strtup in "single image" mode, Insha'Allah

  $path_decoded = urldecode( $_GET[ 'encoded_path' ] );

  if ( isset( $_GET[ 'encoded_caption' ] ) ) {
    $caption_decoded = urldecode( $_GET[ 'encoded_caption' ] );

    $lily_heading = "Image Preview";
    $lily_message = "This large view of the photo is generated from PHP code, based on the information provided to it through the URL.";

    $display_image = "<div class=\"fullsize-image\"><img src=\"$path_decoded\" alt=\"flowers\" style=\"width: 100%; hight: auto;\" ><div class=\"large-caption\"><p> $caption_decoded</p><br><div><a href=\"index.php?#app1\" class=\"button-ornate\"><span class=\"button-text-decoration\">Return to Gallery</span></a></div></div></div>";

  } else {
    //⌛loading log file
    $log_path_decoded = urldecode( $_GET[ 'encoded_path' ] );

    $lily_heading = 'Activity Log';
    if ( $is_authorized ) {
      $lily_message = 'Records of previous login attempts are displayed below, based on the selected filter.';

      $file = fopen( $log_path_decoded, "r" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

      $login_log = '<p style="color: yellow; font-family: Consolas;">';

      /* 📖 Documentation
      ---------------------
      Loops through processing one character or line at a time―depending on the function―until it reaches end of file.*/
      while ( !feof( $file ) ) {
        //$new_mama_qq = $mama_qq . $mama_qq;
        $login_log = $login_log . fgets( $file ) . "<br>"; //gets single line
      }
      //end of if statement
      fclose( $file );
      $login_log = $login_log . '</p>';
    } else {
      $sys_notif = 'You are anot authorized to access that. Please sign in first.';
      $lily_message = '<em>You do not have permission to view this content</em>.';
    }
    $return_button = '<a href="index.php#app1" class="button-ornate">Return to Gallery</a> <a href="index.php#admin" class="button-ornate">Admin Center</a>' . " <a href=\"admin/admin.php?command=$command\" class=\"button-ornate-red\">Clear History</a>";

  }

} else { // Page will load in standard mode & display gallery, Insha'Allah.

  //⌛Getting things ready...
  $lily_heading = "Photo Gallery";
  $lily_message = !$_GET[ 'delete' ] ? 'This photo gallery is generated using PHP code. Click on any of the images below to view a larger version of it.' : 'You are currently in delete mode. Select a photo to delete it.';

  //📸Smile!
  //⌛Fetching data from database & allocating images...
  $img_path = IMAGE_PATH;
  $images = mysqli_fetch_all( $result, MYSQLI_ASSOC );
}

/*🥫---🥫        🥫---🥫*/
/* End of Photo Gallery */

/* User Forms /*
/*🧁---🧁        🧁---🧁*/

$daisy_message = $is_authorized ? "Welcome to the image upload center! Because you are signed in, you can now upload images to the site, Insha'Allah! Simply select the browse button to choose an image and then click Upload." : 'You must sign in before you can upload photos to the gallery. Please enter your username and password; then select "Sign In" to continue.';

$daisy_form1 = "
            <h1 style=\"text-align: center\"> Sign in </h1>
            <!--📨 Form-->
            <form class=\"feedback-form\" action=\"admin/admin.php\" method=\"POST\" style=\"max-width: 20em;\">
              <!--💐 -4- 💐--> 
              <div class=\"form-group\">
                <label for=\"username\">Username</label>
                <input type=\"text\" id=\"username\" name=\"username\" />
                <!--❔ Preserves previously enter value--> 
              </div> <!--💐 -4- 💐--> 
              <!--🪁 -4- 🪁--> 
              <div class=\"form-group\"> 
                <label for=\"password\">Password</label>
                <input type=\"password\" id=\"password\" name=\"password\" />
              </div> <!--🪁 -4- 🪁--> 
              <!--🍭 -4- 🍭--> 
              <div>
                <input class=\"button\" type=\"submit\" value=\"Sign in\" id=\"login\" name=\"login\" >
                <input class=\"button\" type=\"reset\" value=\"Clear Form\" name=\"reset-button\" id=\"reset\" />
              </div> <!--🍭 -4- 🍭--> 
            </form> <!--/📨 Form-->
          </div>
          <br >
          ";
$daisy_form2 = '
            <!--🌻 -4- 🌻--> 
            <div> 
                <h2>Upload Photos</h2>
                <!--📨 Form-->
                <form class="upload-form" action="admin/photo_upload.php" method="POST" enctype="multipart/form-data" >
                  <!--🌺 -5- 🌺--> 
                  <div class="button-wrap"> 
                    <label class="button-lime" for="file">Browse Files...</label>
                    <input type="file" name="file" id="file">
                    <button class="button-wire" type="submit" name="submit">Upload</button>
                  </div> <!--🌺 -5- 🌺--> 
                </form> <!--/📨 Form--> 
              </div> <!--🌻 -4- 🌻--> 
              <br>';

/*🧁---🧁        🧁---🧁*/
/* End of User Forms */

/* Administration Menu/*
/*☕---☕        ☕---☕*/
$admin_menu =
  "
    <h3>Administration Menu</h3>
    <ul>
    <!--📜--> <!--📜-->
      <li><a href=\"index.php?encoded_path=$log_path_unauthorized&command=clear-unauthorized.txt#app1\">View Unauthorized sign-in attempts</a></li>
      <li><a href=\"index.php?encoded_path=$log_path_authorized&command=clear-authorized.txt#app1\">View Authorized sign-in attempts</a></li>
      <li><a href=\"#app2\">Upload photos</a></li>
      <li><a href=\"admin/delete_photo.php\">Delete Photos</a></li>
      <li><a href=\"index.php#app1\">Go to Photo Gallery</a></li>
    <!--📜--> <!--📜-->
    </ul>
    ";
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
<meta name="version" content="25.0.21.120 (Update 6)">
<meta name="patch" content="1.21.127f">
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
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

<?php //include 'layouts/header.php' ?>

<!--============================
	 🚥 END OF HEADER SECION 🚥
	============================--> 

<!--===========================
	 🎀 START OF FEATURED 🎀
	===========================--> 
<!--🍧-1-🍧-->
<div id="featured">
  <h1><a href="/sites/cmweb241" title="Return to CMWEB241 Home" style="text-decoration: none; color: white">NazmusLabs Photo Gallery</a></h1>
</div>
<!--🍧-1-🍧--> 
<!--=========================
	  🎀 END OF FEATURED 🎀
	=========================--> 

<!--=============================
	 🔐 ADMINISTRATOR CENTER  🔐
	=============================-->
<div <?php echo $is_authorized ? 'id="admin"
     class="container" style="margin-top: 1em"': '' ?> > <?php echo $is_authorized ? '<h2>Gallery Admin Center</h2>': '' ?> <?php echo $is_authorized ? "<p>Welcome to the Gallery Admin Center. This is your go-to place where you will find navigation links to all of the administration taks and tools available to you. You can review and delete logs, upload photos, and delete phots.</p>": '' ?> 
  
  <!--Administration Menu--> 
  <!--☕---☕        ☕---☕-->
  <div <?php echo $is_authorized ? 'class="alert-neutral-dark" style="padding: 2em; margin-bottom: 4em"': '' ?>> <?php echo $is_authorized ? $admin_menu : '' ?> 
    <!--⚓--> 
    <?php echo $is_authorized ? "<p>⚠️ <em>Please note that in <strong>this verion</strong> of the Photo Gallery doesn't have all of the admin features fully up and working. So items might not wrok and/or be intentionally disabled.</em></p>": '' ?> 
    <!--
💡 Developer Remarks
=====================
Content in this section is restricted and requires elevated permissions to view. Non elevated users may not see any HTML inside this div element.
--> 
  </div>
  <!--☕---☕        ☕---☕--> 
  <!--Administration Menu--> 
</div>
<!--============================
	  🔐 END OF ADMIN CENTER 🔐
	============================--> 

<!--=================================
	 📕 START OF CONTENT SEGMENT A 📕
	=================================-->
<div class="content-section-light"> 
  <!--🍨-1-🍨-->
  <div class="container" style="position: relative"> 
    <!--🍦-2-🍦-->
    <h1>Welcome to My CMWEB 241 PHP Student Project!</h1>
    <!--Bismillah--> 
    <!--⚓-->
    <p id="Bismillah"> In the name of Allah, the Most Gracious, Most Merciful. </p>
    <!--/Bismillah--> 
    <!--========================
	 🧭 START OF SIDEBAR 🧭
	========================-->
    <?php include 'layouts/sidebar.php' ?>
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
        <div class="page-intro"> <img src="assets/graphics/circles.svg"
				 alt="Circles"
				 class="tripple-float" style="max-height: 300px; width: auto" > <!--📸 Smile!--> 
          <!--⚓-->
          <p>Welcome to the Photo Gallery application. What you are looking at now, Insha'Allah, is the culmunation of a whole semester's worth of effort, with no exageration. The entire PHP course at Illinois Central College, CMWEB, involved developing this application, weith each lab and assignment either directly contributing to the code to what would eventually become this multi-functional web applicaion or covered one or more of several variety of concepts that went into creating this application. Without further ado, let's get straight into it; select the <em>Jump to the Gallery</em> button to begin.</p>
          <!--⚓-->
          <p style="text-align: center"><!--🔗 Click!--> <a class="button-ornate" href="#gallery"> <span class="button-text-decoration">Jump to the Gallery</span> </a></p>
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
      //Dsiplay photo gallery
      if ( !$_GET[ 'delete' ] ) {
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
            <figure class=\"gallery\"><a href=\"index.php?encoded_path=$path_encoded&encoded_caption=$caption_encoded#gallery\"><img src=\"$path\" alt=\"$alt\" width=\"600\" height=\"400\"></a>
            <figcaption class=\"caption\">$caption</figcaption>
            </figure>";
        }
      }

      if ( $_GET[ 'delete' ] && $is_authorized ) {
        echo '<ul>';
        foreach ( $images as $daisy ) {
          //⌛Pre-processing metadata...
          $filename = $daisy[ "filename" ];
          $caption = $daisy[ "caption" ];

          //⌛Encoding image metadata...
          $filename_encoded = urlencode( $filename );
          echo "<li><a href=\"admin/delete_photo.php?filename=$filename_encoded\" >" . $caption . ' (' . $filename . ') </a>';
        }
        echo '</ul>';
      }

      //Display single image (Large);
      echo $display_image;

      //Display log file(s);
      echo $login_log;

      ?>
    </div>
    <!--🍬-1-🍬--> 
    <br>
    <?php
    echo $return_button;

    echo $_GET[ 'delete' ] ? "<a href=\"index.php?#app1\" class=\"button-ornate\">Return to Gallery</a>" : '';
    ?>
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
      <h2 style="color: #131A24; padding-top: 2em" >Image Upload Center</h2>
      <!--⚓-->
      <p><strong> <?php echo $daisy_message ?></strong> </p>
      <!--❓ Alert Box ❓-->
      <div class="<?php echo $alert_class; ?>" style="width: 70%"> <?php echo $alert; ?>
        <div style="font-size: medium;"><?php echo $error_code; ?></div>
      </div>
      <!--❓ /Alert Box ❓--> 
    </div>
    <!--/🍟-2-🍟--> 
    
    <!--🌳 -2- 🌳-->
    <div <?php echo $is_authorized ? 'style="background-color: #D6D6D6; padding-top: 1em; padding-bottom: 1em;"': 'style="background-color: #EEEEF2;"' ?> >
      <div class="container" >
        <h2 style="color: #131A24" ><!--App 2--></h2>
      </div>
      
      <!--🌴-3-🌴-->
      <div <?php echo $is_authorized ? 'class="upload-container" style="width: 50%"': '' ?> > <?php echo $is_authorized ? $daisy_form2: $daisy_form1;
      ?> </div>
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
  <div   <?php echo $is_authorized ? 'class="content-section-light"': 'style="padding-bottom: 1.5em"' ?>> <!--B5B5B5-->
    <div class="container"><br>
      <!--🍷-2-🍷-->
      <section> <!--🔖-->
        <h2>How to Get the Code</h2>
        <!--🚩--> <!--🚩--> 
        <img style="float: left; max-width: 400px; height: auto; margin-right: 4em; margin-bottom: 4em" src="assets/graphics/kevin.png"
				 alt="Kevin"
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
      Photo by <a href="https://unsplash.com/@rmvisuals" target="_blank">Renaldo Matamoro </a> on <a href="https://unsplash.com/photos/nrQ3V0A4bxk" target="_blank">Unsplash</a>.</small></em> 
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
include 'layouts/footer.php';
?>
</body>
</html>
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

📣 What’s New in v25
----------------------------
 - 

⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects. This DOES NOT pertain to the PATCH NOTES below, which may document changes of any type that are made after initial publication.


📝 Patch Notes for 25.0
--------------------------
25.0 (update 6)
Patch 1.21.127f
 - Clicking on the Featured Text on the top now takes user back to CMWEB241 homepage, Insha'Allah.
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
 - Added a new human cut-out image (Image Credit: Microsoft)
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