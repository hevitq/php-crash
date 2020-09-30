<!-- PHP -->
<?php
  // Include session start at the top of the each page
  session_start();

  // Print out session
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  
  //If session 'name' exist, return 'Guest'
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

  //If session 'name' exist, return 'Guest'
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Sessions</title>
</head>
<body>
  <h1>Hello <?php echo $name; ?></h1>
</body>
</html>