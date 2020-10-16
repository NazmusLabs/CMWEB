<?php include 'inc/header.php'; ?>
	
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

<?php include 'inc/footer.php'; ?>

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
