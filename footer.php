</div>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/logo.png" alt="">
                </a>
                <p>Copyright © <span id="year"></span> Web Site.</p>
            </div>
        </div>
    </footer>
</div>
<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><i class='bx bx-x'></i></button>
        <div class="modal-heading">Submit your application</div>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <div class="modal-form">
            <?php echo do_shortcode('[contact-form-7 id="184" title="Modal Contact Form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
</body>

</html>