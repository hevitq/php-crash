<!-- PHP -->
<?php
  // Check for the submit
  if(isset($_POST['submit'])){
    // Grab username from submitted
    $username = htmlentities($_POST['username']);

    // Set a cookie in 1h(+3600). after an hour cookie will be expired
    setcookie('username', $username, time()+3600);

    // user header() funtion to redirect to a different page
    header('Location: page2.php');
  } else {

  };
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="username" placeholder="Enter Name">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>