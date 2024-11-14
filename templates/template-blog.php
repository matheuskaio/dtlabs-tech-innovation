<?php
//Template Name: Blog

get_header();

?>


<section class="blog-content">
  <div class="blog-content__banner">
    <h2>Blog</h2>
    <span>Dicas, Novidades e Análises para Você se Manter à Frente no Setor de Tecnologia</span>
  </div>
  <div class="container">
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
    <div class="blog-posts">
      <?php if ($queryServico->have_posts()) : ?>
        <?php while ($queryServico->have_posts()) : $queryServico->the_post(); ?>
          <a class="blog-post-item" href="<?= the_permalink() ?>">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" />
            <div class="blog-post-item__content">
              <h3><?= the_title(); ?></h3>
              <div class="blog-post-item__content__footer">
                <span><i class="fa-solid fa-calendar"></i> <?= get_the_date();  ?></span>
                <span><i class="fa-solid fa-comment"></i> <?= get_comments_number();  ?></span>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query();
      wp_reset_postdata(); ?>


    </div>

  </div>
</section>


<script src="https://kit.fontawesome.com/64d1b1df4a.js" crossorigin="anonymous"></script>

<?php get_footer(); ?>
