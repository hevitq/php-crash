<!-- PHP -->
<?php
  // Update/Change cookie. Set exprie time to 30 days
  setcookie('username', 'vnPace', time() + 86400 * 30);

  // Unset/Delete cookie. Set exprie time to an hour ago
  setcookie('username', 'vnPace', time() - 3600);

  // Check cookie exist
  if(count($_COOKIE) > 0){
    echo 'There are ' . count($_COOKIE) . ' cookies saved.<br>';
  } else {
    echo 'There are no cookie saved.<br>';
  };

  if(isset($_COOKIE['username'])){
    echo 'User ' . $_COOKIE['username'] . ' is set.<br>';
  } else {
    echo 'User is not set.<br>';
  };

  // Unset cookie
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