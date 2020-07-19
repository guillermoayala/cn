<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>Ejercicio de Mostrar Arrays</title>
</head>

<body class="container" style="padding-top:10px">
  <h1><?= $Nombre ?></h1>
  <br>
  <button class="btn btn-primary" onClick="Click()">Obtener</button>

  <table class="table" style="padding-top:10px">
    <thead>
      <tr>
        <th scope="col">Programacion</th>
        <th>Data</th>
        <th>Data</th>
        <th>Data</th>

      </tr>
    </thead>
    <tbody id="contenido">
      <tr>
      </tr>
    </tbody>
  </table>


</body>

</html>

<script>
  var contenido = document.querySelector('#contenido')

  function Traer() {
    fetch('https://pokeapi.co/api/v2/pokemon?limit=100&offset=200')
      .then(res => res.json())
      .then(datos => {
        Tabla(datos)

      })

  }

  function Tabla(datos) {

    contenido.innerHTML = ' '
    for (let results of datos) {
      console.log(datos.name);
    }


  }



  async function Click() {
    const response = await fetch('https://randomuser.me/api/')
    const data = await response.json();
    MostrarEnTabla(data)
    //tabla(data)    

  }

  var FechaObtenida = "2016-04-15 00:00"
  
  function cambiarFecha() {
  var s = FechaObtenida;
  var bits = FechaObtenida.split(/\D/);

  var FechaModificada = (bits[0] + ' ' + bits[1] + ' ' + bits[2]);
  console.log(FechaModificada);

}
  

  cambiarFecha();
  //var newDate = new Date('2015-04-07 01:00:00'.split(' ')[0]);
  //console.log(newDate);


  async function MostrarEnTabla(data) {
    contenido.innerHTML = ''
    const { results } = data;
    console.log("MostrarEnTabla -> results", results)
 

    for (const item of results) {
      var FechaObtenida = item.registered.date;
      var s = FechaObtenida;
      var bits = FechaObtenida.split(/\D/);
      var FechaModificada = (bits[0] + ' ' + bits[1] + ' ' + bits[2]);

      console.log("La fecha de registro es: " + FechaModificada);

      contenido.innerHTML += `
              <tr>
            <td>${item.id.name}</td>
            <td>${FechaModificada}</td>
            <td>${item.cell}</td>
            <td>${item.phone}</td>
            </tr>
            `
    }

  }



</script>