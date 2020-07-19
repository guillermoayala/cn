<form method="post" name="frmEdit" action="<?php echo base_url('/index.php/Automovil/actualizar');?>">
	<table>
		<tr>  
            <td> <input type="hidden" name="txtId" class="form-control" id="id" value="<?php echo $automoviles['id'] ?>">
        </td>
		<tr>
			<td colspan="2" align="center">Editar Auto</td>
        </tr>
        
        </tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="txtNombre" value="<?php echo $automoviles['Nombre']; ?>"> </td>
		</tr>
		<tr>
			<td>Marca</td>
			<td><input type="text" name="txtMarca" value="<?php echo $automoviles['Marca']; ?>"> </td>
		</tr>
		<tr>
			<td>Fecha deIngreso</td>
			<td><input type="text" name="txtFecha" value="<?php echo $automoviles['FechaIngreso']; ?>"> </td>
		</tr>
		<tr>
			<td>Correo</td>
			<td><input type="text" name="txtCorreo" value="<?php echo $automoviles['Correo']; ?>"> </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Editar" name="btnEdit"> </td>
		</tr>
	</table>
</form>

