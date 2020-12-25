<?php

if ( !true )exit( '<em><a style="text-decoration: none; cursor: default">Sandbox lab environment terminated.</a></em>' );


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lab Sandbox Environment</title>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
</head>

<body>
<?php

include 'layouts/header.php'


?>
<div class="container-wide" >
  <h1>Lab Sandbox Environment</h1>
  <div class="alert-error">
    <p><?php echo "hello world<br>";

    if ( !true )exit( '<strong><em>Sandbox lab environment terminated.</em></strong>' );
    ?> </p>
  </div>
</div>
<div class="content-section-light" >
  <div class="container" >
    <div style="padding-top: 4em; padding-bottom: 4em; border-style: dotted" > 
      <!--Preset space to add html test/sandbox codes-->
      <h1 style="text-align: center">sandox</h1>
      <p style="text-align: center">Write sandbox & test codes here</p>
      <div style="padding: 2em"> <!--🔖HTML test code-->
        <h2>HTML</h2>
      </div>
      <!--🔖HTML test code--> 
      
      <!--Below is another preconfigured space to quickly add php code.-->
      <div style="padding: 2em;">
        <?php /*PHP Test Code*/

        echo "<h2>PHP</h2>";

        if ( true /*Easily disable any test code inside here by adding n "!" before the word true in the if statement; remove the "!" to re-enable thest code. */ ) {

          $file = fopen( "admin/authorized.txt", "r" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );


          // Loops through processing one character or line at a time―depending on the function―until it reaches end of file.
          /*
          while ( !feof( $file ) ) {
            $output = $output . fgetc( $file ); //singel char
          } //end of while loop
*/

          while ( !feof( $file ) ) {
            //$new_mama_qq = $mama_qq . $mama_qq;
            echo fgets( $file ) . "<br>";

          }
            echo "<br>";
          $mama_qq = "MAM-QQ ";
          $i = 0;
          while ( $i < 10 ) {
            echo $mama_qq;
            $i++;
          }

          echo $new_mama_qq;
          /*
          while ( !feof( $file ) ) {
            $output = $output . fgets( $file ); //single line;
            echo $mama_qq;
          }
          //end of while loop

          echo "<p>$output</p>";
*/
        }
        //end of if statement
        fclose( $file );

        echo $mama_qq;
        /*PHP Test Code*/
        ?>
      </div>
    </div>
    <h2>Lorem Ipsum</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque earum odit qui quae, ea explicabo quia incidunt iste nisi, sint facilis similique inventore provident et voluptates magni dolore cupiditate dolorum!</p>
    <p>Praesentium ducimus voluptates voluptatibus rem omnis placeat, unde quo soluta quidem, et aliquam pariatur, quod tempora id enim porro minima nihil magnam? Repellendus odit illo odio illum provident exercitationem, unde quibusdam minus corporis quas similique eum esse aliquam. Quo in cupiditate quidem libero id.</p>
    <h2>Ullam Laborum</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet soluta ipsum expedita quam a voluptatum, in perferendis veniam asperiores doloribus ratione quae, ipsam ullam laborum architecto natus? Quaerat, soluta, hic. Ipsum, voluptatem doloribus molestias animi velit quidem quae cupiditate delectus, ducimus voluptates perferendis! Numquam quasi saepe neque magnam eveniet tempora cum, a!  Obcaecati deserunt, molestiae officia doloribus. Quidem asperiores, porro itaque veniam perspiciatis similique ea, obcaecati, temporibus optio ducimus vitae, eos deserunt quis numquam.</p>
  </div>
</div>
<div class="container-wide" >
  <p>
    <?php
    echo "hello world<br>";


    if ( true )exit( '<em><a style="text-decoration: none; cursor: default">Sandbox lab environment terminated.</a></em>' );
    ?>
  </p>
</div>
</body>
</html>
<?php
if ( true )exit( '<em><a style="text-decoration: none; cursor: default">Sandbox lab environment terminated.</a></em>' );

echo "";