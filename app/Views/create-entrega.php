<!DOCTYPE html>
<html>
<head>
  <title>Agregar</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>

 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/index.php/Entregas/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
 
          
          
          <div class="form-group">
            <label for="FechaEntrega">Fecha de Entrega</label>
            <input type="text" name="FechaEntrega" class="form-control" id="FechaEntrega" placeholder="Please enter equipo">

          </div> 
 
          <div class="form-group">
            <label for="email">IdEquipo</label>
            <input type="text" name="IdEquipo" class="form-control" id="IdEquipo" placeholder="Please enter equipo">
             
          </div>
          <div class="form-group">
            <label for="Id">IdIngenio</label>
            <input type="text" name="IdIngenio" class="form-control" id="IdIngenio" placeholder="Please enter Ingenio">
          </div>
          
          <div class="form-group">
            <label for="Id">Peso TM</label>
            <input type="text" name="PesoTM" class="form-control" id="PesoTM" placeholder="00.000" maxlength="6">
          </div>

          <div class="form-group">
            <label for="Id">Peso TM</label>
            <input type="number" placeholder="0.00" class="form-control" name="price" data-field="Amount" maxlength="6" id="PesoTM">
          </div>
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>

<script type="text/javascript">
function NumCheck(e, field)
{
key = e.keyCode ? e.keyCode : e.which
// backspace 
if (key == 8) return true
// 0-9 
if (key > 47 && key < 58) {
	if (field.value == "") return true
	regexp = /.[0-9]{2}$/
	return !(regexp.test(field.value))
} // . 
if (key == 46) {
	if (field.value == "") return false
	regexp = /^[0-9]+$/
	return regexp.test(field.value)
} // other key 
return false
}


function ValidateMoney(_id) {
    var amount = document.getElementById(_id).value;
    var patron = /^(\d+|\d+.\d{2})$/;
    if (!patron.test(amount)) {
        window.alert('cantidad ingresada incorrectamente');
        document.getElementById('amount').focus();
        return false;
    } else {
        return true;
    }
}
</script>
</body>
</html>