	<div id="entradaPlaca">
      <h3>Placa Madre</h3>			  
	  <form name="formPlaca" method ="POST" action="ingreso.php">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <input type="text" class="form-control" id="nombrePlaca" placeholder="Ingreso nombre placa" name="nombre">
	    </div>
	    <div class="form-group">
	      <label for="codigo">Codigo:</label>
	      <input type="text" class="form-control" id="codigoPlaca" placeholder="Ingreso codigo placa" name="codigo">
	    </div>
	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <br>
	      <select class="form-control" name="marca" id="marcaPlaca" >
	        <option>ASUS</option>
	        <option>Gigabyte</option>
	        <option>MSI</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="plataforma">Plataforma:</label>
	      <br>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="marcaPlataforma1">
		        <input type="radio" class="form-check-input" id="marcaPlataforma1" name="plataforma" value="Intel">Intel
		      </label>
		    </div>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="marcaPlataforma2">
		        <input type="radio" class="form-check-input" id="marcaPlataforma2" name="plataforma" value="AMD">AMD
		      </label>
		    </div>
	    </div>	
	    <div class="form-group">
	      <label for="formato">Formato:</label>
	      <br>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="formatoPlaca1">
		        <input type="radio" class="form-check-input" id="formatoPlaca1" name="formato" value="ATX">ATX
		      </label>
		    </div>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="formatoPlaca2">
		        <input type="radio" class="form-check-input" id="formatoPlaca2" name="formato" value="Micro ATX">Micro ATX
		      </label>
		    </div>
		    <div class="form-check-inline">
		      <label class="form-check-label" for="formatoPlaca3">
		        <input type="radio" class="form-check-input" id="formatoPlaca3" name="formato" value="Mini ITX">Mini ITX
		      </label>
		    </div>
	    </div>	    		    	
	    <div class="form-group">
	      <label for="socket">Socket:</label>
	      <select class="form-control" name="socket" id="socketsPlaca" >
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
	      <input type="number" class="form-control" name="cantidad" id="cantidadPlaca" placeholder="-" min= "0" max="99">
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
		</div>		   
		<div class="form-group">
			<label for="imagen">Imagen: </label>
			<input type="file" name="myfile" class="form-control-file border">
		</div>  
		<input type="hidden" name="tipo" value="2"> 
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>

