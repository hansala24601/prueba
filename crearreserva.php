<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  

<title>HOJA DE RESERVAS SHOWS</title>

<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: white;}

div.groove {border-style: groove;}
div.ridge {border-style: ridge;}


</style>
</head>
<body>


	<?php 
	   session_start();
	?>


    <div class='groove'>
    	<form action="crearreserva.php" method="post" id="usrform">
    		
    		
    		<br>
    		<img src="logo_I_cad_med.png" height="auto" width="10%"/>
    		
    		<br><br>
    		
    		HOJA DE RESERVA DE SHOWS ONLINE
    		<br>
    		<br>
    		
    		
    		<div class='groove'>
        		Nombre de la Escuela/Institución: 
        		<br>
        		<input type="text" name="institucion" pattern="^[a-zA-Z0-9_.-]*$" required  />*
        		<br>
        		
        		Teléfono:
        		<br>
        		<input type="text" name="telefono" placeholder="123456789" pattern="[0-9]{9}" />
        	</div>
        	
        	
    		
    		<div class='groove'>
        		Nombre de la persona de contacto:
        		<br>
        		<input type="text" name="nombrepersona" pattern="^[a-zA-Z0-9_.-]*$" required/>*
        		<br>
        		
        		Teléfono de la persona de contacto: 
        		<br>
        		<input type="text" name="telefonopersona" placeholder="123456789"  pattern="[0-9]{9}" />
        		<br>
        		
        		
        		Email de la persona de contacto: 
        		<br>
        		<input type="text" name="email" placeholder="Email" required />*
        		<br>
        		
        	</div>
        	<div class='groove'>

        		<?php
		
        		
        		
        		for ($x = 1; $x <= 5; $x++) {
        		    
        		    echo "Show ".$x."<br>";

        		    echo "<select name='show".$x."' onchange='myFunction(".$x.")'>";

        		    echo '<option value="noshow">-</option>';
        		    echo '<option value="mrbear">Mr Bear (show interactivo)</option>';
        		    echo '<option value="atw">Around the world (versión interactiva)</option>';
        		    echo '<option value="atwni">Around the world (versión NO interactiva)</option>';
        		    
        		    
        		    
        		    echo '</select>';
    
        		    //echo '<input type="datetime-local" name="fechas'.$x.'">';
        		    
        		    echo '<input type="date" name="fechas'.$x.'"><input type="time" name="hora'.$x.'">';

        		    

        		    echo "<br>";
        		    
				}
        		
				
				
				?>
				
				<br>(El día y la hora son orientativas. Si quieres añadir más información puedas incluirla en el apartado de comentarios)
				
				<br>
				</div>
				<div class='groove'>
    				Comentarios: 
            		<br>
    				<textarea name="comments" form="usrform" cols="40" rows="3"></textarea>
        			<br>
        		</div>

        		
    		</div>
    		
			<br><br><br> 
    		<input type="submit" name="submit" value="Enviar hoja" />
    		
    		
    		
    	</form>
    
    </div>
    
    
    
    <script type="text/javascript">
function myFunction(val) {


	var x = document.getElementById("show"+val+"").value;
	alert(x);
	
}
</script>


</body>
</html>
