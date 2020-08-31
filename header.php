<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ma navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
    <header>
      <div class="navbar">
          <a href="#">Accueil |</a>
          <a href="#">Html |</a>
          <a href="#">Css |</a>
          <a href="#">Javascript</a>
      </div>
      <div class="burger-menu-open" id="burgerNav" onclick="openNav()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <div class="menu-close">
        <div id="myNav" class="overlay">
          <a href="#" onclick="closeNav()">
            <div class="burger-menu-close">
              <div class="close-bar1"></div>
              <div class="close-bar2"></div>
              <div class="close-bar3"></div>
            </div>
          </a>
          <div class="overlay-content">
            <a href="#">Accueil</a>
            <a href="#">Html</a>
            <a href="#">Css</a>
            <a href="#">Javascript</a>
          </div>
        </div>
      </div>
    </header>
