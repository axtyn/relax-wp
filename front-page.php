<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <?php if(dynamic_sidebar('frontleft')); ?>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
           <?php if(dynamic_sidebar('frontcent')); ?>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
           <?php if(dynamic_sidebar('frontder')); ?>
        </div>
      </div>

      <hr>

<!-- *****  ***** -->