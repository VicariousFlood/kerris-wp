<?php
/**
 * Template Name: Kerris

 */
?>
<!doctype html>
<html lang="pl_PL">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Kerris - zadanie rekrutacyjne</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><?php wp_head(); ?>
</head>
<body>
<header>
  <div class="top">
  <div class="container">
    <div class="logo">
      <img src="<?php the_field('logo'); ?>">
    </div>
  </div>
  </div>
  <div class="main">
    <img src="<?php the_field('header_image'); ?>" class="main-picture" alt="picture">
    <div class="container">
    <img src="<?php the_field('header_icon_1'); ?>" class="icon-1" alt="Icon 1">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
          <?php the_field('header_text'); ?>
        <a class="slide-down"><button><?php the_field('header_button_text'); ?></button></a>
      </div>
      <div class="col-sm-12 col-lg-6">
      </div>
    </div>
  </div>
    <img src="<?php the_field('header_icon_2'); ?>" class="icon-2" alt="Icon 2">
  </div>
</header>
<section class="how-it-works">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <h2><?php the_field('section_heading'); ?></h2>
      <img src="<?php the_field('section_icon'); ?>" class="yellow-dot" alt="Yellow Dot">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 box">
        <img src="<?php the_field('section_box_1_icon'); ?>" alt="Block">
        <div class="text">
            <?php the_field('section_box_1_text'); ?>
        </div>
      </div>
      <div class="col-sm-6 box">
        <img src="<?php the_field('section_box_2_icon'); ?>" alt="Rivals">
        <div class="text">
            <?php the_field('section_box_2_text'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
          <?php the_field('footer_text'); ?>
      </div>
      <div class="col-sm-6">
        <img src="<?php the_field('footer_icon'); ?>" alt="Dots">
      </div>
    </div>
  </div>
</footer>



  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="assets/scripts/scripts.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
