<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 1 - CMWEB 241 Student Site - NazmusLabs</title>
	
    <meta charset="UTF-8">
	<meta name="description" content="Nazmus's Student Site Webpage for CMWEB at Illinois Central College"/>
	<meta name="author" content="Nazmus Shakib Khandaker (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)"/>
	
	<meta name="version" content="13.0.20.909"/>
	<meta name="created" content="September 9, 2020"/>
	<meta name="updated" content="September 9, 2020"/>
	
	<link rel="stylesheet" type="text/css" href="lab1.css">
</head>
	
<!--
So, you are here to view the source code for this page, huh?
Well, I'm glad you did; make yourself at home and explore at your leasure..

© 2020 Nazus Shakib Khandaker & NazmusLabs. Some Rights Reserved. CC-BY-SA 4.0
-->
	
<body>
	
<!--========================
	 START OF HEADER SECION
	========================-->
	<div>
		
		<!--////////////////////////
		  START of Header Container
		  /////////////////////////-->
		<div class="container-wide">
			
			<!--Float 1 -->
			<div class="header-box">

				<!--Site Logo-->
				<a href="../../index.html" class="left-align">
					<img src="../../assets/graphics/logo-header.png"
						 alt="NazmusLabs Logo"
						 title="NazmusLabs Logo"
						 class="resize-85-percent">
				</a>
				<!--/ Site Logo-->
				
			</div>
			<!--/ Float 1-->
			
			<!--Float 2-->
			<div class="header-box">
				<h5>Types of list...</h5>
				<p>...But this time they are nested.</p>
			</div>
			<div class="clearfix"></div>
			<!--/ Float 2-->

		</div>
		<!--///////////////
		  END of Container
		  ////////////////-->
		
	</div>
<!--======================
	 END OF HEADER SECION
	======================-->

<!--===================
	 START OF MENU BAR
	===================-->
	<div>
		
		<!--/////////////////
		  START of Container
		  //////////////////-->
		<div class="nav-bar">
			<!--Nav-bar Menu Items-->
			<div class="container-nav">
				<ul class="right-align">
					<li><a class="menu-button" href="../../index.html"><span class="button-text-decoration">Home</span></a></li>
					<li class="menu-button-disabled">Projects</li>
					<li class="menu-button-disabled">Labs</li>
					<li><a class="menu-button" href="../../about.html"><span class="button-text-decoration">About</span></a></li>
					<li class="menu-button-disabled">|</li>
					<li><a class="menu-button" href="https://github.com/nazmuslabs" target="_blank"><span class="button-text-decoration">GitHub</span></a></li>
				</ul>
			</div>
			<!--/Nav-bar Menu Items-->
		</div>
		<!--///////////////
		  END of Container
		  ////////////////-->
		
	</div>
<!--==================
	 END OF MENU BAR
	==================-->
	
<!--===========================
	 START OF FEATURED SECTION
	===========================-->
	
	<div id="featured"><h1>Lab 1 - CMWEB 120 - NazmusLabs</h1></div>
	
	<div class="content-section-light">
		
<!--=========================
	 END OF FEATURED SECTION
	=========================-->
	
	
