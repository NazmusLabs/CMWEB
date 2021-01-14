<?php
$copy_constant = COPY_FORMAT;

switch($copy_constant){
    case "Y":
        $copyright_date = date("Y");
        break;
    case "M":
        $copyright_date = date("F")." ".date("Y");
        break;
    default:
        $copyright_date = date("m").", ".date("Y");
        break;
}


?>

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
      <div class="double-float"> <!--🎈--> 
        <!--🔗 Click!--> <a class="button-ornate" href="../../index.php"> <span class="button-text-decoration">↵
        CMWEB 120 Home</span> </a> </div>
      <!--/ Float 1--> 
      <!--Float 2-->
      <div class="double-float"> <!--🎈--> 
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
    </div><br>
    <!--/👆🏻 Footer Menu--> 
    <!--📞 Contact Options-->
    <div class="tripple-float"> <!--🎈-->
      <h3>Get in Touch</h3>
      <p> Connect with me on Twitter <a href="http://twitter.com/nazmuslabs" target="_blank">@NazmusLabs</a>.<br>
        <br>
        You can also check out my latest videos <a href="http://youtube.com/nazmuslabsvideos" target="_blank"
           >on YouTube</a>.</p>
    </div>
    <div class="tripple-float"> <!--🎈--> 
      <h3>Get the Code</h3>
      <p>All of the source codes and assets for this page as well as
        those for entirety of this CMWEB student site is available
        to you on my <a href="https://github.com/NazmusLabs/CMWEB" target="_blank">CMWEB
        GitHub
        repository</a>.</p>
    </div>
    <div class="tripple-float"> <!--🎈--> 
      <h3>Send Feedback</h3>
      <p>Have questions or comments? Just shoot me an email either
        at my college email address (<a href="mailto:nk308@lab.icc.edu">nk308@lab.icc.edu</a>)
        or at my personal email (<a href="mailto:nazmus@outlook.com">nazmus@outlook.com</a>).</p>
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
    <p><small>&copy <?php echo $copyright_date; ?> Nazmus Shakib Khandaker and NazmusLabs. Some
      rights reserved.</small></p>
    <!--/ Copyright Info --> 
  </div>
  <!--/////////////////////
	  📤 END of Container 📤
	  //////////////////////--> 
</div>


<!--
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
-->