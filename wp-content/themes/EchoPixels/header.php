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
    <link href="https://fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <?php wp_head(); ?>
    <title>Echo Pixels</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/image/echoPixels.png" alt="">
      </div>
      <!-- Mettre la nav ici -->
      <div class="menu_header">
        <?php wp_nav_menu( array('exclude' => '19')); ?>
      </div>

    </header>
