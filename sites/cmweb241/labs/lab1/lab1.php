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
Version 19.0.20.1213 (Update 4)
Patch version: 1.21.127d

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
// Checking for submit...
if ( filter_has_var( INPUT_POST, 'submit' ) ) {
  //collect user input & initializing variables...
  $chirps = htmlspecialchars( $_POST[ 'input' ] );
  $alert = "";
  $alert_class = "";

  //checking required field(s)...
  if ( !empty( $chirps ) ) {
    if ( is_numeric( $chirps ) ) {
      //verifying numeric intervals...
      if ( $chirps >= 1 && $chirps <= 90 ) {
        //performaing primary operations...
        $temp = $chirps + 40;

        //outputting results...
        $alert_class = 'alert-success';
        $alert = "The temperature is calculated to be {$temp}°F.";
      } else {
        $alert_class = 'alert-error';
        $alert = "Values less than 1 or greater than 90 won't work. Please try again.";
      }
    } else {
      //verifying data types...
      $alert_class = 'alert-error';
      $alert = 'Please enter a number.';
    }
  } else {
    //display error
    $alert_class = 'alert-error';
    $alert = 'You must first enter a value.';
  }
}
?>
<!-- /❓ PHP ❓ -->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Cricket Chirp Temperature Calculator - Lab 1</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="19.0.20.1213 (Update 4)">
<meta name="patch" content="1.21.127d">
<link rel="stylesheet" type="text/css" href="lab1.css">
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
      <h5>I'm different...</h5>
      <p><small>..."You only live once, but if you do it right, once is enough." ― Mae West</small></p>
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
  <h1>Lab 1 - CMWEB 241 - NazmusLabs</h1>
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
    <h1>Chirping Crickets</h1>
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
          <!--🔗🚫 Click!-->
          <li><small>CMWEB 241 Lab 1 ✔</small></li>
          <!--🔗 Click!-->
          <li><a href="../lab2/lab2.php"><small>CMWEB 241 Lab 2</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab3/lab3.php"><small>CMWEB 241 Lab 3</small></a></li>
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
      <section> 
        <!--🔖--> 
        <!--📸 Smile!--> 
        <!--📢 Content Intro 📢-->
        <div class="page-intro"> <img src="assets/graphics/puzzle.svg"
				 alt="A puzzle piece"
				 class="tripple-float" style="max-height: 300px; width: auto" >
          <p>This first lab involves building a Cricket Chirp generator using PHP server-side scripting. This application calculates the temperature (in degrees Fahrenheit) from the number of cricket chirps observed in 14 seconds. The goal of this lab is to become familiar with the use of taking input from the user through HTML forms, using the data collected to perform some mathemetical operation, and displaying the output to the user by printing its value on the web page. The lab also touches on catching and gracefully handling common user errors.</p>
          <img src="assets/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" style="max-height: 500px; width: auto" > </div>
        <!--/📢 Content Intro 📢--> 
      </section>
      <!--🔖--> 
      <!--📑 Main Content 📑-->
      <section> 
        <!--🔖-->
        <h2>Main Application</h2>
        <p>Below is the main application for this lab. The application begins by asking the visitor to enter the number of cricket chirps observed in 14 seconds, and, using this information, calculate the temperature based on the number of chirps. It, then, displays the resulting temperature as output for the visitor to see.</p>
      </section>
      <!--🔖-->
      <section id="app"> 
        <!--🔖-->
        <h3>Cricket Chirp Temperature Calculator</h3>
        <p> Please provide the number of cricket chirps observed in 14 secons by entering a numeric value between 1 and 90 in the text box below. Then click the "Submit" button to view the resulting temperature (in °F).</p>
        <h4>Enter a value between 1 and 90</h4>
        <!--📨 Form-->
        <form class=feedback-form action="<?php echo $_server['php_self'] ?>#app" method="post" style="margin: 0; max-width: 20em;">
          <div class="form-group">
            <label for="input">Number of Chirps:</label>
            <input type="text" id="input" name="input" value="<?php echo $chirps; ?>" />
            <!--❔ Preserves previously enter value--> 
          </div>
          <div>
            <input class="button" type="submit" value="Calculate" id="submit" name="submit">
          </div>
        </form>
        <!--📨 Form--> 
        <!--❓ Output ❓-->
        <div class="<?php echo $alert_class; ?>"> <?php echo $alert; ?> </div>
        <!--❓ Output ❓--> 
      </section>
      <!--🔖-->
      <section> 
        <!--🔖-->
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
      <!--/🎁 Bonus Content 🎁--> 
      <em><small>Featured image credit: Photo by <a href="https://unsplash.com/@icarium_imagery" target="_blank">Sebastian Leonhardt</a> on <a href="https://unsplash.com/photos/-9bYpSAJzXM" target="_blank">Unsplash</a>.</small></em></article>
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
          <li><a href="../index.php">Projects</a></li>
          <!--🔗 Click!-->
          <li><a href="../index.php">Labs</a></li>
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
LAB DESCRIPTION: This lab is about building an HTML form and styling the form with CSS.

This student site was originally created for the CMWEB program at Illinois Central College. CMWEB is officially certified by the "Web Professional Academy".

📣 What’s New in v19
----------------------------
 - Version 19 of this HTML document structure is all about polish and refinement.
 - This revision received a comprehensive look at all the changes and additions made in all of the CMWEB 120 labs so far and analyzed any outstanding bugs and areas of improvement.
 - [CSS] Version 19 underwent a major code refactoring which better organizes the styling structure, added new in-line comments and documentation as well as improving existing ones.
 - [CSS] Fixed outstanding buts related to the layout of the website, including, but not limited to, the issue where the rightmost part of the sidebar would get cut off, resulting in a loss of drip shadow on its right side.
 - Improved in-line comments and documentation for throughtou the HTML documents.
 - Other general improvements and fixes


⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects.

📝 Patch Notes for 19.0
--------------------------
19.0 (update 4)
Patch 1.21.127d
 - Fixed an issue which caused the resulting HTML generated by the PHP interpreter would fail w3 validation.
 - Fixed an issue where some SVG images may appear overly large on high resolution displays or when the site is zoomed below 100%.
 - Updated incorrect button text
 - Updates to the sidebar
 - Fixed an issue where the website logo was not properly alligned.
 - Fixes and updates to ducmentation.

   ***

19.0 (Update 3)
Patch 1.20.1217c
 - Fixed an issue where large number of documentation text as well as some HTML markups had several duplicates.

19.0 (Update 2)
Patch 1.20.1210b
 - [PHP] Added htmlspecialchars() to code handling user input to prevent malicious attacks through code insertion in input fields.

19.1 (Update 1)
Patch 1.20.1909b
 - [CSS] Slightly increased form max-width.
Patch 1.20.1209a
 - [CSS] Added CSS properties to new "alert" family of classes, including one for success (green) and one for error (red).
 - [CSS] Minor adjustments to the max height for some of the nav-bars.

19.1 (Gold)
Patch 1.20.1127
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