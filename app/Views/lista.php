<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Crud Automoviles</title>
</head>
<body>
<table class="table table-striped">
  <thead>
  <tr>
        <td colspan="5" align="right"><a class="btn btn-primary" href="<?php echo site_url('Automovil/create') ?>">Agregar</a></td>
    </tr>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Marca</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
	 foreach($automoviles_detalles as $automovil){
		?>
		<tr>
			<td><?php echo $automovil['id']; ?></td>
			<td><?php echo $automovil['Nombre']; ?></td>
			<td><?php echo $automovil['Marca']; ?></td>
            <td><?php echo $automovil['FechaIngreso']; ?></td>
            <td><?php echo $automovil['Correo']; ?></td>
			<td><a class="btn btn-primary"  href="<?php echo base_url(); ?>/index.php/Automovil/editar/<?php echo $automovil['id']; ?>">Editar</a>&nbsp;<a class="btn btn-danger" href="<?php echo base_url(); ?>/index.php/Automovil/eliminar/<?php echo $automovil['id']; ?>">Eliminar</a></td>
		</tr>
		<?php
	}
	?>
  </tbody>
</table>

</body>
</html>