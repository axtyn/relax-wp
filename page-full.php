<?php 
/*
Template Name: Pagina sin sidebar eh
 */
?>
<?php get_header(); ?>

  <div class="container">
    <div class="col-md-12">

      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="page-header">
        <h1><?php the_title(); ?></h1>
      </div>

      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <div class="page-header">
        <h1>Falta contenido</h1>
      </div>  
    
      <p>Mensaje</p>

      <?php endif; ?>
    </div>


  </div>

<?php //get_footer(); ?>
<!-- ***** TEMPLATE PARA PAGINA FULL ***** -->