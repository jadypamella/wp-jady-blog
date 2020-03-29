<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Jady_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Jady Pâmella">
  <meta name="description" content="Espaço pessoal da Jady, analista de TI e pesquisadora que gosta de artes marciais e música. Infelizmente, não faz mais websites freelancer.">
  <meta name="keywords" content="tecnologia, web, designer, analista de TI, brasília, df, brasil">

  <title>Jady Pâmella</title>

  <!-- Custom fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles -->
  <?php wp_head(); ?>

</head>

<body id="page-top">

  <!-- Header -->
  <header class="bg-image-parallax bg-image-header">
    <div class="container text-center">
      <div class="row intro-text">
        <div class="col-md-4 offset-md-4 text-center">
          <p class="animated bounceInDown"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png" class="logo img-responsive"></p>
        </div>
        <div class="col-md-8 offset-md-2 text-center">
            <h1 class="intro-heading">Bem-vindo ao meu espaço</h1>
            <a href="#sobre" id="btn-about" class="btn btn-xl">Diga Mais</a>
        </div>
      </div>
    </div>
  </header>
