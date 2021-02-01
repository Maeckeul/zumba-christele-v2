<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zumba Christele</title>
  
  <?php wp_head(); ?>
  
</head>
<body>

  <div class="wrapper">

    <header class="header">

      <div class="header-logo">
        <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/" class="header-logo--link">
          <img src="<?= get_template_directory_uri() ?>/public/img/logo.jpeg" alt="Logo" class="header-logo__img">
          <h1 class="header-logo--brand">Zumba Christele</h1>
        </a>
      </div>

      <div class="logo-menu">
        <a href="#" class="ui-button open-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
          <p class="logo-menu__text">Menu</p>
        </a>
      </div>  

      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__list--item">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/" class="nav__list--link"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a>
          </li>
          <li class="nav__list--item">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/christele-votre-coach/" class="nav__list--link"></i><i class="fa fa-user-circle-o" aria-hidden="true"></i>Christèle, votre coach</a>
          </li>
          <li class="nav__list--item">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/mes-activites/" class="nav__list--link"><i class="fa fa-child" aria-hidden="true"></i>Mes activités</a>
          </li>
          <li class="nav__list--item">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/mes-videos/" class="nav__list--link"><i class="fa fa-video-camera" aria-hidden="true"></i>Mes vidéos</a>
          </li>
          <li class="nav__list--item">
            <a href="http://localhost/WordPress/Zumba-Christele-V2-WP/contactez-moi/" class="nav__list--link"><i class="fa fa-phone" aria-hidden="true"></i>Contactez-moi</a>
          </li>
        </ul>
      </nav>

    </header>

    <div class="scrollex"></div>

    <main class="main">