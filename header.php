<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/img/logo.webp" type="image/x-icon" />
  <meta name="author" content="MM" />
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>
  <!-- Inicio Wordpress Header -->
  <?php wp_head(); ?>
  <!-- Final Wordpress Header -->
</head>

<body>

  <header class="menu">
    <div class="container">
      <img src="<?= get_template_directory_uri() ?>/assets/img/logo-placeholder.png" alt="">

      <button class="menu-toggle" aria-label="Menu">
        ☰
      </button>

      <nav class="menu-items">
        <?php
        $argsHeader = [
          'menu' => 'principal',
          'theme_location' => 'menu-principal',
          'container' => false,
          'echo' => false
        ];

        $menuHeader = wp_nav_menu($argsHeader, false);

        preg_match_all('/<a(.*?)<\/a>/', $menuHeader, $matchesHeader);

        if (!empty($matchesHeader[0])) {
          foreach ($matchesHeader[0] as $linkHeader) {
            echo $linkHeader;
          }
        }
        ?>
      </nav>
    </div>
  </header>
