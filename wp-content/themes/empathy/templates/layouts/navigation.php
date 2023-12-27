<?php $company_informations = get_field('company_informations','option'); ?>
    <section class="header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-3 col-lg-2 text-center header__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="img-fluid" src="<?php echo $company_informations['logo']['url']?>" />
                </a>
            </div>
            <div class="col-2 col-lg text-end header__options">
                <nav>
                    <ul>
                        <li class="item-menu">
                        <?php
                            $args = array(
                                'theme_location' => 'main_menu', // Il nome della location del menu definito nella registrazione
                                'menu_class' => 'main_menu',    // Classe CSS da assegnare al menu
                            );
                            wp_nav_menu($args);
                        ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </section>
    <!-- <?php get_template_part('templates/components/h-line'); ?> -->
<div id="main-menu">
    <nav class="main-menu row align-items-center justify-content-center">
        <div class="col-12 col-lg-10 main-menu__menu mb-5">
        <h3></h3>
        <?php
            $args = array(
                'theme_location' => 'main_menu', // Il nome della location del menu definito nella registrazione
                'menu_class' => 'main-menu-list',    // Classe CSS da assegnare al menu
            );
            wp_nav_menu($args);
        ?>
        </div>
        <div class="col-12 col-lg-10 main-menu__data-info mb-5">
            <h6><?php echo $company_informations['address']?></h6>
            <h6 class="mt-4"><a class="text-lowercase" href="mailto:<?php echo $company_informations['email'] ?>"><?php echo $company_informations['email'] ?></a></h6> 
            <h6><a href="tel:+39<?php echo $company_informations['phone'] ?>"><?php echo $company_informations['phone'] ?></a></h6>
        </div>
        <div class="col-12 col-lg-10 main-menu__social"><a href="https://www.linkedin.com/company/mntp-srl/" target="_blank"><i class="bi bi-linkedin"></i></a></div>
    </nav>
    <span class="menu-overlay"><div class="close-label"><i class="bi bi-x-lg"></i></div></span>
</div>