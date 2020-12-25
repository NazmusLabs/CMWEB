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
Version 20.0.20.1216 (Gold)
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
?>
<!-- /❓ PHP ❓ -->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Lab 4 - CMWEB 241 NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="20.0.20.1216 (Gold)">
<meta name="patch" content="1.20.1217a">
<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
</head>

<body>
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
  <h1>Lab 4 - CMWEB 241 - NazmusLabs</h1>
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
    <h1>Includes</h1>
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
    <article>
      <section> <!--🔖--> 
        <!--📸 Smile!--> 
        <!--📢 Content Intro 📢-->
        <div class="page-intro"> <img src="assets/graphics/puzzle.svg"
				 alt="A puzzle piece"
				 class="tripple-float" >
          <p>This lab is all about <strong>PHP include statements</strong>. The content of this document is almost identical to that of lab 3. However, under the hood, lab 4 is a completely different beast. Major sections of this webpage is broken into several smaller, external, php files. Elements that are no longer part of the <em>index.php</em> code include the nav bar, the site header, the fotter nav bar, contact info, and even the sidebar. Those have been relegated to <em>header.php</em>, <em>footer.php</em>, and <em>sidebar.php</em> files. The include statements allows the content of all included files to be merged with the main files (in our case it's <em>index.php</em>) to generate a complete html page that gets sent to the clients' browser.</p>
          <img src="assets/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" > </div>
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
      <!--APP 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 START-->
      <section id="app"> <!--🔖-->
        <h3>Photo Gallery</h3>
        <p>This next photo gallery has been generated completely from PHP code. I have written the code in php to output a gallery that looks as close to the original CMWEB 120 one (i.e. Gallery A).</p>
        <!--🎨 Gallery-->
        <div class="gallery-container">
          <?php
          foreach ( $images as $daisy ) {
            echo "";
            //pre-processing metadata...
            $path = $daisy[ "path" ] . $daisy[ "img_name" ];
            $alt = $daisy[ "alt-text" ];
            $caption = $daisy[ "caption" ];

            echo "
            <!--📸 Smile!-->
            <figure class=\"gallery\"><a href=\"$path\" target=\"_blank\"><img src=\"$path\" alt=\"$alt\" width=\"600\" height=\"400\"></a>
            <figcaption class=\"caption\">$caption</figcaption>
            </figure>";
          }
          ?>
        </div>
        <!--/🎨 Gallery--> 
        
        <!--🚧🚧🚧🚧🚧🚧🚧🚧🚧🚧--> 
      </section>
      <!--🔖--> 
      <!--APP 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 END--> 
      <!--🎈🧹-->
      <section> <!--🔖-->
        <h2>How to Get the Code</h2>
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
        <li><a href="https://webaim.org/techniques/forms/controls" target="_blank">Creating Accessible Forms</a></li>
        <li><a href="https://www.w3schools.com/css/css3_transitions.asp" target="_blank">CSS Transitions</a></li>
      </ul>
      <!--/🔗 External Links-->
      <h3>Thanks for visiting!</h3>
      <!--/🎁 Bonus Content 🎁--> <em><small>Featured image credit: "Sublime purple night sky" by <a href="https://unsplash.com/@vincentiu" target="_blank">Vincentiu Solomon</a> on <a href="https://unsplash.com/photos/ln5drpv_ImI" target="_blank">Unsplash</a>.</small></em></article>
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
System requirements:  Chromium based web browser (Google Chrome, Microsoft Edge, Opera, Brave, etc) version 86 or later. Apple Safari 14 or later. Mozilla Firefox 82 or later. Microsoft Internet Explorer and Microsoft Edge (Legacy) are not supported.

📖 Introduction - NazmusLabs Help
----------------------------------
LAB OBJECTIVE: To build a simple calculator based on predefined specs using PHP server-side scripting.

This student site was originally created for the CMWEB program at Illinois Central College. CMWEB is officially certified by the "Web Professional Academy".

📣 What’s New in v20
----------------------------
 - [CSS] The gallery container class now uses flexbox instead of floats.
 - General improvements to the core document markup.

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

20.0 (Gold)
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