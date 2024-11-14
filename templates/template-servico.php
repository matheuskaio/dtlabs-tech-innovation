<?php
//Template Name: Serviço

get_header();

?>


<section class="service-content">
  <div class="service-content__banner">
    <h2>Vamos Conversar ?</h2>
    <span>Fale conosco para saber como podemos ajudar sua empresa</span>
  </div>
  
   <?php
    $argsServicoHome = array(
      'post_type' => 'servico',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );
    $queryServicoHome = new WP_Query($argsServicoHome);
    ?>
    
  <div class="container">
    <div class="service__list">
        
         <?php if ($queryServicoHome->have_posts()) : ?>
        <?php while ($queryServicoHome->have_posts()) : $queryServicoHome->the_post(); ?>
         <div class="service__item">
      <?php $icon = get_field('icone')?>
        <?=$icon  ?>
        <!--<i class="fa-solid fa-desktop"></i>-->
        <h4> <?= the_title();?> </h4>
     
          <?php $descricao = get_field('descricao')?>
          
        <span> <?= $descricao ?></span>
      </div>
        
          <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query();
      wp_reset_postdata(); ?>
     

      <!--<div class="service__item">-->
      <!--  <i class="fa-solid fa-desktop"></i>-->
      <!--  <h4> Desenvolvimento de Software Sob Medida </h4>-->
      <!--  <span> Criamos soluções personalizadas para atender às necessidades exclusivas do seu negócio, desde aplicativos até sistemas corporativos complexos </span>-->
      <!--</div>-->

      <!--<div class="service__item">-->
      <!--  <i class="fa-solid fa-desktop"></i>-->
      <!--  <h4> Desenvolvimento de Software Sob Medida </h4>-->
      <!--  <span> Criamos soluções personalizadas para atender às necessidades exclusivas do seu negócio, desde aplicativos até sistemas corporativos complexos </span>-->
      <!--</div>-->

      <!--<div class="service__item">-->
      <!--  <i class="fa-solid fa-desktop"></i>-->
      <!--  <h4> Desenvolvimento de Software Sob Medida </h4>-->
      <!--  <span> Criamos soluções personalizadas para atender às necessidades exclusivas do seu negócio, desde aplicativos até sistemas corporativos complexos </span>-->
      <!--</div>-->

      <!--<div class="service__item">-->
      <!--  <i class="fa-solid fa-desktop"></i>-->
      <!--  <h4> Desenvolvimento de Software Sob Medida </h4>-->
      <!--  <span> Criamos soluções personalizadas para atender às necessidades exclusivas do seu negócio, desde aplicativos até sistemas corporativos complexos </span>-->
      <!--</div>-->
      <!--<div class="service__item">-->
      <!--  <i class="fa-solid fa-desktop"></i>-->
      <!--  <h4> Desenvolvimento de Software Sob Medida </h4>-->
      <!--  <span> Criamos soluções personalizadas para atender às necessidades exclusivas do seu negócio, desde aplicativos até sistemas corporativos complexos </span>-->
      <!--</div>-->
    </div>
  </div>
</section>

<script src="https://kit.fontawesome.com/64d1b1df4a.js" crossorigin="anonymous"></script>

<?php get_footer(); ?>
