    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR">
    <head profile="http://gmpg.org/xfn/11">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('title');?> RSS Feed - Planos de um reader em Node.Js" href="<?php bloginfo('rss2_url'); ?>" />
    <!-- Tem comentarios? Mantém isso abaixo. -->
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );?>
    <!-- FIM COMENTARIO -->
    <?php
    //Sempre deixa essa função wp_head(); pois alguns plugins utilizam dela para retornar informação
    wp_head();
    ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="main">
    <header>
    <section id="logo">
    <h2><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"><span></span><?php bloginfo('title'); ?> - <?php bloginfo('description'); ?></a></h2>
    </section>
    <?php
    //Função para retornar o menu
    wp_nav_menu(array(
    'menu' => 'menu_principal',
    'theme_location' => 'menu_principal',
    'echo' => true,
    'container' => 'nav',
    'container_id' => 'menu'
    ));
    ?>
    </header>
    <div id="container">