<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<footer class="row" id="contactenos">

	<hr>
	
	<h1 class="text-center text-info" background-color="red"><b>CONTÁCTENOS</b></h1>

	<hr>
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					
					<iframe style="border-radius: 20px;margin:5px 10px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.8179901970123!2d-75.20036270894924!3d-12.068548303152085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e97b2e74b4103%3A0xeab4c4aab472fa9!2sJiron%20Leandra%20Torres%201480%2C%20Huancayo%2012002!5e0!3m2!1ses-419!2spe!4v1586809568914!5m2!1ses-419!2spe" width="98%"  frameborder="0" style="border:0" allowfullscreen></iframe>
					
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotronn">
		<img style="border-radius: 20px;margin:40px 40px" src="views/images/loogo2.png" class="img-responsive" width="150" height="150" align="left">
    		<h4 class="blockquote-reverse text-primary">
    			<ul>
				  </br>
				  </br>
	              <li style="color:black;"><span class="glyphicon glyphicon-phone" ></span>  +51 944944522</li>
				  <li style="color:black;"><span class="glyphicon glyphicon-map-marker"></span>  Av.Leandra Torres N° 1481 - Huancayo</li>
				  <li style="color:black;"><span class="glyphicon glyphicon-envelope"></span>  europerusac@gmail.com</li>    
	          	</ul>      
    		</h4>
			</div>
			  
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario">

		<ol>
    		<li>
        		<a href="http://www.facebook.com" target="_blank">
          		<i class="fa fa-facebook" style="font-size:24px;color:blue;"></i>  
       		 	</a>
   			</li>

    		<li>
        		<a href="http://www.youtube.com" target="_blank">  
          		<i class="fa fa-youtube" style="font-size:24px;color:red;"></i>  
       			</a>
    		</li>
    
    		<li>
        		<a href="http://www.instagram.com" target="_blank">
          		<i class="fa fa-instagram" style="font-size:24px;color:rgb(157, 137, 47);"></i>  
        		</a>
    		</li>
			</ol>

			<form method="post" onsubmit="return validarMensaje()">

			    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre" required>

			    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

			    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Contenido del Mensaje" class="form-control" required></textarea>

			 
			  	<input align="center" type="submit" class="boton" value="Enviar">
		</form>

		<?php

		$mensajes = new MensajesController();
		$mensajes -> registroMensajesController();

		?>
		  		
	</div>
	
</footer>
<h4 align="center"> Universidad Continental 2020 ® Wilson lazo - Huancayo </h5>