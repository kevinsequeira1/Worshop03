<?php
  // get all users from the database
  $sql = 'SELECT * FROM usuarios';
  $connection = new mysqli('localhost', 'root', '', 'registro');
  $result = $connection->query($sql);
  $users = $result->fetch_all();
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

<form action="edit.php" method="POST" class="form-inline" role="form">

<div class="container">
  <h1>List of Users</h1>
    <table class="table table-light">
      <tr>
        <td>id</td>
        <th>Name</th>
        <th>Lastname</th>
        <th>Phonenumber</th>
        <th>Email</th>

        <th>Actions</th>
      </tr>
      <tbody>
        <?php
          // loop users
            foreach($users as $user) {
              echo "<tr><td><input type='number' value='".$user[0]."'></td><td><input type='text' value='".$user[1]."'></td><td><input type='text' value='".$user[2]."'></td><td><input type='number' value='".$user[3]."'></td><td><input type='email' value='".$user[4]."'></td><td><button>Edit</button></td> |<td><button type='submit'> Delete</button></td></td>";
            }
        ?>
      </tbody>
    </table>
    <?php

  $connection->close();
?>
</div>


</form>


</body>
</html>