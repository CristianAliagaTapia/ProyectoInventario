	<div id="entradaMemoria">
      <h3>Memoria</h3>			  
	  <form name="formMemoria" method ="POST" action="ingreso.php">
	    <div class="form-group">
	      <label for="nombre">Nombre:</label>
	      <input type="text" class="form-control" name="nombre"id="nombreMemoria" placeholder="Ingreso nombre memoria" >
	    </div>
	    <div class="form-group">
	      <label for="codigoMemoria">Codigo:</label>
	      <input type="text" class="form-control" name="codigo" id="codigoMemoria" placeholder="Ingreso codigo memoria" >
	    </div>
	    <div class="form-group">
	      <label for="marca">Marca:</label>
	      <br>
	      <select class="form-control" name="marca" id="marcaMemoria" >
	        <option>Lenovo</option>
	        <option>Kingston</option>
	        <option>IBM</option>
	        <option>HP</option>
	        <option>G.Skill</option>
	        <option>Corsair</option>
	      </select>	      
	    </div>		    
	    <div class="form-group">
	      <label for="capacidad">Capacidad Memoria:</label>
	      <select class="form-control"  name="capacidad" id="capacidadMemoria">
	        <option>512 MB</option>
	        <option>1 GB</option>
	        <option>2 GB</option>
	        <option>4 GB</option>
	        <option>8 GB</option>
	        <option>16 GB</option>
	      </select>	
	    </div>	
	    <div class="form-group">
	      <label for="tipoMemoria">Tipo Memoria:</label>
	      <select class="form-control" name="tipoMemoria" id="tipoMemoria" >
	        <option>DDR</option>
	        <option>DDR2</option>
	        <option>DDR3</option>
	        <option>DDR4</option>
	      </select>
	    </div>
	    <div class="form-group">
	      <label for="cantidad">Cantidad:</label>
	      <input type="number" class="form-control" name="cantidad" id="cantidadMemorias" placeholder="-" min= "0" max="99">
	    </div>		    
	    <div class="form-group">
				<label for="comment">Descripcion:</label>
				<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
		</div>		   
		<div class="form-group">
			<label for="imagen">Imagen: </label>
			<input type="file" name="myfile" class="form-control-file border">
		</div>  
		<input type="hidden" name="tipo" value="3"> 
	    <br>
	    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
	  </form>
	</div>


