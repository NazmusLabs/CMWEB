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
Version 19.0.20.1209 (Update 1)
Patch version: 1.20.1209b

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
if ( filter_has_var( INPUT_POST, 'login' ) ) {
  //collect user input & initializing variables...
  $username = htmlspecialchars( $_POST[ 'username' ] );
  $password = htmlspecialchars( $_POST[ 'password' ] );
  $alert = "";
  $alert_class = "";
  $echo_credentials = "";

  //checking required field(s)...
  if ( !empty( $username ) || !empty( $password ) ) {
    //performaing primary operations & generating output...
    $echo_credentials = "<h4>Here are the credentials you entered:</h4>Username: {$username}</br>" . "Password: {$password}";

    //verifying login credentials...
    if ( $username == "hello" && $password == "world" ) {
      echo boo;
      //generating success alert...
      $alert_class = 'alert-success';
      $alert = "Your login credentials were correct!";
    } else {
      //verifying data types...
      $alert_class = 'alert-error';
      $alert = 'Incorrect login credentials: Please try again.';
    }
  } else {
    //display error
    $alert_class = 'alert-error';
    $alert = 'Incorrect login credentials: Make sure enter both the username and the password';
  }
}
?>
<!-- /❓ PHP ❓ -->

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>User Logins - Lab 2</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="19.0.20.1209 (Update 1)">
<meta name="patch" content="1.20.1209b">
<link rel="stylesheet" type="text/css" href="lab2.css">
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
            alt="NazmusLabs Logo" title="NazmusLabs Logo" class="resize-85-percent"> </a> 
      <!--/ Site Logo--> 
    </div>
    <!--/ Float 1--> 
    <!--Float 2-->
    <div class="header-box">
      <h5>“Be who you are and say what you feel...</h5>
      <p><small>...because those who mind don't matter, and those who matter don't mind.” ― Bernard M. Baruch </small></p>
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
        <!--🔗🚫 Click!-->
        <li class="menu-button-disabled">Projects</li>
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
  <h1>Lab 2 - CMWEB 241 - NazmusLabs</h1>
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
    <h1>User Logins</h1>
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
          <!--🔗🚫 Click!-->
          <li><small>CMWEB 241 Lab 2 ✔</small></li>
          <!--🔗 Click!-->
          <li><a href="../lab3/lab3.php"><small>CMWEB 241 Lab 3</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab4/lab4.php"><small>CMWEB 241 Lab 4</small></a></li>
          <!--🔗 Click!-->
          <li><a href="../lab5/lab5.php"><small>CMWEB 241 Lab 5</small></a></li>
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
				 class="tripple-float" >
        <p>For this lab, the goal is "to create a reasonably secure login page (for both username and password). This page should contain a  form which collects the data (it should contain a username field and a password field. Also include a submit and reset button.) For the present time, only echo back what was entered into the form (print the contents of the form that were entered on the page when the submit button is pressed)".</p>
        <img src="assets/graphics/pine.svg"
				 alt="leaves, pine cones, and bells"
				 class="center-image" > </div>
      <!--/📢 Content Intro 📢--> 
    </section>
    <!--🔖--> 
    <!--📑 Main Content 📑-->
    <section> 
      <!--🔖-->
      <h2>Main Application</h2>
      <p>Below is the login form created for this lab. The form is made up of three input types: textbox, password, and button. The "Sign in" button collects the user's input and compares it to a pre-defined username and password. The user is then alerted whether the credentials were correct. Additionally, the values submitted by the user is echoed back to them on the webpage.</p>
    </section>
    <!--🔖-->
    <section id="app">
    <!--🔖-->
    <h3>Demo Login Form</h3>
    <p> Please enter a username and a password and then click "Login" to continue. Note: This is a demo login form and will not sign you into anything. But it does work...somewhat.</p>
    <h1 style="text-align: center">
    Sign in
    </h2>
    <!--📨 Form-->
    <form class=feedback-form action="<?php echo $_server['php_self'] ?>#app" method="post" style="max-width: 20em;">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>"/>
        <!--❔ Preserves previously enter value--> 
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" />
      </div>
      <div>
        <input class="button" type="submit" value="Sign in" id="login" name="login">
        <input class="button" type="reset" value="Clear Form" name="reset-button" id="reset" />
      </div>
    </form>
    <!--📨 Form--> 
    <!--❓ Output ❓-->
    <div class="<?php echo $alert_class; ?>"> <?php echo $alert; ?> </div>
    <div><?php echo $echo_credentials; ?></div>
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
    <!--/🎁 Bonus Content 🎁--> <em><small>Featured image credit:
    Photo by <a href="https://unsplash.com/@turnlip19" target="_blank">Jong Marshes</a> on <a
              href="https://unsplash.com/photos/79mNMAvSORg" target="_blank">Unsplash</a>.</small></em>
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
        CMWEB 120 Home</span> </a> </div>
      <!--/ Float 1--> 
      <!--Float 2-->
      <div class="double-float"> 
        <!--🔗 Footer Menu items-->
        <ul>
          <!--🔗 Click!-->
          <li><a href="../index.html">Projects</a></li>
          <!--🔗 Click!-->
          <li><a href="../../labs/index.html">Labs</a></li>
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
19.0 (Update 1)
Patch 1.20.1909b
 - [CSS] Slightly increased form max-width.
Patch 1.20.1209a
 - [CSS] Minor adjustments to the max height for some of the nav-bars

19.0 (Gold)
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
--> 
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
 - 

⚠ Note: These changelogs DO NOT include content specefic to this particular lab or project. Items mentioned in the changelog are those that are a part of the document's core layout and CSS sutibale for being carried forward to future CMWEB labs and projects.

📝 Patch Notes for 19.0
--------------------------
19.0 (Gold)
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
--> 
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
LAB DESCRIPTION: Create a simple calculator based onpredefined specs.

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
19.0 (Update 1)
Patch 1.20.1209
 - [CSS] Minor adjustments to the max height for some of the nav-bars

19.0 (Gold)
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
-->
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
LAB OBJECTIVE: To build a simple calculator based on predefined specs using PHP server-side scripting.

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
19.1 (Update 1)
Patch 1.20.1210a
 - [PHP] Added htmlspecialchars() to code handling user input to prevent malicious attacks through code insertion in input fields.
 - [CSS] Set a global 16px font size for buttons
 - [CSS] Added CSS styling to the "password" input type. 
 - [CSS] Minor adjustments to some of the layout elements.

19.1 (Gold)
Patch 1.20.1209
 - [CSS] Added CSS properties to new "alert" family of classes, including one for success (green) and one for error (red).
 - [CSS] Additional adjustments to the max height for some of the nav-bars.

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