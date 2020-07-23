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
        <form action="<?php echo base_url('/index.php/posts/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Please enter title">
             
          </div> 
 
          <div class="form-group">
            <label for="email">Description</label>
            <input type="text" name="description" class="form-control" id="email" placeholder="Please enter description">
             
          </div>   
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#post_form").length > 0) {
      $("#post_form").validate({
      
    rules: {
      title: {
        required: true,
      },
  
      description: {
        required: true,       
      },   
    },
    messages: {
        
      title: {
        required: "Please enter title",
      },
      description: {
        required: "Please enter description",       
      }, 
    },
  })
}
</script>
</body>
</html>