<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <?php wp_head(); ?>

</head>
<body Class="<?php body_class(); ?>">

<header>
    <h1><a href="#"><?php bloginfo( 'name' )?></a></h1>
</header>