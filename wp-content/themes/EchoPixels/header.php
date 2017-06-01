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
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/image/favicon.ico" />
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/image/favicon.ico" /><![endif]-->

      <?php wp_head(); ?>
    <title>Echo Pixels</title>
  </head>
  <body>
    <header class="header">
     <div class="wrapper_header">
      <div class="logo">
       <a href="../index.php"><img src="<?php echo get_template_directory_uri(); ?>/image/echoPixels.png" alt=""></a>
      </div>
      <div class="menu_header_responsive">
       <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
      </div>
     </div>
      <!-- Mettre la nav ici -->
      <div class="menu_header">
        <?php wp_nav_menu( array('exclude' => '27')); ?>
      </div>


    </header>
