<!-- PHP -->
<?php
  // Start session
  session_start();

  // Can change/upadte session name
  $_SESSION['name'] = 'Hieu Phong';

  /*
    Grab 'name' and 'email' from the session,
    Even if reload page, it's still works, stored in the session
  */
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
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
  <h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?></h5>
  <a href="page3.php">Go to page 3</a>
</body>
</html>