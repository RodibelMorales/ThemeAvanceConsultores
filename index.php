<?php
/*Template name: Inicio*/
?>

<?php get_header(); ?>
			<!--Inicio slider-->
			<div class="contenedorSliderMain">
				<img src="<?php bloginfo('template_url')?>/img/slider.jpg" class="img-responsive">
			</div>


<!--inicio contenedor info-->
		   	<section class="informacion">
		   		<nav class="menuinfo">
		   			<ul class="ulMenuinfo">
		   				<div id="container">
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">INICIO</a></li>
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">NOSOTROS</a></li>
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">CLIENTES</a></li>
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">CONTACTO</a></li>
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">MAPA</a></li>
			   				<li class="limenuinfo"><a class="aMenuinfo" href="#">BLOG</a></li>	
		   				</div>
		   			</ul>
		   		</nav>


		   		<div class="mision img-responsive wow fadeIn animated" data-wow-duration="1s">
		   			<div class="container">
		   				<div class="row">
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 textoAvanceIndex">
		   						<h1 class="h1corporativo">CORPORATIVO</h1>
		   						<h1 class="h1corporativo2">ROSPE S.C.</h1>
		   						<button type="button" class="btnconocenos btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModalNosotros">Ver mas <i class="fa fa-eye" aria-hidden="true"></i></button>
		   					</div>
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 imgAvanceIndex">
		   						<img title="Avance Consulting" alt="empresa, prestadora de servicios, asesoria contable, auditoría, fiscales, capital humano, marketing, migratorios a personas físicas, morales" class="img-responsive" src="<?php bloginfo('template_url')?>/img/nosotros.png">		
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   		<div class="mision img-responsive wow fadeIn animated" data-wow-duration="1s">
		   			<div class="container">
		   				<div class="row">
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 imgAvanceIndex">
		   						<img title="Misión de Avance" alt="compromiso, calidad" class="img-responsive" src="<?php bloginfo('template_url')?>/img/mision.png">		
		   					</div>
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 textoAvanceIndex">
		   						<h1 class="h1corporativo">NUESTRA</h1>
		   						<h1 class="h1corporativo2">MISIÓN</h1>
		   						<button type="button" class="btnmision btn btn-primary btn-lg btn-block"  href="mision.php" data-toggle="modal" data-target="#myModalMision" alt="" data-remote="false">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
		   					</div>
		   					
		   				</div>
		   			</div>
		   		</div>

		   		<div class="mision img-responsive wow fadeIn animated" data-wow-duration="1s">
		   			<div class="container">
		   				<div class="row">
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 textoAvanceIndex">
		   						<h1 class="h1corporativo">NUESTRA</h1>
		   						<h1 class="h1corporativo2">VISIÓN</h1>
		   						<button type="button" class="btnmision btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModalVision" alt="" data-remote="false">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
		   					</div>
		   					<div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-xsm-12 imgAvanceIndex">
		   						<img title="Visión de Avance" alt="empresa lider, calidad, excelnecia, productividad, recursos humanos" class="img-responsive" src="<?php bloginfo('template_url')?>/img/vision.png">		
		   					</div>
		   				</div>
		   			</div>
		   		</div>


		   	


			  <!-- Default bootstrap modal Nosotros -->
			  <div class="modal fade" id="myModalNosotros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel"><img title="" alt="" id="imageresource" src="<?php bloginfo('template_url')?>/img/logo-Modal.png"></h4>
			          
			        </div>
			        <div class="modal-body">
			          <p>
			          	Surge hace 15 años como una empresa prestadora de servicios profesionales en Playa del Carmen, Quintana Roo con un sueño y un anhelo personal y profesional de su Director General L.C. Pedro Escobedo Vázquez de ser un pionero en la zona brindando principalmente la asesoría contable y legal a pequeñas, medianas y grandes empresas. 
						Al paso de los años, la firma se ha consolidado como una de la mejores en el Estado de Quintana Roo, expandiendo sus unidades de negocio con servicios de auditoría, fiscales, capital humano, marketing, migratorios a personas físicas, morales y de gobierno en Playa del Carmen, Chetumal y Akumal.
			          </p>
			        </div>
			        <div class="modal-footer">
			        	<a href="https://www.facebook.com/avanceya.consulting/?fref=ts" target="_blank"><img title="" alt="" id="icono1resource" src="<?php bloginfo('template_url')?>/img/iconos/facebookModal.png"></a>
		   				<a href="https://twitter.com/avancepdc" target="_blank"><img title="" alt="" id="icono2resource" src="<?php bloginfo('template_url')?>/img/iconos/twitterModal.png"></a>
			          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>-->
			        </div>
			      </div>
			    </div>
			  </div>

			  <!-- Default bootstrap modal Mision -->
			  <div class="modal fade" id="myModalMision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel"><img title="" alt="" id="imageresource" src="<?php bloginfo('template_url')?>/img/logo-Modal.png"></h4>
			          
			        </div>
			        <div class="modal-body">
			          <p>
			          	Somos un grupo de profesionales comprometidos a encontrar y proveer un servicio de calidad cumpliendo las expectativas de nuestros clientes y el público. Brindando servicio con los mejores candidatos para la empresa a través de asesoría legal, contable financiera, fiscal y administración en general, garantizando siempre seguridad, confianza, eficiencia y rentabilidad a nuestros clientes. Aceptando el permanente desafío con fuerza, conocimiento y voluntad para alcanzar el éxito, previendo los cambios.
			          </p>
			        </div>
			        <div class="modal-footer">
			        	<a href="https://www.facebook.com/avanceya.consulting/?fref=ts" target="_blank"><img title="" alt="" id="icono1resource" src="<?php bloginfo('template_url')?>/img/iconos/facebookModal.png"></a>
		   				<a href="https://twitter.com/avancepdc" target="_blank"><img title="" alt="" id="icono2resource" src="<?php bloginfo('template_url')?>/img/iconos/twitterModal.png"></a>
			          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>-->
			        </div>
			      </div>
			    </div>
			  </div>

			  <!-- Default bootstrap modal Vision -->
			  <div class="modal fade" id="myModalVision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel"><img title="" alt="" id="imageresource" src="<?php bloginfo('template_url')?>/img/logo-Modal.png"></h4>
			          
			        </div>
			        <div class="modal-body">
			          <p>
			          	Ser una empresa líder en nuestro ámbito a nivel local, nacional e internacional en constante vanguardia. Distinguidos siempre por la calidad en el trato y el servicio.
						Comprometidos con la excelencia de los empleados por lo que ofrecemos Capacitación constante por medio de conferencias, talleres y cursos. 
						Nuestra empresa está comprometida con la sociedad y con el bienestar personal y laboral de nuestros empleados. Por lo que les brindamos la oportunidad de unirse a nuestras campañas y actividades en pro de la sociedad. Asimismo, se ofrecen actividades lúdicas y de esparcimiento para mejorar el ambiente y productividad de los recursos humanos.
			          </p>
			        </div>
			        <div class="modal-footer">
			        	<a href="https://www.facebook.com/avanceya.consulting/?fref=ts" target="_blank"><img title="" alt="" id="icono1resource" src="<?php bloginfo('template_url')?>/img/iconos/facebookModal.png"></a>
		   				<a href="https://twitter.com/avancepdc" target="_blank"><img title="" alt="" id="icono2resource" src="<?php bloginfo('template_url')?>/img/iconos/twitterModal.png"></a>
			          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>-->
			        </div>
			      </div>
			    </div>
			  </div>


<?php get_footer(); ?>