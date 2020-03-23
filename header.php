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

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    <?php wp_head(); ?>

</head>

<body id="page-top">

  <!-- Header -->
  <header class="masthead">
      <div class="container">
        <div class="row intro-text">
            <div class="col-md-6 offset-md-3 text-center">
              <p class="animated bounceInDown"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" width="450" height="450" class="img-responsive"></p>
            </div>
      <div class="col-md-8 offset-md-2 text-center">
                <div class="intro-heading">Bem-vindo ao meu espaço</div>
                <a href="#team" id="btn-about" class="btn btn-xl">Diga Mais</a>
            </div>
        </div>
      </div>
  </header>
