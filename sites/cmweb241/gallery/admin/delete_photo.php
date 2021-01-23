<?php
session_start();

//⌛Loading settings...
REQUIRE '../inc/config.php';

//⌛Getting things ready...
$return_to = "../index.php";
$dir = "../assets/images/";
$id = "#app2";

//⌛Setting Privilages...
if ( isset( $_SESSION[ 'usergroup' ] ) && $_SESSION[ 'usergroup' ] === 'administrator' ) {
  //⌛Enabling admin access...
  $is_authorized = true;

} else {
  $is_authorized = false;
}

//⌛Verifying authentication...
if ( !$is_authorized ) {
  header( "location: admin.php" );
  exit(); //❔ Rails motto - DRY: We redirect the user to admin.php because that page already has all the necessary code for dealing with scenarios in which users attempt to view restricted content without appropriate level of permission. In doing so, we avoid having to write redundant code here.
}

//⌛Connecting to database...
REQUIRE( "../../../../../galleryDBaccess.php" );

if ( !isset( $_GET[ 'filename' ] ) ) {
  //⌛Returning to gallery...
  $return_to = '../index.php?delete=true#app1';

} else {
  //⌛Getting this ready...
  $filename = $_GET[ 'filename' ];
  //⌛Checking for protected files...
  $protected_files = array( "car.jpg", "city.jpg", "sunset_trees.jpg", "flowers.jpg", "fruits.jpg" );
  //⌛Halts execution immediately, Insha'Allah, if protected file is detected...
  if ( in_array( $filename, $protected_files ) )
    exit( 'This is a pre-installed application asset and is protected from deletion. Please select the back button on your browser to return to the gallery and try again by selecting any file that was uploaded by the user after the Photo Gallery application was installed.' );

  //⌛Creating query...
  $query = "DELETE FROM photographs WHERE filename = '$filename'";

  if ( $conn->query( $query ) === TRUE ) {
    unlink( $dir . $filename );
    $return_to = '../index.php?output_status=success#app2';
  } else {
    echo "Error deleting record: " . $conn->error;
    $output = 'database';
  }

}


//⌛Cleaning up...
mysqli_free_result( $result );
mysqli_close( $conn );

//⌛Returning to gallery...
header( "location: $return_to" );

/*
💡 Developer Remarks
-------------------------------
The following meta tag is to let text editors, including Adobe Dreamweaver, know to open this file as a UTF-8 file and, therefore, prevent potential data loss.

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
*/