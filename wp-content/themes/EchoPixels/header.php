<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT)
// error_reporting(0);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Echo Pixels</title>
  </head>
  <body>
    <header>
      <img class= "logo" src="../../../wp-includes/images/echopixels/echoPixels.jpg" alt="">
      <!-- Mettre la nav ici -->
      <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>

    </header>
