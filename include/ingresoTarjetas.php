	<br>
	<div id="entradaTarjetasG">
      <h2>Tarjetas graficas</h2>			  
	  <form name="formMemoria" method ="POST" action="ingreso.php">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <div class="input-group">
	      <input type="text" class="form-control" name="nombre" id="nombreTarjeta" placeholder="Ingreso nombre" >
	  	  </div>
	    </div>
	    <div class="form-group">
	      <label for="codigo">Codigo:</label>
	      <div class="input-group">
	      <input type="text" class="form-control" name="codigo" id="codigoTarjeta" placeholder="Ingreso codigo" >
	  		</div>
	    </div>
	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <select class="form-control" name="marca" id="marcasTarjeta" >
	        <option>ASUS</option>
	        <option>Gigabyte</option>
	        <option>MSI</option>
	        <option>EVGA</option>
	        <option>Zotac</option>
	      </select>
	    </div>

	    <div class="form-group">
	      <label for="plataforma">Plataforma:</label>
	      <br>
		      <label class="form-check-label" for="plataformaTarjeta1" style="margin-left: 30px">
		        <input type="radio" class="form-check-input" id="plataformaTarjeta1" name="plataforma" value="Intel" style="margin-left: -20px">Intel
		      </label>
		      <label class="form-check-label" for="plataformaTarjeta" style="margin-left: 30px">
		        <input type="radio" class="form-check-input" id="plataformaTarjeta2" name="plataforma" value="AMD" style="margin-left: -20px">AMD
		      </label>
	    </div>	
	    <div class="form-group">
	      <label for="modelo">Modelo:</label>
	      <input type="text" class="form-control" name="modelo" id="modeloTarjeta" placeholder="Ingreso modelo" >
	    </div>	    
	    <div class="form-group">
	      <label for="cantidad">Cantidad:</label>
	      <input type="number" class="form-control" name="cantidad" id="cantidadTarjeta" placeholder="-" min= "0" max="99" >
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
		</div>		   
		<div class="form-group">
			<label for="imagenTarjeta">Imagen: </label>
			<input type="file" name="myfile" class="form-control-file border">
		</div> 
		<input type="hidden" name="tipo" value="5">  
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>