<!--=========================
	 START OF CONTENT SECION
	=========================-->
		
		<!--//////////////////
		  START of Container 1
		  ///////////////////-->
		<div class="container">
			<h1>Asking the Crickets for the Weather</h1>

			<!--Bismillah-->
			<p id="Bismillah">
				In the name of Allah, the Most Gracious, the most Merciful.
			</p>
			<!--/Bismillah-->
			
			<!--////////////////////
			   START of Topic Intro
			  //////////////////////-->
			<div class="page-Intro">
				
				<p>In this lab we look at various types of lists in HTML, similar to how we did in <a href="https://nazmuslabs.github.io/CMWEB/sites/cmweb110/labs/lab2/lab2.html">Lab 2 of CMWEB 110</a>. In this lab, however, we are also looking at nested lists. So, I will demonstrate the types of lists nested inside an unordered list. This lab also covers in-line and block-level elements. See the "External Links" below for more information.</p>
				
			</div>
			<!--//////////////////
			   END of Topic Intro
			  ////////////////////-->
			
			
			<!--//////////////////////
			  START of Sidebar Content
			  ////////////////////////-->
			<div class="sidebar">
				<!-- Search Box - [DISABLED CODE]
				<div>
					<script async src="https://cse.google.com/cse.js?cx=011282160671876409027:ptdgqqdcffz"></script>
					<div class="gcse-search"></div>
				</div>
				<--/ Search Box [DISABLED CODE]-->
				<!--START of Sidebar Menu-->
				<div class="menu-vertical">
					<h2>CMWEB Explorer</h2>

					<!--Menu Items-->
					<ul>
						<li><a href="../cmweb120/index.html">CMWEB 120 Student Site</a></li>
						<li><a href="../cmweb241/index.html">CMWEB 241 Student Site</a></li>
						<li><a href="https://nazmuslabs.github.io/CMWEB/sites/cmweb110/projects/proj2/proj2-3.html">Travia Page - Project 2</a></li>
						<li><a href="https://nazmuslabs.github.io/CMWEB/sites/cmweb110/labs/lab9/lab9.html">Tic-Tac-Toe - Lab 9</a></li>
						<li><a href="https://nazmuslabs.github.io/CMWEB/sites/cmweb110/projects/proj1/content/proj1-1.html">Chapter 1 - Project 1</a></li>
					</ul>
					<!--/ Menu Items-->

					<p>
						<a class="button-ornate" href="../../index.html">
							<span class="button-text-decoration">↩ CMWEB Home</span>
						</a>
					</p>
				</div>	
				<!--/ Sidebar Menu-->
			</div>
			<!--/////////////////////
			  END of Sidebar Content
			  ///////////////////////-->
			
			<div class="clearfix"></div>
		</div>
		<!--/////////////////
		  End of Container 1
		  /////////////////-->
		
		<!--/////////////.////
		  START of Container 2
		  ///////////////////-->
		<div class="container">
			
		<!--Main Content-->
		<div>
			<h2>Demonstration of Nested Lists</h2>
			<ul type="dosc">		<!--Example of undordered list-->
				<li>
					<h3>Ordered List Example 1 with In-Line Elements</h3>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Here is an example of inline elements. Press Ctrl+U to see the html code.</p>
					<ol type="1">
						<li><span style="color:deeppink">Colored Text</span></li>
						<li><span><em>Italic Text</em></span></li>
						<li><span style="font:bolder"><strong>Bold Text</strong></span></li>
					</ol>
				</li>
				<li>
					<h3>Ordered List Example 2 with Block-Level Elements</h3>
					<p class="pad-right">Here is an example of block-level elements. Notice that I set the color of the entire list and specefied the bullet tyeps in the list's html tag itself! Press Ctrl+U to see the html code.</p>
					<ol style="list-style-type:lower-roman; color:purple" type="1">
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ol>
				</li>
				<li>
					<h3>Definition List</h3>
					<p>Here is an example of a definition list. Press Ctrl+U to see the html code.</p>
					<dl>
					<dt><strong>Hypertext Markup Language(abbr. HTML)</strong></dt>
					<dd><em>A set of tags and rules used in developing hypertext documents to be presented on web browsers, allowing incorporation of text, graphics, sound, video and hyperlinks.</em></dd>
					<dt><strong>Cascading Style Sheets (abbr. CSS)</strong></dt>
					<dd><em>A style sheet language used for describing the presentation of a document written in a markup language like HTML.</em></dd>
					</dl>
				</li>
			</ul>
		</div>
			
			<!--/ Main Content-->
			
			<!--Bonus Content-->
			<h2>External Links</h2>

			<!--List of Links-->
			<ul>
				<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements" target="_blank">See the Block-level elements MDN documentation</a></li>
				<li><a href="https://www.tutorialrepublic.com/html-tutorial/html-lists.php" target="_blank">Learn more about using lists in HTML</a></li>
			</ul>
			<!--/ List of Links-->

			<h3>Thanks for visiting!</h3>
			<!--End of C.A1 GROUP 2-->
			
		</div>
		<!--/////////////////
		 End of Container 2
		 //////////////////-->
		
		
	</div>
