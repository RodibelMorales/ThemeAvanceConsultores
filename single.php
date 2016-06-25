 <?php
/*Template name: Blog*/
?>
<?php get_header(); ?>
			<!--Inicio slider-->
					<div class="logoDisiplinaBlog">
						
					</div>
		 

			<!--Inicio contenedor de Articulos-->
			<section class="misionVision">
		   		<div class="container">		   	
					<section id="main-single">
						<section id="lista_articulos">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<article>
									<hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
									<div class="date"><?php the_date();?> en <span><?php the_category();?></span></div>

									<div class="thumb"><a href="<?php the_permalink();?>">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
									</a></div>
									<div class="extract"><?php the_content();?></div>
								</article>
							<?php endwhile; else: ?>

							<h1>No se encontraron articulos</h1>
							<?php endif; ?>


						</section>

<?php get_sidebar(); ?>
					</section>
				</div>
			</section>
<?php get_footer(); ?>