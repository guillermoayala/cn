<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Peliculas</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>
<body>

<div class="container mt-5">

    <div class="row">
      
       <div class="col-lg-12">
       <h1>Procesos de entregas</h1>
            <div class="row mt-3">
                 <table class="table table-striped " id="entregas">
       <thead>
           
          <tr>
             <th>IdEntrega</th>
             <th>Fecha de Entrega</th>
             <th>IdEquipo</th>
             <th>Placa</th>
             <th>Peso TM</th>
             <th>IdIngenio</th>
             <th>CodIngenio</th>
             <th>NomIngenio</th>
            
          </tr>
       </thead>
       <tbody>
          <?php if($vw_entregas): ?>
          <?php foreach($vw_entregas as $vw_entregas): ?>
          <tr>
            <td><?php echo $vw_entregas['IdEntrega']; ?></td>
             <td><?php echo $vw_entregas['FechaEntrega']; ?></td>
             <td><?php echo $vw_entregas['IdEquipo']; ?></td>
             <td><?php echo $vw_entregas['Placa']; ?></td>
             <td><?php echo $vw_entregas['PesoTM']; ?></td>
             <td><?php echo $vw_entregas['IdIngenio']; ?></td>
             <td><?php echo $vw_entregas['CodIngenio']; ?></td>
             <td><?php echo $vw_entregas['NomIngenio']; ?></td>

             
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
       </tbody>
     </table>
                   </div>
                </div>
       
    </div>
   
  
  
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>