<!--=======================
	 END OF CONTENT SECION
	=======================-->
	
	
<!--==========================
	 START OF FOOTER SECION A
	==========================-->
	<div class="content-section-grey">
		
		<!--/////////////////////
		  START of Container 
		  ///////////////////////-->
		<div class="container-wide">
			
			<!--Footer Menu-->
			<div class="menu-horizontal">
				
				<!--Float 1-->
				<div class="double-float">
					<p>
						<a class="button-ornate" href="../../index.html">
							<span class="button-text-decoration">↩ CMWEB 110 Home</span>
						</a>
					</p>
				</div>
				<!--/ Float 1-->
				
				<!--Float 2-->
				<div class="double-float">
					<!--Footer Menu items-->
					<ul>
						<li><a href="../index.html">Projects</a></li>
						<li><a href="../../labs/index.html">Labs</a></li>
						<li><a href="../../contact.html">Contact</a></li>
						<li><a href="../../about.html">About</a></li>
						<li>|</li>
						<li><a href ="http://github.com/nazmuslabs" target="_blank">GitHub</a></li>
					</ul>
					<!--/ Footer Menu Items-->
				</div>

				<!--/ Float 2-->
				
				<div class="clearfix"></div>
    		</div>
			<!--/ Footer Menu-->
			
			<div class="horizontal-gap"></div>

			
			<!--Contact Options-->
			<div class="tripple-float">
				<h3>Get in Touch</h3>
				<p>Coming soon Insha'Allah</p>
			</div>
			<div class="tripple-float">
				<h3>Get the Code</h3>
				<p>Coming soon Insha'Allah</p>
			</div>
			<div class="tripple-float">
				<h3>Send Feedback</h3>
				<p>Coming soon Insha'Allah</p>
			</div>
			<!--/ Contact Options-->
			<div class="clearfix"></div>
			
		</div>
		<!--///////////////
		  END of Container
		  ////////////////-->
		
	</div>
<!--========================
	 END OF FOOTER SECION A
	========================-->
	
	
<!--==========================
	 START OF FOOTER SECION B
	==========================-->
	<div>
		
		<!--/////////////////
		  START of Container
		  //////////////////-->
		<div class="container-wide">
			
			<!--Licence Info -->
			<p id="license">
				<a rel="license" href=
				   "http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">
					<img alt="Creative Commons
						License" style="border-width:0"
						src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
				<br />This work is licensed under a
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">
				Creative Commons Attribution-ShareAlike 4.0 International License</a>.
			</p>
			<!--/ Licence Info -->
			
			<!--Copyright Info -->
			<p>© 2020 Nazmus Shakib Khandaker and NazmusLabs. Some rights reserved.</p>
			<!--/ Copyright Info -->
			
		</div>
		<!--///////////////
		  END of Container
		  ////////////////-->
		
	</div>
	
</body>
	
</html>

<!--
End of HTML Document
Thanks for stopping by the back-stage!

Written and Designed by Nazmus Shakib Khandaker
Version 13.0.20.909 (Update 2)

Originally created on September 9, 2020

This work is licensed under the Creative Commons Attribution-ShareAlike 4.0 International License. To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/4.0/ or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.

© 2020 Nazus Shakib Khandaker & NazmusLabs. Some Rights Reserved. CC-BY-SA 4.0
*/

/*Last Updated on September 9, 2020*/

-->
