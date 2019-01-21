	<br>
	<div id="entradaProcesador">
      <h2>Procesador</h2>			  
	  <form name="formProcesador" id="formProducto"  onsubmit="return agregarProducto()">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <div class="input-group">
	      <input type="text" class="form-control" id="nombreProcesador" placeholder="Ingreso nombre procesador" name="nombre">
	  </div>
	    </div>
	    <div class="form-group">
	      <label for="codigo">Codigo:</label>
	      <div class="input-group">
	      <input type="text" class="form-control" id="codigoProcesador" placeholder="Ingreso codigo procesador" name="codigo">
	  </div>
	    </div>
	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <br>
     	      <label class="form-check-label" for="marca1" style="margin-left: 30px">
		        <input type="radio" class="form-check-input" id="marcaProcesador1" name="marca" value="Intel" style="margin-left: -20px">Intel
		      </label>
		      <label class="form-check-label" for="marca2" style="margin-left: 30px">
		        <input type="radio" class="form-check-input" id="marcaProcesador2" name="marca" value="AMD" style="margin-left: -20px">AMD
		      </label>
	    </div>		    
	    <div class="form-group">
	      <label for="cores">Cores:</label>
	      <select class="form-control" name="cores" id="coresProcesador" >
	        <option>2</option>
	        <option>4</option>
	        <option>6</option>
	        <option>8</option>
	        <option>10</option>
	        <option>12</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="socket">Socket:</label>
	      <select class="form-control" name="socket" id="socketsProcesador" >
	        <option>AM3+</option>
	        <option>AM4</option>
	        <option>FM2</option>
	        <option>FM2+</option>
	        <option>LGA 1150</option>
	        <option>LGA 1151</option>
	        <option>LGA 1151-V2</option>
	        <option>LGA 2011-V3</option>
	        <option>LGA 2066</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="cantidad">Cantidad:</label>
	      <input type="number" class="form-control" name="cantidad" id="cantidadProcesador" placeholder="-" min= "0" max="99">
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
		</div>		   
		<div class="form-group">
			<label for="imagenProcesador">Imagen: </label>
			<input type="file" name="myfile" id="myfile" class="form-control-file border">
		</div>
		<input type="hidden" name="tipo" value="1">   
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>


