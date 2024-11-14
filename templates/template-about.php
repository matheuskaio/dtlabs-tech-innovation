
<?php
//Template Name: Sobre nós

get_header();

?>


<?php
$subtitulo = get_field('subtitulo');
$descricao = get_field('conteudo');
$imagem = get_field('imagem-destaque');


?>


<section class="about-content">
  <div class="about-content__banner">
    <h2>Sobre nós</h2>
    <span><?= $subtitulo?></span>
  </div>
  <div class="container">

    <div class="about__content">
      <img src="<?= $imagem['url'] ?>" alt="" />

      <div class="about__content_items">
        <p>

          <!--Na Tech Innovations, acreditamos que a tecnologia é uma poderosa aliada para transformar ideias em resultados concretos. Desde o início, nossa missão tem sido ajudar empresas de diferentes setores a se adaptarem, crescerem e se destacarem no cenário digital.-->
          <!--</br>-->
          <!--</br>-->
          <!--Somos uma equipe apaixonada por inovação e orientada a resultados, combinando experiência em consultoria estratégica com habilidades de desenvolvimento de software de ponta. Cada projeto que assumimos é uma parceria verdadeira, onde mergulhamos nas necessidades dos nossos clientes para criar soluções personalizadas que geram valor real.-->
          <!--</br>-->
          <!--</br>-->

          <!--Nosso compromisso é com a excelência e a transparência. Trabalhamos lado a lado com nossos clientes em cada etapa, desde a concepção de estratégias até a implementação e suporte. Mais do que entregar tecnologia, buscamos entregar impactos positivos e ajudar empresas a atingir seu potencial máximo no mercado digital.-->
          <!--</br>-->
          <!--</br>-->

          <!--Seja bem-vindo(a) ao nosso mundo – onde a inovação e a expertise se unem para impulsionar o seu negócio!-->
        <?= $descricao ?>
        </p>
        
      </div>
    </div>
  </div>
</section>

<section class="about-teams">

  <div class="container">

    <div class="about__content">

    </div>
  </div>
</section>

<script src="https://kit.fontawesome.com/64d1b1df4a.js" crossorigin="anonymous"></script>

<?php get_footer(); ?>
