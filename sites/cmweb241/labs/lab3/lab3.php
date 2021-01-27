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
Version 20.0.20.1222 (Update 5)
Patch version: 1.21.127f

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
  array( "img_name" => "featured.jpg",

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
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Lab 3 - CMWEB 241 - NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="20.0.20.1222 (Update 5)">
<meta name="patch" content="1.21.127f">
<link rel="stylesheet" type="text/css" href="lab3.css">
</head>

<body>
<!--==============================
	 🚥 START OF HEADER SECION 🚥
	==============================-->
<div> 
  <!--///////////////////////
		  📥 START of Container 📥
		  ////////////////////////-->
  <div class="container-wide"> 
    <!--Float 1 -->
    <div class="header-box"> 
      <!--Site Logo--> <a href="../../index.html" class="left-align"> <img src="../../assets/graphics/logo-header.png"
            alt="NazmusLabs Logo" title="NazmusLabs Logo" class="resize-85-percent" style="max-height: 125px; width: auto" > </a> 
      <!--/ Site Logo--> 
    </div>
    <!--/ Float 1--> 
    <!--Float 2-->
    <div class="header-box">
      <h5>“In three words...</h5>
      <p><small>...I can sum up everything I've learned about life: it goes on. ― Robert Frost</small></p>
    </div>
    <!--/ Float 2--> 
  </div>
  <!--/////////////////////
		  📤 END of Container 📤
		  //////////////////////--> 
</div>
<!--============================
	 🚥 END OF HEADER SECION 🚥
	============================--> 
<!--=========================
	 🧭 START OF MENU BAR 🧭
	=========================-->
<div> 
  <!--///////////////////////
		  📥 START of Container 📥
		  ////////////////////////--> 
  <!--👆🏻 Main Menu-->
  <div class="nav-bar">
    <div class="container-nav"> 
      <!--🔗 Nav-bar Menu Items-->
      <ul class="right-align">
        <!--🔗 Click!-->
        <li><a class="menu-button" href="../../index.html">Home</a></li>
        <!--🔗 Click!-->
        <li><a class="menu-button" href="/sites/cmweb241/projects/">Project</a></li>
        <!--🔗🚫 Click!-->
        <li class="menu-button-disabled">Labs</li>
        <!--🔗 Click!-->
        <li><a class="menu-button" href="../../about.html">About</a></li>
        <!--Seperator-->
        <li class="menu-button-disabled">|</li>
        <!--🔗 Click!-->
        <li><a class="menu-button" href="https://github.com/nazmuslabs" target="_blank">GitHub</a></li>
      </ul>
      <!--/🔗 Nav-bar Menu Items--> 
    </div>
    <!--/👆🏻 Main menu--> 
  </div>
  <!--/////////////////////
		  📤 END of Container 📤
		  //////////////////////--> 
</div>
<!--=======================
	 🧭 END OF MENU BAR 🧭
	=======================--> 
<!--===========================
	 🎀 START OF FEATURED 🎀
	===========================-->
<div id="featured">
  <h1>Lab 3 - CMWEB 241 - NazmusLabs</h1>
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
    <h1>Dynamic Gallery</h1>
    <!--Bismillah-->
    <p id="Bismillah"> In the name of Allah, the Most Gracious, Most
      Merciful. </p>
    <!--/Bismillah--> 
    <!--//////////////////////
		   💡 START of Sidebar 💡
		  ////////////////////////-->
    <div class="sidebar"> 
      <!--🔍 Search Box - [DISABLED CODE]
			<script async src="https://cse.google.com/cse.js?cx=011282160671876409027:ptdgqqdcffz"></script>
      <div class="gcse-search"></div>
      <--/🔍 Search Box [DISABLED CODE]--> 
      <!--👆🏻 Sidebar Menu-->
      <div class="menu-vertical">
        <h2>Labs Explorer</h2>
        <!--🔗 Menu Items-->
        <ul>
          <!--🔗 Click!-->
          <li><a href="../lab1/lab1.php"><small>CMWEB 241 Lab 1</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab2/lab2.php"><small>CMWEB 241 Lab 2</small></a></li>
          <!--🔗🚫 Click!-->
          <li><small>CMWEB 241 Lab 3 ✔</small></li>
          <!--🔗 Click!-->
          <li><a href="../lab4/lab4.php"><small>CMWEB 241 Lab 4</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab5/lab5.php"><small>CMWEB 241 Lab 5</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab6/"><small>CMWEB 241 Lab 6</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab7/"><small>CMWEB 241 Lab 7</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab8/"><small>CMWEB 241 Lab 8</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab9/"><small>CMWEB 241 Lab 9</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../labx/"><small>CMWEB 241 Lab 10</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab11/"><small>CMWEB 241 Lab 11</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab12/"><small>CMWEB 241 Lab 12</small></a></li>
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241/labs/lab13/"><small>CMWEB 241 Lab 13 🍰</small></a></li>
        </ul>
        <!--/🔗 Menu Items-->
        <p> 
          <!--🔗 Click!--> <a class="button-ornate" href="../../index.html"> <span class="button-text-decoration">↵
          Course Home</span> </a> </p>
      </div>
      <!--/👆🏻 Sidebar Menu--> 
    </div>
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
				 class="tripple-float" style="max-height: 300px; width: auto" >
          <p>The objective of this lab is to create a dynamic photo gallery using PHP. The dynamic gallery needs to collect data stored in arrays that identify the images and their location, and use that data to build the gallery by outputting HTML at at real time when the page loads. A dynamic gallery such as this allows the web developer to add and remove images from the gallery without needing to modify the HTML code..</p>
          <!--⚓-->
          <p style="text-align: center"><!--🔗 Click!--> <a class="button-ornate" href="#gallery"> <span class="button-text-decoration">Jump to the Gallery</span> </a></p>
          <img src="assets/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" style="max-height: 500px; width: auto" > </div>
        <!--/📢 Content Intro 📢--> 
      </section>
      <!--🔖--> 
      <!--📑 Main Content 📑-->
      <section> <!--🔖-->
        <h2>Main Application</h2>
        <p>Below is a gallery I originally created earlier as part of "<a href="/sites/cmweb120/labs/lab6/lab6.html">CMWEB 120 lab 6</a>" using HTML and CSS. For this lab, I have ported over the gallery here, but this time, I switched out all of the manual HMTL markups for laying out the gallery and rebuilt it using PHP code that will generate the same gallery in a much more effecient manner.</p>
        <p>For this lab, I have hard-coded the image file names and paths in a two-dimentional array that the PHP code can use to generate the gallery.</p>
      </section>
      <!--🔖--> 
      <!--APP 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 🚩🚩🚩🚩 START-->
      <section id="app"> <!--🔖-->
        <h3 id="gallery">Photo Gallery A</h3>
        <p>The gallery below <strong>was not</strong> generated using PHP code. This one has been maually hand written for CMWEB 120 Lab 6, and taken almost as is and placed here. I say almost because there is one major upgrade to the styling. <em>The gallery in the CMWEB lab webpage is styled using <strong>floats</strong>, while the one here is styled using <strong>flexbox</strong>.</em> I did this mainly because flexbox is much better suited for dynamic gallery we are implimenting.</p>
        <!--🎨 Gallery-->
        <div class="gallery-container"> 
          <!--📸 Smile!-->
          <figure class="gallery"><a href="assets/images/car.jpg" target="_blank"><img src="assets/images/thumb/car_thumb.jpg" alt="Antique car" width="600" height="400" ></a>
            <figcaption class="caption">"Oldtimer" by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/oldtimer-car-fency-colorful-50567/" target="_blank">Pixabay</a>.</figcaption>
          </figure>
          <!--📸 Smile!-->
          <figure class="gallery"><a href="assets/images/city.jpg" target="_blank" ><img src="assets/images/thumb/city_thumb.jpg" alt="Cityscape" width="600" height="400" ></a>
            <figcaption class="caption">Photo by <a href="https://pixabay.com/users/wikiimages-1897/" target="_blank">WikiImages</a> on <a href="https://pixabay.com/photos/city-building-night-view-night-11087/" target="_blank">Pixabay</a>.</figcaption>
          </figure>
          <!--📸 Smile!-->
          <figure class="gallery"><a href="assets/images/featured.jpg" target="_blank"><img src="assets/images/thumb/featured_thumb.jpg" alt="Trees in sunset" width="600" height="400" ></a>
            <figcaption class="caption">Photo by <a href="https://pixabay.com/users/arttower-5337/" target="_blank">Bridget "ArtTower"</a> on <a href="https://pixabay.com/photos/sunset-san-diego-california-weather-52933/" target="_blank">Pixabay</a>.</figcaption>
          </figure>
          <!--📸 Smile!-->
          <figure class="gallery"><a href="assets/images/flowers.jpg" target="_blank"><img src="assets/images/thumb/flowers_thumb.jpg" alt="Purple flowers (💜PURPLE!)" width="600" height="400" ></a>
            <figcaption class="caption">"Smooth Leaf Aster" by <a href="https://pixabay.com/users/hans-2/" target="_blank">Hans Braxmeier</a> on <a href="https://pixabay.com/photos/smooth-leaf-aster-aster-herbstaster-56225/" target="_blank">Pixabay</a>.</figcaption>
          </figure>
          <!--📸 Smile!-->
          <figure class="gallery"><a href="assets/images/fruits.jpg" target="_blank"><img src="assets/images/thumb/fruits_thumb.jpg" alt="Some fruits" width="600" height="400" ></a>
            <figcaption class="caption">"Pasta Ingredients" by <a href="https://morguefile.com/creative/hotblack" target="_blank">"hotblack"</a> on <a href="https://morguefile.com/p/133487" target="_blank">Morguefile</a>.</figcaption>
          </figure>
        </div>
        <!--/🎨 Gallery-->
        
        <h3>Photo Gallery B</h3>
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
        
        <p style="padding-top: 1em"><em>Did you know that I did most of the editing, including manual color grading and cropping, using just "Water Lily", my iPhone? <strong>Mobile devices today are more capable at high quality image editing than even the most powerful desktop PCs from a dacade ago</strong>; it's quite profound, really! You can learn more about <a href="/sites/cmweb120/labs/lab6/lab6.html">how I edited these photos here</a>, where I also discuss the importance of getting images and color for your webpage right.</em></p>
        
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
        <li><a href="https://color.adobe.com/color-wheel-game" target="_blank">Color Wheel Game</a></li>
        <li><a href="http://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF" target="_blank">Create Your Own Color Pallete</a></li>
        <li><a href="https://color.adobe.com/" target="_blank">Adobe Color</a></li>
        <li><a href="https://www.w3schools.com/PHP/php_arrays_associative.asp" target="_blank">Learn About PHP Associative Arrays</a></li>
      </ul>
      <!--/🔗 External Links-->
      <h3>Thanks for visiting!</h3>
      <!--/🎁 Bonus Content 🎁--> <em><small>Featured image credit:
      Photo by <a href="https://unsplash.com/@turnlip19" target="_blank">Jong Marshes</a> on <a
              href="https://unsplash.com/photos/79mNMAvSORg" target="_blank">Unsplash</a>.</small></em> </article>
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
<!--=================================
	 🚧 START OF FOOTER SECION A 🚧
	=================================-->
<div class="content-section-grey"> 
  <!--///////////////////////
	  📥 START of Container 📥
	  ////////////////////////-->
  <div class="container-wide"> 
    <!--👆🏻 Footer Menu-->
    <div class="menu-horizontal"> 
      <!--Float 1-->
      <div class="double-float"> 
        <!--🔗 Click!--> <a class="button-ornate" href="../../index.html"> <span class="button-text-decoration">↵
        CMWEB 241 Home</span> </a> </div>
      <!--/ Float 1--> 
      <!--Float 2-->
      <div class="double-float"> 
        <!--🔗 Footer Menu items-->
        <ul>
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241/projects/">Project</a></li>
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241#labs">Labs</a></li>
          <!--🔗 Click!-->
          <li><a href="../../about.html">About</a></li>
          <li>|</li>
          <!--🔗 Click!-->
          <li><a href="http://github.com/nazmuslabs" target="_blank">GitHub</a></li>
        </ul>
        <!--/🔗 Footer Menu Items--> 
      </div>
      <!--/ Float 2--> 
    </div>
    <!--/👆🏻 Footer Menu--> 
    <!--📞 Contact Options-->
    <div class="tripple-float">
      <h3>Get in Touch</h3>
      <p> Connect with me on Twitter <a href="http://twitter.com/nazmuslabs" target="_blank"
            style="color: firebrick;">@NazmusLabs</a>.<br>
        <br>
        You can also check out my latest videos <a href="http://youtube.com/nazmuslabsvideos" target="_blank"
            style="color: firebrick;">on YouTube</a>.</p>
    </div>
    <div class="tripple-float">
      <h3>Get the Code</h3>
      <p>All of the source codes and assets for this page as well as
        those for entirety of this CMWEB student site is available
        to you on my <a href="https://github.com/NazmusLabs/CMWEB" target="_blank" style="color: firebrick;">CMWEB
        GitHub
        repository</a>.</p>
    </div>
    <div class="tripple-float">
      <h3>Send Feedback</h3>
      <p>Have questions or comments? Just shoot me an email either
        at my college email address (<a href="mailto:nk308@lab.icc.edu"
            style="color: firebrick;">nk308@lab.icc.edu</a>)
        or at my personal email (<a href="mailto:nazmus@outlook.com"
            style="color: firebrick;">nazmus@outlook.com</a>).</p>
    </div>
    <!--/📞 Contact Options--> 
  </div>
  <!--/////////////////////
	  📤 END of Container 📤
	  //////////////////////--> 
</div>
<!--==============================
	 🚧 END OF FOOTER SECION A 🚧
	==============================--> 
<!--================================
	 📄 START OF FOOTER SECION B 📄
	================================-->
<div> 
  <!--///////////////////////
	  📥 START of Container 📥
	  ////////////////////////-->
  <div class="container-wide"> 
    <!--Licence Info -->
    <p id="license"> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank"> <img
            alt="Creative Commons License" style="border-width:0"
            src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png"></a> <br>
      This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"
          target="_blank"> Creative Commons Attribution-ShareAlike 4.0
      International License</a>. </p>
    <!--/ Licence Info --> 
    <!--Copyright Info -->
    <p><small>© 2020 Nazmus Shakib Khandaker and NazmusLabs. Some
      rights reserved.</small></p>
    <!--/ Copyright Info --> 
  </div>
  <!--/////////////////////
	  📤 END of Container 📤
	  //////////////////////--> 
</div>
<!--==============================
	 📄 END OF FOOTER SECION B 📄
	==============================--> 
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
System requirements:  Chromium based web browser (Google Chrome, Microsoft Edge, Opera, Brave, etc) version 86 or later. Apple Safari 14 or later. Mozilla Firefox 82 or later. Microsoft Internet Explorer and Microsoft Edge (Legacy) are not supported.

📖 Introduction - NazmusLabs Help
----------------------------------
LAB DESCRIPTION: This lab is about displaying a photo gallery dynamically using associative arrays in PHP.

This student site was originally created for the CMWEB program at Illinois Central College. CMWEB is officially certified by the "Web Professional Academy".

📣 What’s New in v20
----------------------------
 - [CSS] The gallery container class now uses flexbox instead of floats.
 - General improvements to the core document markup.

⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects. This DOES NOT pertain to the PATCH NOTES below, which may document changes of any type that are made after initial publication.

📝 Patch Notes for 20.0
--------------------------
20.0 (update 5)
Patch 1.21.127f
 - Fixed an issue which caused the resulting HTML generated by the PHP interpreter would fail w3 validation.

20.0 (Update 4)
Patch 1.21.116e
 - Fixed an issue where some SVG images may appear overly large on high resolution displays or when the site is zoomed below 100%.
 - Updated incorrect button text
 - Updates to the sidebar
 - Button to jump to the gallery

20.0 (Update 3)
Patch 1.21.114d
 - Udates to main and footer nav-bars which enables the "Project" menu item.
 - Updates to the footer nav-bar that updates the link for the "Labs" menu item.

20.0 (Update 2)
Patch 1.21.114c
 - Content updates, with a few additions and general improvements to existing text accross the board.
 - Updated sidebar links
 - Fixed an issue where certain graphics would become disproportionately large on high-resolution displays or when the site viewed at zoom levels significanly below 100%.
 - Fixed an issue where the website logo was not properly alligned.
 - New "External Links" and refreshed popular quote.
 - Minor padding and styling improvements.

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