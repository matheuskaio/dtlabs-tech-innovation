 <footer>
   <div class="container">
     <img src="<?= get_template_directory_uri() ?>/assets/img/logo-placeholder.png" alt="">
     <div class="footer__content_redes">
       <span>Nos acompanhe nas redes</span>
       <ul>
         <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
         <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
         <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
         <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
       </ul>
     </div>
     <div class="footer__content_redes">
       <span>Links</span>
       <div class="links">
         <?php
          $argsRodape = [
            'menu' => 'principal',
            'theme_location' => 'menu-principal',
            'container' => false,
            'echo' => false
          ];

          $menu = wp_nav_menu($argsRodape, false);

          preg_match_all('/<a(.*?)<\/a>/', $menu, $matches);

          if (!empty($matches[0])) {
            foreach ($matches[0] as $link) {
              echo $link;
            }
          }
          ?>
       </div>
     </div>
     <div class="footer__content_redes">
       <span>Endereço</span>
       <ul>
         <li><a class="endereco" href="https://maps.app.goo.gl/gqvn1Xu2X3tPMRBH9"><i class="fa-solid fa-map"></i> Av. Nações Unidas, 16-47 - Sala 509 Higienópolis, Bauru - SP, 17033-260</a></li>
       </ul>
     </div>
   </div>
 </footer>
 <script src="https://kit.fontawesome.com/64d1b1df4a.js" crossorigin="anonymous"></script>
 <script>
   document.addEventListener("DOMContentLoaded", function() {
     const menuToggle = document.querySelector(".menu-toggle");
     const menuItems = document.querySelector(".menu-items");

     menuToggle.addEventListener("click", function() {
       menuItems.classList.toggle("active");
     });
   });
 </script>

 <!-- Inicio Wordpress Footer -->
 <?php wp_footer(); ?>
 <!-- Final Wordpress Footer -->

 </body>

 </html>
