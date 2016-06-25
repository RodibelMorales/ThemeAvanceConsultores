
		   	<!--inicio contenedor footer-->
		   <footer class="footerAvance">
		   		<div class="container">
			   		<div class="row">
			   				<div class="col-xlg-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12 contenedorGeneralFooter">
			   					<div class="contenedorPrincipalContactanos">
			   						<div class="contenedorTituloServicio">
				   						<h1 class="h1Footer">
				   							<i class="fa fa-phone-square" aria-hidden="true"></i> Contáctanos
				   						</h1>
			   						</div>
			   						<div class="contenedorUbicacion">
				   						<h3 class="h3Contactanos">
				   							<i class="fa fa-map-marker" aria-hidden="true"></i> Ubicacion:</h3>
					   						<h4 class="h4Contactanos">Montes de los Urales, 77712 Playa del Carmen, Q.R.
					   						</h4>
				   					</div>
				   					<div class="contenedorCorreo">
				   						<h3 class="h3Contactanos">
				   							<i class="fa fa-envelope-o" aria-hidden="true"></i> Correo:</h3>
				   							<h4 class="h4Contactanos correo">administración@avanceya.consulting</h4>
				   					</div>
				   					<div class="contenedorTelefono">	
				   						<h3 class="h3Contactanos"><i class="fa fa-phone" aria-hidden="true"></i> Teléfono:</h3>
				   						<h4 class="h4Contactanos">(984) 110-80-65</h4>
				   					</div>
			   					</div>	
			   				</div>

			   				<div class="col-xlg-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12">
			   					<h1 class="h1Footer"><i class="fa fa-envelope" aria-hidden="true"></i> Envianos un mensaje</h1>
			   						<div class="espacio">
					   					<form action="<?php bloginfo('template_url')?>/mail/enviarCorreo.php" method="post" class="form-horizontal" role="form">
											  <div class="form-group">
											    <div class="col-sm-10">
											      <input type="text" name="nombre" class="form-control formContacto" id="nombre" placeholder="Nombre">
											    </div>
											  </div>
											  <div class="form-group">
											    <div class="col-sm-10"> 
											      <input type="email" name="correo" class="form-control formContacto" id="correo" placeholder="Correo">
											    </div>
											  </div>
											  <div class="form-group">
											  	<div class="col-sm-10">
			  									  <textarea class="form-control" name="mensaje" rows="5" cols="50" id="descripcion" placeholder="Mensaje"></textarea>
												</div>
											  </div>
											  <button id="botonCorreo" type="submit" class="btnenviar btn btn-primary btn-lg btn-block">Enviar <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
										</form>
									</div>
			   				</div>

			   				<div class="col-xlg-4 col-lg-4 col-md-4 col-sm-12 col-xsm-12">
			   					<h1 class="h1Footer"><i class="fa fa-globe" aria-hidden="true"></i> Ubicación</h1>
			   					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.417739564941!2d-87.07432388474729!3d20.652572605889045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e42cfe154ef37%3A0xc6f4dc99afe5bae7!2sMontes+Urales%2C+Bosque+Real%2C+77712+Playa+del+Carmen%2C+Q.R.!5e0!3m2!1ses-419!2smx!4v1456441944480" width="100%" height="450" frameborder="0" style="border:0">
	        					</iframe>
			   				</div>
			   		</div>

			   	
			   		<div class="copyright">
			   			<div class="container">
			   				<div class="row">
								<div class="col-lg-12">
									<h4 class="h4copyRights">© 2016 Avance Consultores Empresariales. Todos los Derechos Reservados.</h4>
									<h4 class="h4copyRights"><a class="acopyRights" href="">Términos Legales y Aviso de Privacidad</a></h4>								
								</div>		   					
			   				</div>
			   			</div>
			   		</div>
			   	</div>
		   	</footer><!--Fin contenedor footer-->
	</section><!--Fin contenedor principal-->

			<!--carga de los archivos js-->
			<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
			<!--<script src="<?php bloginfo('template_url')?>/js/jquery-1.9.1.js"></script>-->
			
			<!--<script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>-->
			<script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script src="<?php bloginfo('template_url')?>/js/menu.js"></script>
			<script src="<?php bloginfo('template_url')?>/js/modal.js"></script>
			<script src="<?php bloginfo('template_url')?>/js/wow.min.js"></script>
			<script type="text/javascript">
				$('.icon').on('click', function(){
				  $(this).toggleClass('active');
				});
			</script>
			<script type="text/javascript">
				new WOW().init();
			</script>
			<script type="text/javascript">
				 //solo con java script
				// cuando haga click en el boton ejecutamos la funcion mostar menu
				


				/* o podemos hacerlo con jquery*/
				$('.icon').click(function(){
				  $('#navinicio').toggleClass('mostrar');
				});
				
			</script>

		</body>
</html>