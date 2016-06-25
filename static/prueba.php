<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/prueba.css">
	</head>
	<body>
		
		<div class="item itemJQuery">
            <div class="item-billboard">
                  <img src="img/fixed.png">
            </div>
            <div class="item-detail">
                <p class="cuerpoTexto1">
					Conflictos laborales, Demandas de empleados, manejo de personal,Términos de contratación.
					<br>
					Asesoramiento en aspectos generales para dar cumplimiento a las regulaciones y leyes laborales
					<br>
					Atención personalizada en base al protocolo del la LFT.
					<br>
					Defensa de los derechos de los trabajadores y/o patrones ante la junta de conciliación y arbitraje.
					<br>
					Asesoría en cuestiones de salud, seguridad social y en la negociación y
					administración de contratos de trabajo individuales y colectivos.
				</p>
            </div>
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
      jQuery(document).ready(function() {
      jQuery(".itemJQuery").bind({
           mouseenter: function() {
                 var self = jQuery(this), billboard = self.data("billboardElement");
                 if(!billboard) {
                       billboard = jQuery(jQuery(".item-billboard", this)[0]);
                       self.data("billboardElement", billboard);
                 }
                 jQuery(billboard).stop().animate({
                       "margin-top": "-395px"
                 });
           },
       
             mouseleave: function() {
                 jQuery(this).data("billboardElement").stop().animate({
                       "margin-top": 0
                 });
           }
      });
});
</script>
	</body>
</html>