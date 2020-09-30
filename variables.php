<?php
  /*
    // Error
    - If write '<br' will make error can't render  
  /*

  // Single line comment
  # Single line comment
  /*
    Multiline
    comment
  */

  // echo faster than print
  // echo don't return a value
  echo 'echo something' . '<br>';

  // print return a value
  print 'print something' . '<br>';


  # VARIABLES
  /*
    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers and underscore
    - Case sensitive
  */

  # DATA TYPE
  /*
    - Strings
    - Integers
    - Floats
    - Booleans
    - Objects
    - NULL
    - Resource
  */
  $firstName = 'Phong';
  $lastName = 'Hieu';
  // $fullName = $lastName . ' ' . $firstName;

  // Double quotes will actually parse the variable
  $fullName = "$lastName $firstName";
  echo $fullName . '<br>';


  // Integer
  $age = 30;
  echo 'Age: ' . $age . '<br>';

  // Float
  $expComtor = 3.5;
  $expTester = 1.5;
  $expWorks = $expComtor . $expTester;
  echo 'Exprience: ' . $expWorks . '<br>';

  // Boolean
  $married = true;
  echo 'Relationship: ' . '<br>';

  // Constant
  define('STD', '0935415466');
  echo 'STD: ' . STD . '<br>';

?>