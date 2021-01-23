<?php

//🔧 Set your desired date format for the copyright text at the bottom of the webpage.
define( "COPY_FORMAT", /*❔ Set value here*/ "Y", true /*❔ This second parameter is optional and dictates whether constant should be case sensitive. 💡 Default value is true; so I don't actually need to include this value here. I am doing so only for reference purposes; . NOTE: Defining case-insensitive constants is deprecated as of PHP 7.3.0.*/ );

/*📖 Documentation
====================

Set the value of the constant to the format of you like to use. Choose from one of these three options:
    1. "Y" - For just the year
    2. "M" - For month (written in full) and the year year
    3. "m" - For month (written in numeric form) and the year.
*/

//🔧 Indicate the directory where the images for the gallery are stored.
define("IMAGE_PATH", /*🔧 Set value here (paths are case sensitive); don't use relative path*/ "/sites/cmweb241/gallery/assets/images/");

/*📖 Path Settings - Documentation
===================================
Note: This setting doesn't affect assets, including images, that are not part of the image gallery.

❔ Relative Paths Not Supported
--------------------------------
Do not use relative paths! Start path with "/" to define absolute path from website root. Multiple php files at various directory levels use the config file. So setting a valid relative path for one page, such as index.php, won't garuntee that the path will work on another file using these settings, such as admin/photo_upload.php.

❔ Image Uploads
----------------
Any new images uploaded by the user from Photo Gallery webpage after will be placed in the directory you set here. However, Photo Gallery will not move any previously uploaded to another directory after you change this setting.

❔ Moving to a new location
----------------------------
If you are moving the images to a new directory, after making the change here, make sure to go back and move any existing photos from the old directroy to the new one.
*/

/*
💡 Developer Remarks
=========================
The following meta tag is to let text editors, including Adobe Dreamweaver, know to open this file as a UTF-8 file and, therefore, prevent potential data loss.
--> 
<!--
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
-->
*/