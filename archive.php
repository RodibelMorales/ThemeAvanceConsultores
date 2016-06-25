<?php
/*Template name: Blog-Selecto*/
?>
<?php get_header(); ?>
			<!--Inicio slider-->
					<div class="logoDisiplinaBlog">
						
					</div>
		 

			<!--Inicio contenedor de Articulos-->
			<section class="misionVision">
		   		<div class="container" id="divBlog">		   	
						<section id="lista_articulos">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<ul class="grid cs-style">
							    <li>
							        <figure>
							            <div class="thumb">
											<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
										</div>
							            <div class="textoBlog">
							                <h3><?php the_title();?></h3>
							                <div class="contenedorInfoBlog"><?php the_excerpt();?><a href="<?php the_permalink();?>">Ver más <i class="fa fa-plus-square" aria-hidden="true"></i></a></div>
							            </div>
							        </figure>
							    </li>
							</ul>


							<?php endwhile; else: ?>

							<h1>No se encontraron articulos</h1>
							<?php endif; ?>

							
							<div id="pagination">
								<p><?php next_posts_link('<- Post Siguientes')?>
								   <?php previous_posts_link('Post Siguientes Anteriores ->')?>
								</p>
							</div>
						</section>

<?php get_sidebar(); ?>
				</div>
			</section>
<?php get_footer(); ?>