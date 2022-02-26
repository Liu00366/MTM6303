<?php 
// Assigning the value of session variable to the $title variable
if(isset($_SESSION["page_title"])) {
    $title = $_SESSION["page_title"]; 
} else {
    $title = "Home Page";
}
if(isset($_SESSION["current_page"])) {
    $current_page = $_SESSION["current_page"]; 
} else {
    $current_page =  $_SESSION[ "index" ];
}
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

    <link href="./assets/css/main.a3f694c0.css" rel="stylesheet"></head>

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
        <a class="navbar-brand" href="./index.php" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
            <li class ="<?php if($current_page == 'index') {echo 'current-menu-item';}?>">
                <a href="./index.php" title="" class="active">Home</a>
            </li>

            <li class = "<?php echo $current_page == 'about' ? 'current-menu-item' : ''; ?>">
                <a href="./about.php" title="" class="active"> About</a>
            </li>
            <li class = "<?php if($current_page == 'pricing') {echo 'current-menu-item';}?>">
                <a href="./pricing.php" title="" class="active"> Pricing </a>
            </li>

        </ul>
      </div>
    </div>
  </nav>
</header>