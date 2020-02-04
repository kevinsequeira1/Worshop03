<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    switch($_REQUEST['status']) {
      case 'success':
        $message = 'User was added succesfully';
      break;
      case 'error':
        $message = 'There was a problem inserting the user';
      break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Document</title>
</head>
<body>
<div class="container">
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Form Registration</h1>
    <form action="signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Name</label>
        <input type="text" class="form-control" id="" name="nombre" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">LastName</label>
        <input type="text" class="form-control" id="" name="apellidos" placeholder="Your last name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Phonenumber</label>
        <input type="number" class="form-control" id="" name="telefono" placeholder="Your phonenumber">
      </div>

      <div class="form-group">
        <label class="sr-only" for="">email</label>
        <input type="email" class="form-control" id="" name="email" placeholder="Your email">
      </div>

      <input type="submit" class="btn btn-primary" value="Submit"></input>
    </form>
</div>

</body>
</html>