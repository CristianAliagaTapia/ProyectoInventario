	<div id="entradaPendrive">
      <h3>Pendrive</h3>
	  <form name ="formPendrive" method ="POST" action="ingreso.php">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <input type="text" class="form-control" name="nombre" id="nombrePendrive" placeholder="Ingreso nombre pendrive" >
	    </div>
	    <div class="form-group">
	      <label for="codigo">Codigo:</label>
	      <input type="number" class="form-control" name="codigo" id="codigoPendrive" placeholder="Ingreso codigo pendrive" >
	    </div>

	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <select class="form-control" name="marca" id="marcaPendrive" >
	        <option>Kington</option>
	        <option>SanDisk</option>
	        <option>HP</option>
	        <option>Sony</option>
	        <option>ADATA</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="color">Color:</label>
	      <select class="form-control" name="color" id="colorPendrive" >
	        <option>Rojo</option>
	        <option>Azul</option>
	        <option>Negro</option>
	        <option>Plateado</option>
	        <option>Blanco</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="capacidad">Capacidad:</label>
	      <select class="form-control" name="capacidad" id="capacidadPendrive" >
	        <option>1GB</option>
	        <option>2GB</option>
	        <option>4GB</option>
	        <option>8GB</option>
	        <option>16GB</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="cantidad">Cantidad:</label>
	      <input type="number" class="form-control" name="cantidad" id="cantidadPendrive" placeholder="-" min= "0" max="99" >
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
		</div>
		<div class="form-group">
			<label for="imagen">Imagen: </label>
			<input type="file" name="myfile" class="form-control-file border">
		</div> 
		<input type="hidden" name="tipo" value="4"> 							     
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>

