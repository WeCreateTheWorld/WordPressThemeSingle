<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/build/img/favicon.png" type="image/vnd.microsoft.icon">
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri();?>/build/css/font-awesome-4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet"  href="<?php echo get_template_directory_uri();?>/build/css/bootstrap.min.css" />
    <?php wp_head();?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/build/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/build/js/aixintexiao.js"></script>
    
</head>
<body <?php body_class();?>>
<div class="surface-content">
    <header class="site-header">
    <div class="header-inner">
        <h1 class="site-title site-maintitle">
            <a href="<?php echo home_url();?>" title="<?php bloginfo( 'name' ); ?>"><?php if ( !get_option('header_logo_image') ) { bloginfo( 'name' ); } else { echo '<img src="' . get_option('header_logo_image') .'">';} ?></a>
        </h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description ) : ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif;?>
        <?php echo get_search_form();?>
    </div>
    </header>

    <!-- <header class="site-header cover">&nbsp;
    </header>  -->
    <nav class="topNav">
            <?php wp_nav_menu( array( 'theme_location' => 'puma','menu_class'=>'topNav-items','container'=>'ul','fallback_cb' => 'link_to_menu_editor')); ?>
    </nav>
	