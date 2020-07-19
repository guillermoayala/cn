<form method="post" name="frmAgregar" action="<?php echo site_url('Automovil/AgregarDatos');?>">
        <table>
            <tr>
                <td colspan="2" align="center">Agregar Nuevo Vehiculo</td>
            </tr>
        
            <tr>
                <td>Nombre del Vehiculo</td>
                <td><input type="text" name="txtNombre"> </td>
            </tr>
            <tr>
                <td>Marca</td>
                <td><input type="text" name="txtMarca"> </td>
            </tr>
            <tr>
                <td>Fecha de Ingreso</td>
                <td><input name="txtFecha" type="text"></input> </td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="text" name="txtCorreo"> </td>
            </tr>
           
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Agregar" name="btnAgregar"> </td>
            </tr>
        </table>
</form>
