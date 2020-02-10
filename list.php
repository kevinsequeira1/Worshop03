<?php
  // get all users from the database
  $sql = 'SELECT * FROM registro';
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
<div class="container">
  <h1>List of Users</h1>
    <table class="table table-light">
      <tr>
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
              echo "<tr><td>".$user[0]."</td><td>".$user[1]."</td><td><a href=\"edit.php?id=".$user[0]."\">Edit</a> | Delete</td></tr>";
            }
        ?>
      </tbody>
    </table>
    <?php

  $connection->close();
?>
</div>
</body>
</html>