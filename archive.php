<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="page-header">
          <h1><?php wp_title(''); ?></h1>
        </div>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="post">
          <h2><a href="<?php /*vincular a la entrada post*/ the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>
            Escrito por: <?php the_author(); ?>
            Fecha: <?php echo the_time('l j, F Y'); ?>
            Categoría: <?php the_category(' , '); ?>
          </p>
           
          <?php /*Extracto*/ the_excerpt(); ?>
          <hr>
        </article>

      <?php endwhile; else: ?>
      <div class="page-header">
        <h1>Falta contenido</h1>
      </div>  
    
      <p>Mensaje</p>

      <?php endif; ?>
    </div>

        <?php  get_sidebar('blog'); ?>

  </div>


<?php get_footer(); ?>

<!-- ***** Página Maestra para BLOG ***** -->