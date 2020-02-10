<?php
  if($_POST) {
    $id = $_REQUEST['id']
    $name = $_REQUEST['nombre'];
    $lastname = $_REQUEST['apellidos'];
    $phonenumber = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];


    $sql = "UPDATE usuarios SET `nombre`='$name',`apellidos`='$lastname',`telefono`='$phonenumber',`email`='$email' where `id`='$id'";

    $connection = mysqli_connect('localhost', 'root', '', 'registro');
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /list.php?status=success');
  } else {
    header('Location: /list.php?status=error');
  }