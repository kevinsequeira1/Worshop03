<?php
  if($_POST) {
    $id = $_REQUEST['id']


    $sql = "DELETE usuarios where `id`='$id'";

    $connection = mysqli_connect('localhost', 'root', '', 'registro');
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: /list.php?status=success');
  } else {
    header('Location: /list.php?status=error');
  }