<div class="hidden fixed bottom-0 left-0 p-4 w-full bg-main" style="z-index: 9999;">
  <div class="flex">
    <a href="" class="c-button">ご予約: 000-0000-000</a>
  </div>
</div>
</main>
<footer class="footer">
  <div class="c-container mx-auto">
    <div class="footer__top">
      <div class="flex">
        <div class="p-4"><img src="<?= get_template_directory_uri() . '/assets/images/footer1.png' ?>" alt=""></div>
        <div class="p-4"><img src="<?= get_template_directory_uri() . '/assets/images/footer2.png' ?>" alt=""></div>
        <div class="p-4"><img src="<?= get_template_directory_uri() . '/assets/images/footer3.png' ?>" alt=""></div>
        <div class="p-4"><img src="<?= get_template_directory_uri() . '/assets/images/footer4.png' ?>" alt=""></div>
        <div class="p-4"><img src="<?= get_template_directory_uri() . '/assets/images/footer5.png' ?>" alt=""></div>
      </div>
    </div>
    <div class="footer__middle">
      <div class="c-logo mx-auto md:ml-0 md:mr-auto mb-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></div>
      <nav class="c-nav">
        <ul class="c-nav__list">
          <li class="c-nav__list__item"><a href="">ABOUT</a></li>
          <li class="c-nav__list__item"><a href="">FACILITY</a></li>
          <li class="c-nav__list__item"><a href="">INCUBATION</a></li>
          <li class="c-nav__list__item"><a href="">COMMUNITY</a></li>
          <li class="c-nav__list__item"><a href="">EVENT</a></li>
          <li class="c-nav__list__item"><a href="">NEWS</a></li>
          <li class="c-nav__list__item"><a href="">BLOG</a></li>
          <li class="c-nav__list__item"><a href="">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <div class="text-center text-sm">&copy;2023 <?= get_option('company_name'); ?></div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>