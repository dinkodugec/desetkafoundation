<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php
    include_once 'head.php';
    ?>
  </head>
  <body>

  <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="responsive-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Restoran 10</li>
      <li class="has-submenu">
        <a href="#0">Izbornik</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#0">Jela sa roštilja</a></li>
          <li><a href="#0">Pizza</a></li>
          <li><a href="#0">Cjenovnik pića</a></li>
        </ul>
      </li>
      
      <li><a href="login.php">Login</a></li>


    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="tražilica"></li>
      <li><button type="button" class="button">traži</button></li>
    </ul>
  </div>
</div>
       


    <?php
       
        include_once 'skripte.php';
    
    ?>

  </body>
</html>
