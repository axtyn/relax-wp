<!-- ***** Página Maestra para BLOG HOME ***** -->

<?php get_header(); ?>

  <div class="container">
    <div class="col-md-12">
<?php if (is_paged()) $count = 1; else $count = 0; ?>
<?php if ($count == 1) : ?>
    <section class="promoted">
        <div class="wrap">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="promoted-post">
                <figure class="post-image">
                    
                </figure>
                <div class="promote-data">
                    <header class="post-header">
                        <h2 class="post-title">
                            
                        </h2>
                    </header>
                    <footer class="post-meta">
                        <p class="author">
                            <figure class="autor-img">
                                <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> 
                            </figure>
                                <?php the_author(); ?>
                        </p>
                        <time class="post-date"><?php echo /*the_time('l j, F Y');*/ the_time('F d, Y'); ?></time>
                    </footer>
                </div>
            </article>
        </div>
    </section>
<?php $count++; ?>

    <section class="posts-section">
        <div class="wrap">
           <?php else : ?>

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
            <?php endif; ?> 
            <!-- SIN CONTENIDO -->
                    <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Falta contenido</h1>
                    </div>  
                    <p>No hay ninguna entrada publicada en el blog !!!</p>
                    <?php endif; ?>
                    <!--  /// -->
        </div>
    </section>
    </div>



    <div class="row blog-footer">
        <hr>
        <?php  get_sidebar('blog'); ?>

        <div class="col-md-4">
            BANNER AQUI
        </div>
    </div>

<?php get_footer(); ?>