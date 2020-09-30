<!-- PHP -->
<?php
# PHP FILTER
/*
    Refer:
    https://www.w3schools.com/php/php_ref_filter.asp

    ## Input
    INPUT_POST	POST variables
    INPUT_GET	GET variables
    INPUT_COOKIE	COOKIE variables
    INPUT_ENV	ENV variables
    INPUT_SERVER	SERVER variables
    
    ## Validate
    FILTER_VALIDATE_BOOLEAN	Validates a boolean
    FILTER_VALIDATE_EMAIL	Validates value as a valid e-mail address
    FILTER_VALIDATE_FLOAT	Validates value as float
    FILTER_VALIDATE_INT	Validates value as integer
    FILTER_VALIDATE_IP	Validates value as IP address
    FILTER_VALIDATE_MAC	Validates value as MAC address
    FILTER_VALIDATE_REGEXP	Validates value against a regular expression
    FILTER_VALIDATE_URL	Validates value as URL

    ## Sanitize
    FILTER_SANITIZE_EMAIL	Removes all illegal characters from an e-mail address
    FILTER_SANITIZE_ENCODED	Removes/Encodes special characters
    FILTER_SANITIZE_MAGIC_QUOTES	Apply addslashes()
    FILTER_SANITIZE_NUMBER_FLOAT	Remove all characters, except digits, +- signs, and optionally .,eE
    FILTER_SANITIZE_NUMBER_INT	Removes all characters except digits and + - signs
    FILTER_SANITIZE_SPECIAL_CHARS	Removes special characters
    FILTER_SANITIZE_STRING	Removes tags/special characters from a string
    FILTER_SANITIZE_STRIPPED	Alias of FILTER_SANITIZE_STRING
    FILTER_SANITIZE_URL	Removes all illegal character from s URL


  */



## Filter to check a number
$var1 = 23;
$var2 = 'a23';

if (filter_var($var1, FILTER_VALIDATE_INT)) {
  if (filter_var($var2, FILTER_VALIDATE_INT)) {
    echo 'Both ' . $var1 . ' and ' . $var2 . ' is a number' . '<br>';
  } else {
    echo $var1 . ' is a number, but ' . $var2 . ' is NOT a number' . '<br>';
  };
} else {
  echo 'Both ' . $var1 . ' and ' . $var2 . ' is NOT a number' . '<br>';
};



## FILTER to sanitize a number
$var = 'hu1e4d8an3242;hu3#4';  // 148324234
echo filter_var($var, FILTER_SANITIZE_NUMBER_INT) . '<br>';



## FILTER to sanitize a special char
$var = '<script>alert(1)</script>';
// echo $var . '<br>';
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS) . '<br>';;



/**
 * Check if 'data' variable of specified INPUT_POST type exists
 */
if (filter_has_var(INPUT_POST, 'data')) {
  // Grab/Take value in posted data and put it into a variable called $email
  $email = $_POST['data'];

  /**
   * Remove (strip out) any illegal chars, and re-put it into the variable $email
   * 
   * `FILTER_SANITIZE_EMAIL` remove any illegal chars from $email
   */
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email . '<br>';



  // /**
  //  * Check if inputed 'data' variable is validate email
  //  * 
  //  * `FILTER_VALIDATE_EMAIL` is easy way to check email than using some crazy regular expression
  //  */
  // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
  //   echo 'Email is valid';
  // } else {
  //   echo 'Email is NOT valid';
  // };

  /**
   * Check if sanitized 'data' variable is validate email
   * 
   * `FILTER_VALIDATE_EMAIL` is easy way to check email than using some crazy regular expression
   */
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email is valid';
  } else {
    echo 'Email is NOT valid';
  };

  /**
   * Customize ilter with a bunch of different input fields
   * 
   * `ILTER_VALIDATE_EMAIL` validate with email type
   * `FILTER_VALIDATE_INT` vadidate with int type
   * set `options` to limit range integer
   */
  $filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100
      )
    )
  );

  echo '<pre>';
  print_r(filter_input_array(INPUT_POST, $filters));
  echo '</pre>';

  ### Customize filter with an array
  // Create an array
  $var = array(
    "name" => "hieu phong",
    "age" => 31,
    "email" => "hevtiq@gmail.com"
  );

  // Create a validate filter
  $filters = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );

  // Applly filters to array
  echo '<pre>';
  print_r(filter_var_array($var, $filters));
  echo '</pre>';
};
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Filters & Validation</title>
</head>

<body>
  <!--
    $_SERVER['PHP_SELF] refer the current document
    Even if filename changed, it will still work
  -->
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
  </form>
</body>

</html>