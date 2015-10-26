<!-- ***** Página Maestra para BLOG HOME ***** -->

<?php get_header(); ?>

  <div class="container">
    <div class="col-md-12">
    <section class="promoted">
        <div class="wrap">

   
      <?php 
      //Definir los parámetros de la consulta a la base de datos
$args = array(
    'posts_per_page' => 1
);
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
    while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post();
       //Ya estamos en el bucle alternativo
?>
    
            <article class="promoted-post">
                <figure class="post-image">
                    <?php if ( has_post_thumbnail() ) the_post_thumbnail('full');  ?> 
                </figure>
                <div class="promoted-data">
                    <header class="post-header">
                        <h2 class="post-title-front">
                            <a href="<?php /*vincular a la entrada post*/ the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </header>
                    <footer class="promoted-post-meta">
                        <div class="promoted-author">
                            <figure class="author-img"><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> </figure>
                            <?php the_author(); ?>
                        </div>
                        <time class="post-date"><?php echo /*the_time('l j, F Y');*/ the_time('F d, Y'); ?></time>
                    </footer>
                </div>
            </article>
        <?php endwhile; endif; ?>


        </div>
    </section>

    <section class="posts-section">
        <div class="wrap">
  
 <?php $args = array(
    'offset' => 1
);
 $loop_alternativo = new WP_Query($args);
?> 
<?php if ($loop_alternativo->have_posts()) : while($loop_alternativo->have_posts()) : $loop_alternativo->the_post(); ?>
            <article class="post">
                <header class="post-header">
                    <figure class="post-image-front">
                        <?php if ( has_post_thumbnail() ) the_post_thumbnail('full');  ?>  
                    </figure>
                    <h2 class="post-title-front"><a href="<?php /*vincular a la entrada post*/ the_permalink(); ?>"><?php the_title(); ?></a></h2>  
                </header>
                <footer class="post-meta">
                    <p class="author"><?php the_author(); ?></p>
                    <time class="post-date"><?php echo the_time('F j, Y'); ?></time>
                </footer>
            </article>
    
            <!-- SIN CONTENIDO -->
                    <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Falta contenido</h1>
                    </div>  
                    <p>No hay ninguna entrada publicada en el blog !!!</p>
                     <?php endif; ?>
                     <?php wp_reset_postdata(); ?>
                    <!--  /// --> 
        </div>
    </section>
    </div>



    <div class="row blog-footer">
        <hr>
        <?php get_sidebar('blog'); ?>

        <div class="col-md-4">
            BANNER AQUI
        </div>
    </div>

<?php get_footer(); ?>