<!--Entrada Individual-->
<?php get_header(); ?>


 	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<header class="post-header">
		<figure class="post-image">
			<?php if ( has_post_thumbnail() )
					the_post_thumbnail('full');
			?>  
		<figure>

		<div class="wrap">
			<h1 class="post-title"><?php the_title(); ?></h1>
		</div>


		<div class="categoria"><?php the_category(' , '); ?></div>

	</header>

 

  <div class="container">
  	<div class="col-md-2"></div>
	<div class="col-md-8">
	  
	  	<div class="post-info">
			<div class="autor-single">
				<figure class="autor-img"><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?> </figure>
				<?php the_author(); ?>
			</div>
			<div class="fecha-single"><?php echo /*the_time('l j, F Y');*/ the_time('F d, Y'); ?></div>
	  	</div>  

	  	<div class="post-contet"><?php the_content(); ?></div>
	  
	  	<?php //comments_template(); ?>

					<!-- SIN CONTENIDO -->
					<?php endwhile; else: ?>
					<div class="page-header">
						<h1>Falta contenido</h1>
					</div>  
					<p>No hay ninguna entrada publicada en el blog !!!</p>
					<?php endif; ?>
					<!--  /// -->

	</div>
	<div class="col-md-2"></div>




		<div class="row blog-footer">
			<hr>
			<?php  get_sidebar('blog'); ?>

			<div class="col-md-4">
				BANNER AQUI
			</div>
		</div>

<?php get_footer(); ?>