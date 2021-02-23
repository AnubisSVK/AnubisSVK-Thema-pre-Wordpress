<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <!-- Bootstrap 4.5.0 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <!-- cookiealert styles -->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
        <script language="JavaScript" type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/styles.css'; ?>">
        <title><?php echo get_bloginfo( 'name' ); ?> <?php wp_title(); ?> </title>
        <script src="https://kit.fontawesome.com/3785fd0465.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.js'; ?>"></script>
 
</head>
<body <?php body_class(); ?>>
    
    <p style="color:white;"><?php wp_head(); ?></p>
    <div class="header">
        <h1>AnubisSVK</h1>
        <h4>Web developer | Java Developer | Youtuber</h4>
    </div>

                <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container_class' => 'topnav', 'menu_class'     => 'topnav', ) ); ?>
