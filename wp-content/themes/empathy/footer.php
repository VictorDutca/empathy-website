        <?php get_template_part('templates/layouts/footer-data'); ?>
        <!-- Modal -->
        <div class="modal fade" id="ContactModal" tabindex="-1" aria-labelledby="ContactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body">
                <a type="button" class="close-button" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
                <section class="dark-contact-us overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 dark-contact-us__form position-relative pe-lg-5">
                            <h2 class="dark-contact-us__title overflow-hidden animation__title"><?php echo __('Contact us','mtnp')?></h2>
                            <h5 class="dark-contact-us__subtitle animation__title"><?php echo __('Our team of experts is ready to provide you with the best service.','mtnp')?></h5>
                            <span class="animation__text"><?php echo apply_shortcodes( '[contact-form-7 id="5"]' ); ?></span>
                        </div>
                        <div class="col-12 col-lg-5 dark-contact-us__logo-image d-none d-lg-block">
                            <span class="animation__text"><?php include(get_template_directory() . '/dist/images/vectors/only-logo.svg'); ?></span>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </div>
        </div>
       <?php wp_footer(); ?>
    </body>
</html>
