	<div id="entradaDiscos">
      <h3>Discos Duros</h3>			  
	  <form name="formDisco" method ="POST" action="ingreso.php">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <input type="text" class="form-control" name="nombre" id="nombreDisco" placeholder="Ingreso nombre" >
	    </div>
	    <div class="form-group">
	      <label for="codigo">Codigo:</label>
	      <input type="text" class="form-control" name="codigo" id="codigoDisco" placeholder="Ingreso codigo" >
	    </div>
	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <select class="form-control" name="marca" id="marcasDisco" >
	        <option>Dell</option>
	        <option>Hitachi</option>
	        <option>HP</option>
	        <option>Lenovo</option>
	        <option>Seagate</option>
	        <option>Toshiba</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="capacidad">Capacidad:</label>
	      <select class="form-control" name="capacidad" id="capacidadDisco" >
	        <option>500GB</option>
	        <option>1TB</option>
	        <option>2TB</option>
	        <option>4TB</option>
	        <option>8TB</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="tamano">Tamaño:</label>
	      <select class="form-control" name="tamano" id="tamanoDisco" >
	        <option>2.5"</option>
	        <option>3.5"</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="rpm">RPM:</label>
	      <select class="form-control" name="rpm" id="revolucionesDisco" >
	        <option>5200 RPM</option>
	        <option>5400 RPM</option>
	        <option>5700 RPM</option>
	        <option>5900 RPM</option>
	        <option>7200 RPM</option>
	        <option>10000 RPM</option>
	        <option>15000 RPM</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="cantidad">Cantidad:</label>
	      <input type="number" class="form-control" name="cantidad" id="cantidadDisco" placeholder="-" min= "0" max="99">
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5"  name ="comment" id="comment"></textarea>
		</div>		   
		<div class="form-group">
			<label for="imagenDisco">Imagen: </label>
			<input type="file" name="myfile" class="form-control-file border">
		</div>  
		<input type="hidden" name="tipo" value="6"> 
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>


