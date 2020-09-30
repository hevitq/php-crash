<!-- PHP -->
<?php
  // Create an associative array
  $user = ['name' => 'Hieu Phong', 'email' => 'hieuphong@gmail.com', 'age' => 35];

  echo gettype($user) . '<br>';  // array
  // var_dump($user);

  // Error because $user is array, can't store, require a string
  // setcookie('user', $user, time() + (86400 * 30));

  // Generates a storable representation a value
  $user = serialize($user);

  echo gettype($user) . '<br>';  // string
  // var_dump($user);

  // Set cookie. No error after serialized
  setcookie('user', $user, time() + (86400 * 30));

  // Error: Illegal string offset 'name' when using not unserialize
  // $user = $_COOKIE['user'];
  // echo $user['name'];

  $user = unserialize($_COOKIE['user']);
  echo $user['name'] . '<br>';

  echo '<pre>';
  print_r($user);
  echo '</pre>';
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Cookies</title>
</head>
<body>
  
</body>
</html>