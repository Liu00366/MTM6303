<?php 
// Assigning the value of session variable to the $title variable

    $title = $_SESSION["page_title"]; 

    $current_page = $_SESSION["current_page"]; 

?>

<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage MTM6303_assg2
 * @since MT6303 Assignment 1.0
 */
?>


<!-- start html tag -->
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="./assets/favicon.ico" rel="icon">

    
    <title><?php echo $title ?></title>  

    <link rel ="stylesheet" href=" <?php echo get_stylesheet_directory_uri()?>/assets/css/main.a3f694c0.css">
  </head>

<!-- start body tag -->
    <body>
        
<!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
      
      <!-- menu not display on the page -->
      <?php wp_nav_menu( array(
       'theme_location' => 'top',
       'container_class' => 'custom-menu-class') );
      ?>
      </div>
    </div>
  </nav>
</header>