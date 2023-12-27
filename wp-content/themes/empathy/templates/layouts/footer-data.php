<?php $company_informations = get_field('company_informations','option'); ?>
<footer class="footer text-center text-lg-start">
<?php get_template_part('templates/components/h-line'); ?>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center footer__informations">
                <div class="col-12 col-lg-5">
                    <h6><?php echo $company_informations['address']?></h6>
                    <h6 class="mt-4"><a href="mailto:<?php echo $company_informations['email'] ?>"><?php echo $company_informations['email'] ?></a></h6> 
                    <h6><a href="tel:+39<?php echo $company_informations['phone'] ?>"><?php echo $company_informations['phone'] ?></a></h6>
            
                </div>
                <div class="col-12 col-lg-3">
                    <?php wp_nav_menu (array('' => 'footer_menu','menu_class' => 'nav footer-menu'));?>
                </div>
                <div class="col-12 col-lg-4 mt-4 mt-lg-0 text-center text-lg-end">
                    <h6><a href="#" class="text-uppercase"><?php echo __('Back to top','mntp')?></a></h6>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
        <div class="row justify-content-beetween align-items-center footer__credits">
            <div class="col-12 col-lg-5">
                <span><b><?php echo __('Mntp Engineering S.r.l','mntp') ?></b> - </span>
                <span><?php echo __('VAT','mntp')?>: <?php echo $company_informations['p_iva'] ?> - </span> 
                <span><?php echo __('C.Sociale','mntp')?>: <?php echo $company_informations['cap_soc'] ?>€</span>
                    
            </div>
            <div class="col-12 col-lg-3 mt-2 mt-lg-0">
                <a class="me-2" href="<?php echo $pages['link_privacy'] ?>"><?php echo __('Privacy Policy','mntp')?></a> 
                <a href="https://designerdimontagna.it" target="_blank">Credits</a>
            </div>
            <div class="col-12 col-lg-4 footer__social text-center text-lg-end">
                <a href="https://www.linkedin.com/company/mntp-srl/" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        </div>
    </section>

</footer>