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
      
       <div class="col-lg-8">
       <h1>Lista de Peliculas</h1>
       <a href="<?php echo base_url('/index.php/posts/create') ?>" class="btn btn-primary mt-5">Nueva Pelicula</a>
            <div class="row mt-3">
                 <table class="table table-striped " id="posts">
       <thead>
          <tr>
             <th>Id</th>
             <th>Pelicula</th>
             <th>Descripcion</th>
             <th>Accion</th>
          </tr>
       </thead>
       <tbody>
          <?php if($posts): ?>
          <?php foreach($posts as $post): ?>
          <tr>
             <td><?php echo $post['id']; ?></td>
             <td><?php echo $post['title']; ?></td>
             <td><?php echo $post['description']; ?></td>
             <td>
              <a href="<?php echo base_url('index.php/Posts/edit/'.$post['id']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('index.php/Posts/delete/'.$post['id']);?>" class="btn btn-sm btn-danger">Eliminar</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
       </tbody>
     </table>
                   </div>
                </div>
          <div class="col-lg-4  mt-5">
               <img style="width:100%" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2019/10/star-wars-9-cartel.jpg?itok=LjlFPDSG" alt="test">
         </div>
    </div>
   
  
  
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>

<script>


//Metodo de POST
function postAPI() {

   fetch('https://jsonplaceholder.typicode.com/posts', {
    method: 'POST',
    body: JSON.stringify({
      title: 'Esto es un ejemplo',
      body: 'Test',
      userId: 1
    }),
    headers: {
      "Content-type": "application/json; charset=UTF-8"
    }
  })
  .then(response => response.json())
  .then(json => console.log(json))

}

//Metodo de Obtener por Id

function GetPorId() {
   fetch('https://jsonplaceholder.typicode.com/posts?userId=2')
  .then((response) => response.json())
  .then((json) => console.log(json))
   
}

function EliminarPorId() {
   fetch('https://jsonplaceholder.typicode.com/posts/1', {
  method: 'DELETE',
})
}

//Llamado de metodos
GetPorId();
postAPI();
</script>

