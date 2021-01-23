<?php
$return_to = "../index.php";
$dir = "../assets/images/";
$id = "#app2";

if ( isset( $_POST[ 'submit' ] ) ) {

  $file = $_FILES[ 'file' ];

  $file_name = $file[ 'name' ];

  if ( !empty( $file_name ) ) {

    $upload_error = $file[ 'error' ];

    if ( !$upload_error ) {

      $file_ext = end( explode( ".", strtolower( $file_name ) ) ); // ❔ The explode function seperates a string by a given character ("." in our case) and create an array of partial strings. We use the "end" function to get the last item in the erray, which in our case will us the file extension.

      $allowed_ext = array( "jpg", "jpeg", "gif" );

      if ( in_array( $file_ext, $allowed_ext ) ) {

        $file_size = $file[ 'size' ];

        if ( $file_size < 1000000 ) { //❔ 1mb upper limit

          if ( !file_exists( $dir . $file_name ) ) {

            move_uploaded_file( $file[ 'tmp_name' ], $dir . $file_name ); //❔ File uploaded!

            $output = 'success';

            //Now this script will follow the same procedure that is used on index.php to display a single large image. The main lab page passes metadata via GET method to itself which is then processed at load time to display the image instead of the gallery. So here, the same concept is used. This script will send the metadata of the image that was uploaded to index.php so a large version of the image is displayed.

            $path = substr($dir.$file_name,3);
            $alt = $file_name;
            $caption = "A new photo has been uploaded!<br>File name: " . $file_name;

            //Encoding image metadata...
            $path_encoded = strtr( base64_encode( $path ), '+/', '-_' );
            $caption_encoded = strtr( base64_encode( $caption ), '+/', '-_' );


          } else {
            $output = 'conflict';
            $debug = $file_name;
          }


        } else {

          $output = 'size';
          $debug = $file_size;
        }

      } else {
        $debug = $file_ext;
        $output = 'ext';
      }


    } else {
      $output = 'fatal';
    }

    //

  } else {

    $output = 'empty';
  }

} else {

  $id = "";
  $output = 'null';
}
if($output != "success"){
    header( "location: ../index.php?output=$output&debug=$debug#app2" );
} else {
    header("Location: ../index.php?output=$output&encoded_path=$path_encoded&encoded_caption=$caption_encoded#gallery");
}
