<html>
<head>
    <title>IS373 Theme</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
    </script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<div class="ml-auto navbar navbar-dark bg-dark custom-menu-class">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
</div>

<div id="ttr_header" class="jumbotron">
    <h1>Welcome to IS373 News</h1>
</div>

<div class="container">

