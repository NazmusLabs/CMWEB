<?php
$copy_constant = COPY_FORMAT;

switch ( $copy_constant ) {
  case "Y":
    $copyright_date = date( "Y" );
    break;
  case "M":
    $copyright_date = date( "F" ) . " " . date( "Y" );
    break;
  default:
    $copyright_date = date( "m" ) . ", " . date( "Y" );
    break;
}


?>

<!--=================================
	 📑 START OF FOOTER SECION A 📑
	=================================-->
<!--💍-1-💍-->
<div class="content-section-grey"> 
  <!--🧶-2-🧶-->
  <div class="container-wide"> 
    <!--🧢-3-🧢-->
    <nav class="menu-horizontal" style="position: relative;"> 
      <!--🪡-4-🪡-->
      <div class="double-float" > <!--🎈--> 
        <!--🔗 Click!--> <a class="button-ornate" href="/sites/cmweb241"> <span class="button-text-decoration">↵
        CMWEB 241 Home</span> </a> </div>
      <!--🪡-4-🪡--> 
      
      <!--🧵-4-🧵-->
      <div class="double-float" > <!--🎈--> 
        <!--📜--> <!--📜-->
        <ul style="position: absolute; right: 1em">
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241/projects/">Project</a></li>
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241#labs">Labs</a></li>
          <!--🔗 Click!-->
          <li><a href="/sites/cmweb241">About</a></li>
          <li>|</li>
          <!--🔗 Click!-->
          <li><a href="https://github.com/NazmusLabs/CMWEB" target="_blank">GitHub</a></li>
        </ul>
        <!--📜--> <!--📜--> 
      </div>
      <!--🧵-4-🧵--> 
    </nav>
    <!--🧢-3-🧢--> 
    <br>
    <!--📞-3-📞-->
    <div class="tripple-float"> <!--🎈-->
      <h3>Get in Touch</h3>
      <p> Connect with me on Twitter <a href="http://twitter.com/nazmuslabs" target="_blank">@NazmusLabs</a>.<br>
        <br>
        You can also check out my latest videos <a href="http://youtube.com/nazmuslabsvideos" target="_blank"
           >on YouTube</a>.</p>
    </div>
    <!--📞-3-📞--> 
    
    <!--📞-3-📞-->
    <div class="tripple-float"> <!--🎈-->
      <h3>Get the Code</h3>
      <p>All of the source codes and assets for this page as well as
        those for entirety of this CMWEB student site is available
        to you on my <a href="https://github.com/NazmusLabs/CMWEB" target="_blank">CMWEB
        GitHub
        repository</a>.</p>
    </div>
    <!--📞-3-📞--> 
    
    <!--📞-3-📞-->
    <div class="tripple-float"> <!--🎈-->
      <h3>Send Feedback</h3>
      <p>Have questions or comments? Just shoot me an email either
        at my college email address (<a href="mailto:nk308@lab.icc.edu">nk308@lab.icc.edu</a>)
        or at my personal email (<a href="mailto:nazmus@outlook.com">nazmus@outlook.com</a>).</p>
    </div>
    <!--📞-3-📞--> 
  </div>
  <!--🧶-2-🧶--> 
</div>
<!--💍-1-💍--> 
<!--==============================
	 📑 END OF FOOTER SECION A 📑
	==============================--> 
<!--================================
	 🥏 START OF FOOTER SECION B 🥏
	================================--> 
<!--🎫-1-🎫-->
<footer> 
  <!--👒-1-👒-->
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
    <p><small>&copy <?php echo $copyright_date; ?> Nazmus Shakib Khandaker and NazmusLabs. Some
      rights reserved.</small></p>
    <!--/ Copyright Info --> 
  </div>
  <!--👒-1-👒--> 
</footer>
<!--🎫-1-🎫--> 
<!--==============================
	 🥏 END OF FOOTER SECION A 🥏
	==============================--> 

<!--💡 Developer Remarks
==========================
This meta tag is to let text editors know to open this file as a UTF-8 file and, therefore, prevent potential data loss.
--> 
<!--
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
-->