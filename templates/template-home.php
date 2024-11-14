<?php
//Template Name: Home

get_header();

?>

<?php
$imagemDestaque = get_field('imagem_destaque');
$titulo = get_field('titulo');
$subTitulo = get_field('subtitulo');
$textoBotao = get_field('texto-do-botao');
$linkBotao = get_field('link-do-botao');

$servicoTitulo = get_field('servico-titulo-copiar');
$servicoSubtitulo = get_field('servico-subtitulo');
$servicoImagemDestaque = get_field('servico-imagem-destaque');

$projetoTitulo = get_field('projeto-titulo');
$projetoSubtitulo = get_field('projeto-subtitulo');

?>

<section class="banner">
  <div class="container">
    <div class="banner__text">
      <h1><?=$titulo?></h1>
      <h2><?=$subTitulo?></h2>
      <a href="<?=$linkBotao?>"><?=$textoBotao?></a>
    </div>
   
    <img class="banner_image" src="<?= $imagemDestaque['url'] ?>" alt="<?=$titulo?>" />
    
  </div>
</section>
<section class="service">
  <div class="container">
    <div class="service-titles">
      <h2><?=$servicoTitulo?></h2>
      <span><?=$servicoSubtitulo?></span>
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
    
    <div class="service__content">
      <div class="service__content_items">
          
        <?php if ($queryServicoHome->have_posts()) : ?>
        <?php while ($queryServicoHome->have_posts()) : $queryServicoHome->the_post(); ?>
        
        <div class="service__content_item">
          <?php $icon = get_field('icone')?>
            <?=$icon  ?>
     
          <p> <?= the_title();?> </p>
          <?php $descricao = get_field('descricao')?>
          
          <span> <?= $descricao?></span>
        </div>
        
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query();
      wp_reset_postdata(); ?>
       
      </div>
      <img src="<?= $servicoImagemDestaque['url'] ?>" alt="<?=$servicoTitulo?>" />
    </div>
  </div>
</section>
<section class="projects">
  <div class="container">
    <div class="project-titles">
      <h2><?=$projetoTitulo?></h2>
      <span><?=$projetoSubtitulo?></span>
    </div>

    <?php
    $argsServico = array(
      'post_type' => 'post',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );
    $queryServico = new WP_Query($argsServico);
    ?>
    <div class="projects">

      <?php if ($queryServico->have_posts()) : ?>
        <?php while ($queryServico->have_posts()) : $queryServico->the_post(); ?>
          <div class="project__item">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
            <div class="project__item__title">
              <h3><?= the_title(); ?></h3>
              <p><?= the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query();
      wp_reset_postdata(); ?>
    </div>

  </div>
</section>

<section class="contact">
  <div class="container">
    <div class="contact-titles">
      <h2>Vamos Conversar?</h2>
      <span>Conte-nos sobre suas necessidades e vamos construir juntos a solução ideal para o seu negócio</span>
    </div>
    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="413f042" title="Formulário Inicio"]'); ?>

    </div>

  </div>
</section>

<?php get_footer(); ?>
