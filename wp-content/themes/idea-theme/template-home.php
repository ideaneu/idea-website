<?php
/**
 * The template for displaying the Home Page
 *
 * Template Name: Home Page
 *
 *
 * @package Scout-Base
 */ get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/home.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/pageScroll.css">

<div id="primary">
  <main id="main" class="site-main" role="main">
    <div class="big-logo">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="678 -45 591.6 765.8" enable-background="new 678 -45 591.6 765.8" xml:space="preserve" class="big-logo__image img-responsive">
<path fill="#EA7624" d="M976.2,704.3L976.2,704.3l205.3-196.6L924.3,629.7l0,0c-2.7,1.1-5.4,2.7-8.1,4.9
  c-23.8,16.2-31.3,46.5-16.7,67.5s45.4,24.8,69.1,8.6C971.3,708.6,973.5,706.4,976.2,704.3z"/>
<path fill="#EA7624" d="M981-44.9c-163.7-3.8-299.2,125.9-303,289c-3.2,134,83.2,249.6,204.7,288.4l-0.5,71.8l166.9-65.4
  c117.8-45.9,217.1-145.8,220.4-280.9C1273.8,94.4,1144.2-41.1,981-44.9z M974,467.1c-120.5,0-218.2-97.8-218.2-218.2
  S853.6,30.7,974,30.7s218.2,97.8,218.2,218.2S1094.5,467.1,974,467.1z"/>
</svg>

    </div>
    <div id="scroll-container">
      <div id="home-scroll" class="wrapper">
        <div class="slide">
          <div class="slide__content__wrapper">
            <div class="logo-spacing-placeholder"></div>
            <div class="slide__content">
            <p class="slide__text">
              IDEA is Northeastern University's student-led Venture Accelerator. We provide
              entrepreneurs in the Northeastern community the support, in-kind resources
              and educational experience of developing a business from core concept to launch.
            </p>
          <a href="<?php bloginfo('template_directory'); ?>/about"><button class="slide__button btn btn-primary btn-lg">LEARN MORE</button></a>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide__content__wrapper">
            <div class="logo-spacing-placeholder"></div>
            <div class="slide__content">
              <p class="slide__text">
                Are you working on a concept or early-stage venture that you want to enroll with IDEA? The
                first step is to attend a New Venture Orientation. At this session you will learn about the IDEA program,
                available resources, and next steps for developing your venture.
              </p>
              <a href="http://www.tfaforms.com/365595" target="_blank"><button class="slide__button btn btn-primary btn-lg">START NOW</button></a>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide__content__wrapper">
            <div class="logo-spacing-placeholder"></div>
            <div class="slide__content">
            <p class="slide__text">
              IDEA began in 2009 with strong student leadership and the backing of the university,
              the program was developed to provide resources and support for entrepreneurs across
              all disciplines. Today, IDEA works with hundreds of Northeastern affiliated
              founders to help them grow their businesses.
            </p>
            <a href="<?php bloginfo('template_directory'); ?>/ventures"><button class="slide__button btn btn-primary btn-lg">SEE THE VENTURES</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<script type="text/javascript">
  jQuery('#home-scroll').pageScroll({
    pageContainer: '.slide'
  });

</script>


<!-- DONT TOUCH BELOW -->
</div><!-- #content -->
<?php wp_footer(); ?>
</body>
</html>
