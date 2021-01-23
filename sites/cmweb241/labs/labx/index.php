<?php
session_start();
?>
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

//⌛Loading settings...
REQUIRE 'inc/config.php';

//⌛Setting Privilages...
if ( isset( $_SESSION[ 'usergroup' ] ) && $_SESSION[ 'usergroup' ] === 'administrator' ) {
  //Enabling admin access...
  $is_authorized = true;
  $sys_notif_class = 'sys-notif-banner-yellow';
  $sys_notif = "Hello, $username";

} else {
  $is_authorized = false;
  $sys_notif_class = 'sys-notif-banner';
}

//⌛Connecting to database...
REQUIRE( "../../../../../galleryDBaccess.php" );
//⌛Creating query...
$query = 'SELECT filename, caption FROM photographs';
//⌛Getting result...
$result = mysqli_query( $conn, $query );

//⌛Pre-processing page content...
if ( $status != '' ) {

  if ( $status == 'success' ) {
    $alert_class = 'alert-success-medium';
    $alert = "✅ Done! The operation completed successfully.<br><br><a href=\"index.php?event=logoff#app2\" style=\"color: darkgreen; text-decoration: none; \"><strong>&nbsp &nbsp Sign Out</strong></a>";
    $error_code = "";

    $view_mode = 'single_image';

  } else {


    switch ( $status ) {
      case 'empty':
        $alert = "⚠️ <strong>File upload error:<br> </strong><em>\"Oops, you didn't select any images to upload. Select the \"browse\" button to choose an image and then click \"Upload\".\"</em>";
        $error_code = $status;
        $alert_class = 'alert-error-light';
        break;
      case 'fatal':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"An error occured while trying to uploading this file. Try again later or try uploading a different file.\"</em>";
        $error_code = $status;
        $alert_class = 'alert-error-light';
        break;
      case 'ext':
        $alert = "⚠️ <strong><strong>Sorry, there was a problem uploading your file:<br></strong></strong> <em>\"The file type you selected is not allowed. Please upload a jpeg (.jpg, .jpeg) or a GIF (.gif) image.\"</em>";
        $error_code = $status;
        $alert_class = 'alert-error-light';
        break;
      case 'size':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"The file you selected is too large. Please upload an image that is 1MB or less.\"</em>";
        $error_code = $status;
        $alert_class = 'alert-error-light';
        break;
      case 'conflict':
        $alert = "⚠️ <strong>Sorry, there was a problem uploading your file:<br></strong> <em>\"There's already a photo what that file name. Please rename the photo and try uploading again.\"</em>";
        $error_code = $status;
        $alert_class = 'alert-error-light';
        break;
      case 'credentials_invalid':
        $alert = "<strong>Sorry, we couldn't sign you in:<br></strong> <em>\"The user name and/or password you entered did not match our records.\"</em>";
        $alert_class = 'alert-error';
        $error_code = $status;
        break;
      case 'elevation_required':
        $alert = "<strong>Operation Canceled: Needs Elevated Privilages <br></strong> <em>You are not authorized to perform that action. Please sign in first.</em>";
        $alert_class = 'alert-error';
        $error_code = $status;
        break;
      case 'access_denied':
        $alert = "<strong>Operation Canceled: Access Denied <br></strong> <em>You are not authorized to view that item. Please sign in first.</em>";
        $alert_class = 'alert-error';
        $error_code = $status;
        break;
      case 'access_granted':
        $alert = "<strong>Sign-in Successful!<br></strong> <em>You are currently signed in as Administrator.</em>";
        $alert_class = 'alert-success';
        $error_code = '';
        break;
      default:
        $alert = "⚠️ <strong>Something went wrong...:<br> </strong><em>\"An error occured while trying to process your request. Please try again later.\"</em>";
        $alert_class = 'alert-error-light';
        $error_code = $status;
    }
    //$debug_dump = "<em><small> ▪ Error Code: $error_code (debug_output = \"$debug_arg\")</small></em><br><a href=\"index.php?event=logoff#app2\" style=\"text-decoration: none; \"><strong>&nbsp Sign Out</strong></a>";
  }
} else {
  $alert = $is_authorized ? "✅ You are currenlty signed in and can upload images to the gallery, insha'Allah" : '⚠️  You are currently not signed in.';

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
    $lily_message = "This large view of the photo has been generated completely using PHP code, based on the information it got from the URL after selecting an image from the gallery.";

    $display_image = "<div class=\"fullsize-image\"><img src=\"$path_decoded\" alt=\"flowers\" style=\"width: 100%; hight: auto;\" ><div class=\"large-caption\"><p> $caption_decoded</p><br><div><a href=\"index.php?clearance=$clearance_l2#app1\" class=\"button-ornate\"><span class=\"button-text-decoration\">Return to Gallery</span></a></div></div></div>";

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
    $return_button = '<a href="index.php#app1" class="button-ornate"><span class=\"button-text-decoration\">Return to Gallery</span></a> <a href="index.php#admin" class="button-ornate"><span class=\"button-text-decoration\">Admin Center</span></a>' . " <a href=\"admin/admin.php?command=$command\" class=\"button-ornate-red\"><span class=\"button-text-decoration\">Clear History</span></a>";

  }

} else { // Page will load in standard mode & display gallery, Insha'Allah.

  //⌛Getting things ready...
  $lily_heading = "Photo Gallery";
  $lily_message = !$_GET[ 'delete' ] ? 'This photo gallery below has been generated completely from PHP code. Please click on an image to view a larger version of it"' : 'You are currently on delete mode. Select a photo to delete it';

  //📸Smile!
  //⌛Fetching data from database & allocating images...
  $img_path = IMAGE_PATH;
  $images = mysqli_fetch_all( $result, MYSQLI_ASSOC );

  //⌛Allocating images (old code)...
  /*
  $images_old = array(
    //📸 Smile!
    array( "img_name" => "car.jpg",

      "path" => $img_path,

      "alt-text" => "Antique car",

      "caption" => '"Oldtimer" by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/oldtimer-car-fency-colorful-50567/" target="_blank">Pixabay</a>.' ),
    //📸 Smile!
    array( "img_name" => "city.jpg",

      "path" => $img_path,

      "alt-text" => "Cityscape",

      "caption" => 'Photo by <a href="https://pixabay.com/users/wikiimages-1897/" target="_blank">WikiImages</a> on <a href="https://pixabay.com/photos/city-building-night-view-night-11087/" target="_blank">Pixabay</a>.' ),
    //📸 Smile!
    array( "img_name" => "sunset_trees.jpg",

      "path" => $img_path,

      "alt-text" => "Trees in sunset",

      "caption" => 'Photo by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/sunset-san-diego-california-weather-52933/" target="_blank">Pixabay</a>.' ),
    //📸 Smile!
    array( "img_name" => "flowers.jpg",

      "path" => $img_path,

      "alt-text" => "Purple flowers (💜PURPLE!)",

      "caption" => '"Smooth Leaf Aster" by <a href="https://pixabay.com/users/hans-2/" target="_blank">Hans Braxmeier</a> on <a href="https://pixabay.com/photos/smooth-leaf-aster-aster-herbstaster-56225/" target="_blank">Pixabay</a>.' ),
    //📸 Smile!
    array( "img_name" => "fruits.jpg",

      "path" => $img_path,

      "alt-text" => "Some fruits",

      "caption" => '"Pasta Ingredients" by <a href="https://morguefile.com/creative/hotblack" target="_blank">"hotblack"</a> on <a href="https://morguefile.com/p/133487" target="_blank">Morguefile</a>.' )
  );
  */
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
      <li><a href=\"index.php?delete=true#app1\">Delete Photos</a></li>
      <li><a href=\"#app2\">Upload photos</a></li>
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
<!--❓ End of PHP startup sequence ❓-->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Lab X - CMWEB 241 NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="21.0.20.1216 (Gold)">
<meta name="patch" content="1.20.1217a">
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

<?php include 'layouts/header.php' ?>

<!--============================
	 🚥 END OF HEADER SECION 🚥
	============================--> 

<!--===========================
	 🎀 START OF FEATURED 🎀
	===========================--> 
<!--🍧-1-🍧-->
<div id="featured">
  <h1>Lab X - CMWEB 241 - NazmusLabs</h1>
</div>
<!--🍧-1-🍧--> 
<!--=========================
	  🎀 END OF FEATURED 🎀
	=========================--> 

<!--=============================
	 🔐 ADMINISTRATOR CENTER  🔐
	=============================-->
<div <?php echo $is_authorized ? 'id="admin"
     class="container" style="margin-top: 1em"': '' ?> > <?php echo $is_authorized ? '<h2>Welcome to the Gallery Admin Center</h2>': '' ?> <?php echo $is_authorized ? "<p>Welcome to the Gallery Admin Center. This is your go-to place where you will find navigation links to all of the administration taks and tools available to you. You can review and delete logs, upload photos, and delete phots.</p>": '' ?> 
  
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
<!--🍨-1-🍨-->
<div class="content-section-light">
<!--🍦-2-🍦-->
<div class="container" style="position: relative">
<h1>Photo Gallery 4.0</h1>
<!--Bismillah--> 
<!--⚓-->
<p id="Bismillah"> In the name of Allah, the Most Gracious, Most
  Merciful. </p>
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
  <section> <!--🔖--> 
    <!--====================
	 📢 INTRODUCTION 📢
	====================-->
    <div class="page-intro"> <img src="assets/graphics/puzzle.svg"
				 alt="A puzzle piece"
				 class="tripple-float" style="max-height: 300px; width: auto" > <!--📸Smile!--> 
      <!--⚓-->
      <p>Welcome to version 4 of the photo gallery! This version covers labs 10 through 12. These labs involve a lot of "under-the-hood" work to migrate the gallery's back-end infrastructure to a MySQL database. There are two components from version 3 that needed to be migrated for this version: the user authentication system and the displaying of images in the gallery.</p>
      <!--⚓-->
      <p style="text-align: center"><!--🔗 Click!--> <a class="button-ornate" href="#gallery"> <span class="button-text-decoration">Jump to the Gallery</span> </a></p>
    </div>
    <!--=====================
	 📢 END OF INTRO 📢
	=====================--> 
    <!--/🔖--> 
  </section>
  
  <!--=============================
	 📖 START OF MAIN CONTENT 📖
	==============================-->
  <section> <!--🔖-->
    <h2 id="concepts">New Concepts</h2>
    <!--🚩--> <!--🚩-->
    <p>We'll start by first highlighting the main objective for each of the labs this gallery covers. Later we will look at the individual features of this version of the gallery, insha’Allah.</p>
    <section> <!--🔖-->
      <h3 id="lab10">Lab 10</h3>
      <!--🔗--> <!--🔗-->
      <div class="note">Looking for lab 9? <a href="../lab7">Click here</a> </div>
      <!--🔗--> <!--🔗-->
      <p>With lab 10, we begin our effort to migrate the gallery to a database. We are using MySQL datase, where we created a table called "photographs". This table holds the names and metadata for all of the photos that are to be displayed in the gallery.</em></p>
      <!--⚓-->
      <p>We started by moving the existing, hard-coded, associative array (discussed here) of photo graphs to our photographs table. Recall that previously, our gallery application used made use of a <strong>two dimentional array</strong> where the <em>first</em> array holds individual photographs, with the <em>second</em> array containing the metadata for each of the images, including name and caption. Read more about two dimentional arrays here.</p>
      <!--⚓-->
      <p>Our photographs table essentially mirrors the two dimentional array, with the rows representing the first array and the columns representing the second array. Hence, columns, form the most part, hold the photo metadat--I say for the most part because the column also hold the photograph ID, which isn't strictly a metadata for the photograph in themselves.</p>
      <!--⚓-->
      <P>With version 3 and earlier, the array our gallery uses a two dimentional array that is hard-coded. And although with version 4 we are using a database table in the back-end, how the gallery itself operates fundimentally hasn't changed. We still have our two-dimentional array; only this time, we make a mysqli() query to first get the data from our photographs table and then generate the associative array at runtime. So, as far as the gallery is concerned, nothing has really changed: it still points to an array like before, except that this new array isn't hard-coded but dynamically generated</P>
      <!--/🔖--> 
    </section>
    <section> <!--🔖-->
      <h3>Labs 11 & 12</h3>
      <!--🚩--> <!--🚩-->
      <h4 id="lab11">Lab 11</h4>
      <!--🚩--> <!--🚩-->
      <p>We now move on to the user authentication for lab 11. Previously, we discussed how we used an http authentication to log the user in if they had the correct credentials. What we didnt explicitely say is that the information our application used to determine if the username and password entered by the user is stored in the source code of admin/admin.php (which handles all of the sign-in and signout process. It is very prudent that we make clear to <strong>NEVER, EVER, store passwords and email addresses in plain text formats!</strong> in production environments. And although storing sensitive data in a .php file is more secure than storing it in another text format, such as .txt, it is still not sufficient to prevent the information to be stolen by malicious individuals should a data breach occure. Sensitive information, especially passwords or personal id numbers such as social security numbers, should be stored in a database and <strong>encrypted using 256-sha.</strong></p>
      <!--⚓-->
      <p>As part of lab 11, we switch from using http authentication to using a standard html form to take user imput and pass it on to admin/admin.pho. We reworked admin.pho to now use the table in our MySQL database that contain multiple user account information, including the username, password, and their first and last names. We continue to use the session variable to keep an user signed in until they sign out or close the web browser. As part of lab 11, we also add a new session variable that contains the user's first and last names, which is shows up in the greetings text on the top site banner when an user is signed in. And as before, the site banner includes an option to sign out.</p>
      <h4 id="lab12">Lab 12</h4>
      <!--🚩--> <!--🚩-->
      <p>Lab 12 focuses mainly on minor-improvements and poloshing work. No new features and functionality was added to this version of the gallery as part of this lab.</p>
      <!--🔖--> 
    </section>
    <!--/🔖--> 
  </section>
  <section> <!--🔖-->
    <h2>Features Overview</h2>
    <!--🚩--> <!--🚩-->
    <h3>New Features & additions</h3>
    <!--🚩--> <!--🚩-->
    <ul>
      <!--📜--> <!--📜-->
      <li>Sign in form is fully functional. Users can now enter their credentials directly on index.php and click sign-in.</li>
      <li>Items in the gallery can be updated without needing to midify the source code. By adding or removing photographs on the server and their corresponding database entry, that change is immediately reflected in this version of the gallery. (Note, however, you may need to refresh the page to see the changes take effect.).</li>
      <li>New startup modes added to index.php that allow users to enter a new mode called "Delete Mode". This mode, which can be accessed via the Admin Center menu, lists all the photographs in the gallery by their filenames. This mode isn't fully functional in this version and does not allow users to actually delete any photographs, as the the name of the mode otherwise would imply.</li>
      <!--📜--> <!--📜-->
    </ul>
    <h3>Modifications to Existing Featurs</h3>
    <!--🚩--> <!--🚩-->
    <ul>
      <!--📜--> <!--📜-->
      <li>[PHP] Updates the website banner at the top, which is now greets the user's first and last name when they are logged in.</li>
      <li>[CSS]Styling updayes</li>
      <li>New security measures implented to prevent unauthorized access to restricted files, which now also includes access to the delete mode.</li>
      <!--📜--> <!--📜-->
    </ul>
    <h3>Removed Featurs or Components</h3>
    <!--🚩--> <!--🚩-->
    <ul>
      <!--📜--> <!--📜-->
      <li>HTTP authentication has been removed in this version of the gallery. Users must use the sign-in form below the image gallery to sign in.</li>
      <li>All code related to collecting user input via http authentication is removed from admin/index.php. All javascript redirection scripts and html code related to visual presentation have been moved to admin/admin.php. admin/index.php now only serves to redirect users to admin.pho.</li>
      <!--📜--> <!--📜-->
    </ul>
    <h3>Bug fixes and minor improvements</h3>
    <!--⚓-->
    <p>Please view the HTML source code for this lab (Ctel+U on Windows) to see detailed list of bug fixes, minor improvements, and post-release patch notes along with other documentation at the bottom of the source code file!</p>
    <!--🔖--> 
  </section>
  <section> <!--🔖-->
    <h3>Features added in previous versions</h3>
    <!--🚩--> <!--🚩-->
    <section> <!--🔖-->
      <h4>Version 3.0</h4>
      <!--🚩--> <!--🚩-->
      <h5>New Features & additions</h5>
      <ul>
        <!--📜--> <!--📜-->
        <li>User login system using HTTP Authentication. You can read more about its implimentation here, insha'Allah (God Willing)</li>
        <li>Brand new Admin Center UI, which is only displayed if the user is signed in.</li>
        <li>[CSS] New styles added, including dark-theme varients of existing UI elements. These new dark theme is extensively used by the aforementioned Administation UI to give it a look in stark contrast to to the rest of the gallery. The idea is to easily differenciate between the regular portion of the gallery from the restricted, administration portion at a glance.</li>
        <li>Activity logging is fully implimented. Successfull logins and failed login attempts are logged and can be viewed seperatrly from the Admin center. The administrator has the option to clear the activity log. The time and IP address from which the data was cleared is also logged.</li>
        <li>PHP code to process  uploaded images selected by visitors and upload them to the server if it passes all validations</li>
        <li>PHP Code to gracefully handle errors and failed validations while also providing informative error messages to the user and output error codes for the developer.</li>
        <li>[PHP] Additional startup mode startup modes are added. They include the displying Admin Center UI, viewing activity log, which is displayed in place of the image gallery, and clearing the log data. These startup modes provide users different experiences and content based on contexts and permissions.</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Modifications to Existing Featurs</h5>
      <!--🚩--> <!--🚩-->
      <ul>
        <!--📜--> <!--📜-->
        <li>[PHP][CSS] Updates the website banner at the top, which is now displayed  with a light yellow accent color when the user is logged in.</li>
        <li>[CSS]New styling optiond added</li>
        <li>[CSS]Additinal improvements to styling of alert boxes as well as new categories of alert-box types added.</li>
        <li>A sign in form is displayed in place of the photo upload UI when the user is not signed in.</li>
        <li>New security measures implented to prevent unauthorized access to restricted files. You can read about what some of these measures are here.</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Removed Featurs or Components</h5>
      <!--🚩--> <!--🚩-->
      <ul>
        <!--📜--> <!--📜-->
        <li>photo_upload.php no longer generates debug data. Only the error code is sent to the alert box displaying friendly error message to the user in the event of an error</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Bug fixes and minor improvements</h5>
      <!--🚩--> <!--🚩-->
      <p>Please view the HTML source code for Lab 6 (Ctel+U on Windows) to see detailed list of bug fixes, minor improvements, and post-release patch notes along with other documentation at the bottom of the source code file!</p>
      <!--/🔖--> 
    </section>
    <section> <!--🔖-->
      <h4>Version 2.0</h4>
      <!--🚩--> <!--🚩-->
      <h5>New Features & additions</h5>
      <!--🚩--> <!--🚩-->
      <ul>
        <!--📜--> <!--📜-->
        <li>A new user interface for selecting and uploading images to the website</li>
        <li>PHP code to process  uploaded images selected by visitors and upload them to the server if it passes all validations</li>
        <li>PHP Code to gracefully handle errors and failed validations while also providing informative error messages to the user and output error codes for the developer.</li>
        <li>[PHP] Multiple startup modes are now possible, providing users different experiences and content based on contexts and permissions.</li>
        <li>Introducing Large Image Preview mode, which makes use of the aforementioned startup modes to either display a single, large, image, or the image gallery, based on context.</li>
        <li>[PHP][CSS] New UI to identify logged in state. Banner will display letting you know you are logged in.</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Modifications to Existing Featurs</h5>
      <!--🚩--> <!--🚩-->
      <ul>
        <!--📜--> <!--📜-->
        <li>[CSS]New styling optiond added</li>
        <li>[CSS]Improvements to styling of alert boxes as well as new categories of alert-box types added.</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Removed Featurs or Components</h5>
      <!--🚩--> <!--🚩-->
      <ul>
        <!--📜--> <!--📜-->
        <li>Gallery A from version 1.0 has been removed. Gallery B is now renamed to just "Photo Gallery".</li>
        <!--📜--> <!--📜-->
      </ul>
      <h5>Bug fixes and minor improvements</h5>
      <!--🚩--> <!--🚩-->
      <p>Please view the HTML source code for Lab 5 (Ctel+U on Windows) to see a list of bug fixes, minor improvements, and post-release patch notes along with other documentation at the bottom of the source code file!</p>
      <!--/🔖--> 
    </section>
    <section> <!--🔖-->
      <h4>Version 1.0</h4>
      <h5>New Features & Additions</h5>
      <ul>
        <!--📜--> <!--📜-->
        <li>Now using CSS flexboxes (as opposed to floats) to layout gallery contents </li>
        <li>The gallery now populates with content from a pre-defined, two-dimentional, array using PHP code instead of having its content hard-coded into the HTML, as was the case previously.</li>
        <!--📜--> <!--📜-->
      </ul>
      <!--⚓-->
      <p>While this is the first version of the gallery made for this course, it isn't the earliest revision. The very first appearance of this gallery was on my CMWEB 120 Lab 6 webpage, which you can see here. The purpose of that lab was to use HTML and CSS to create and style a photo gallery (in additon to work related to photo editing and color grading). And as such, each individual content of the gallery, from photos, captions, and hyperlinks are manually hard-coded in HTML.</p>
      <!--⚓-->
      <p>With version 1.0 of the Gallery made for this course I first took all of the code as is from the CMWEB120 lab and updated the text of the page with relavent content. Next, I made two significant modifications. The first is that I used the newer, more context-appropriate, css flexbox property instead of the css float property as I had previously done.</p>
      <!--⚓-->
      <p>The second change is that I transferred all of the manually written HTML for displaying the images, captions, and links into an associative array. Then, using PHP code, I had the gallery be automatically populated with content by iterating through the array using the foreach loop statement.</p>
      <!--🔖--> 
    </section>
    <!--/🔖--> 
  </section>
  <section> <!--🔖-->
    <h2>Main Application</h2>
    <!--🚩--> <!--🚩-->
    <p>Below is a gallery I originally created earlier as part of "<a href="/sites/cmweb120/labs/lab6/lab6.html">CMWEB 120 lab 6</a>" using HTML and CSS. For this lab, I have ported over the gallery here, but this time, I switched out all of the manual HMTL markups for laying out the gallery and rebuilt it using PHP code that generates the same gallery in a much more effecient manner.</p>
    <!--⚓-->
    <p>This application uses PHP code to grab the necessary file metadata from a MySQL database, from which it then creates a two-dimentional array that is used to populate the image gallery with content.</p>
    <!--🔖--> 
  </section>
  </div>
  <!--🍦-2-🍦-->
  </div>
  <!--🍨-1-🍨--> 
</article>
<!--====================
	 📃 END OF ARTICLE 📃
	========================--> 
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

          //pre-processing metadata...
          $path = $img_path . $daisy[ "filename" ];
          $alt = $daisy[ "caption" ];
          $caption = $daisy[ "caption" ];

          //Encoding image metadata...
          $path_encoded = urlencode( $path );
          $caption_encoded = urlencode( $caption );

          echo "
            <!--📸Smile!-->
            <figure class=\"gallery\"><a href=\"index.php?encoded_path=$path_encoded&encoded_caption=$caption_encoded&clearance=$clearance_m2#gallery\"><img src=\"$path\" alt=\"$alt\" width=\"600\" height=\"400\"></a>
            <figcaption class=\"caption\">$caption</figcaption>
            </figure>";
        }
      }

      if ( $_GET[ 'delete' ] && $is_authorized ) {
        echo '<ul>';
        foreach ( $images as $daisy ) {
          echo "<li>" . $daisy[ "filename" ];
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

    echo $_GET[ 'delete' ] ? "<a class=\"button-ornate\" href=\"index.php?#gallery\"> <span class=\"button-text-decoration\"><span class=\"button-text-decoration\">Return to Gallery</span></span> </a>" : '';
    ?>
    <br>
    <!--🎨 /Image Gallery 🎨--> 
  </section>
  <!--🔖--> 
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
      <h2 style="color: #131A24" >Image Upload Center</h2>
      <!--⚓-->
      <p><strong> <?php echo $daisy_message ?></strong> </p>
      <!--❓ Alert Box ❓-->
      <div class="<?php echo $alert_class; ?>" style="width: 70%"> <?php echo $alert; ?>
        <div style="font-size: medium;"><?php echo "$error_code"; ?></div>
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
  </section>
  <!--🔖--> 
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
<!--/🥨-1-🥨-->
<div   <?php echo $is_authorized ? 'class="content-section-light"': 'style="padding-bottom: 1.5em"' ?>> <!--B5B5B5--> 
  <!--🍷-2-🍷-->
  <div class="container"><br>
    <section> <!--🔖-->
      <h2>How to Get the Code</h2>
      <!--🚩--> <!--🚩--> 
      <img style="float: right; max-height: 1000px; width: auto" src="assets/graphics/pine.svg"
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
	 🎁 START OF BONUS CONTENT 🎁
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
    <em><small>Featured image credit: Photo by <a href="https://unsplash.com/@rmvisuals" target="_blank">Renaldo Matamoro </a> on <a href="https://unsplash.com/photos/nrQ3V0A4bxk" target="_blank">Unsplash</a>.</small></em> 
    <!--📸Smile!--> <!--📸Smile!--> 
  </aside>
  <!--🔔-2-🔔--> 
  <!--============================
	 🎁 END OF BONUS CONTENT 🎁
	============================--> 
</div>
<!--🍳-1-🍳--> 
<!--================================
	 📘 END OF CONTENT SEGMENT C 📘
	================================-->
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