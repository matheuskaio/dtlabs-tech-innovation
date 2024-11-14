<?php
//Template Name: Contato

get_header();

?>


<section class="emphasis">
  <div class="container">
    <div class="emphasis-titles">
      <h2>Vamos Conversar ?</h2>
      <span>Fale conosco para saber como podemos ajudar sua empresa</span>
    </div>

    <div class="container-form">
      <?= do_shortcode('[contact-form-7 id="3004d90" title="Formulário Contato"]') ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
