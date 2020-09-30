<!-- PHP -->
<?php
  # SESSIONS
  ## Session stored in folder
  ## C:\MAMP\bin\php\sessions

  if(isset($_POST['submit'])){
    ## Catch the values in the form and put into session variables
    
    // Start a session to use session variables
    session_start();

    /*
      Set session 'name', 'email' to the post name value
      Set entities to block XSS
    */
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    /*
      Send cookie by header() method.
      OR setcookie() : Send a cookie with urlencoding the cookie value
      OR setrawcookie() : Send a cookie without urlencoding the cookie value
      Redirect to a new page from PHP.

      NOTE: These function must be used before sending any output to the browser. Otherwise, the data will not be set with the header information.
      So, always put into the top of page.
    */
    header('Location: page2.php');

    // header("Set-Cookie: platform=php; expires=Mon, 20-April-13 17:30:48 GMT; path=/; domain=phppot.com");
    // Set-Cookie: NAME=VALUE; [expires=DATE;] [path=PATH;] [domain=DOMAIN_NAME;] [secure]
  };
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>

</html>