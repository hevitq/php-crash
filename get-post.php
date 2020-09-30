<!-- PHP -->
<?php
  /**
   * GET METHOD
   * method="GET"
   */
  if(isset($_GET['name'])){
    // print_r($_GET);

    /**
     * XSS Problem
     * 
     * use htmlentities() function to prevent XSS
     */

    // XSS
    // echo $_GET['name'];

    // Prevent XSS
    $name = htmlentities($_GET['name']);
    // echo $name;
  };

  /**
   * POST method
   * 
   * method="POST"
   */
  if(isset($_POST['name'])){
    // print_r($_POST);

    /**
     * XSS Problem
     * 
     * use htmlentities() function to prevent XSS
     */

    // XSS
    // echo $_POST['name'];

    // Prevent XSS
    // $name = htmlentities($_POST['name']);
    // echo $name;
  };

  /**
   * REQUEST method
   * 
   * method="POST | GET | COOKIE"
   */
  if(isset($_REQUEST['name'])){
    // print_r($_REQUEST);

    /**
     * XSS Problem
     * 
     * use htmlentities() function to prevent XSS
     */

    // XSS
    // echo $_REQUEST['name'];

    // Prevent XSS
    // $name = htmlentities($_REQUEST['name']);
    // echo $name;
  };

  /**
   * Get parameter
   * 
   * method="GET"
   */
  // echo $_SERVER['QUERY_STRING'];
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Get & Post</title>
</head>
<body>
  <form method="GET" action="get-post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li><a href="get-post.php?name=Moc">Moc</a></li>
    <li><a href="get-post.php?name=Triet">Triet</a></li>
  </ul>
  <h2><?php echo "{$name}'s Profile"; ?></h2>
</body>
</html>