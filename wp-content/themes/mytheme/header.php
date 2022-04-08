<!DOCTYPE html>
<html 
    <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" >
        <?php wp_head(); ?>
    </head>
    <body 
        <?php body_class(); ?> >
        <!--container-->
        <div id="container">
            <header id="header">
                <?php mytheme_logo(); ?>
                <?php mytheme_menu('primary-menu' ); ?>
                <?php mytheme_menu('header-menu' ); ?>
                <?php mytheme_menu('extra-menu' ); ?>
            </header>
        </div>
        <!--end container -->
        <footer>
            <div class="copyright">
                &copy;<?php echo date('Y')?> - <?php bloginfo('sitename') ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>