<?php
  if($_POST) {
    $name = $_REQUEST['nombre'];
    $lastname = $_REQUEST['apellidos'];
    $phonenumber = $_REQUEST['telefono'];
    $email = $_REQUEST['telefono'];


    $sql = "INSERT INTO usuarios(`nombre`, `apellidos`, `telefono`,`email`) VALUES ('$username','$lastname','$phonenumber','$email')";

    $connection = mysqli_connect('localhost', 'root', '', 'registro');
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /index.php?status=success');
  } else {
    header('Location: /index.php?status=error');
  }