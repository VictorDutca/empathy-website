<!DOCTYPE html>
<html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
    <head>
        <!-- Basic Page Needs -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" sizes="10x10" />
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> data-smooth="true">
    
    <?php get_template_part('templates/layouts/navigation'); ?>


