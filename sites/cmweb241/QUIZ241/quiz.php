<?php
//⌛Checking for submit...
if ( filter_has_var( INPUT_POST, 'submit' ) ) {
  //⌛Getting things ready...
  $input = htmlspecialchars( $_POST[ 'input' ] );
  $alert = "";
  $caption = '';
  $path = '';
  $id = 'app2';

  //⌛checking required field(s)...
  if ( !empty( $input ) ) {
    if ( is_numeric( $input ) ) {
      //⌛verifying numeric intervals...
      if ( $input >= 1 && $input <= 2 ) {
        //⌛Connecting to database...
        REQUIRE( "../../../../galleryDBaccess.php" );
        //⌛Creating query...
        $query = 'SELECT filename, caption FROM photographs';
        //⌛Getting result...
        $result = mysqli_query( $conn, $query );

        //📸Smile!
        //⌛Fetching data from database & allocating images...
        $images = mysqli_fetch_all( $result, MYSQLI_ASSOC );

        //⌛Cleaning up...
        mysqli_free_result( $result );
        mysqli_close( $conn );

        //⌛performaing primary operations...
        $daisy = $images[ $input - 1 ];
        $path = 'images/' . $daisy[ "filename" ];
        $caption = "Photo " . $input . ': ' . $daisy[ "caption" ];
        $id = 'app1';

        //⌛outputting results...

        //⌛Encoding image metadata...
        $path_encoded = urlencode( $path );
        $caption_encoded = urlencode( $caption );

      } else {
        $alert = 'out_of_bounds';
      }
    } else {
      //verifying data types...
      $alert = 'not_numeric';
    }
  } else {
    //display error
    $alert = 'empty';
  }
}

header( "location: start.php?output_status=$alert&encoded_path=$path_encoded&encoded_caption=$caption_encoded&input=$input#$id" );
/*
💡 Developer Remarks
-------------------------------
The following meta tag is to let text editors, including Adobe Dreamweaver, know to open this file as a UTF-8 file and, therefore, prevent potential data loss.

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
*/