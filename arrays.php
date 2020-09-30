<?php
  # Array - Variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multi-dimensional
  */

  ## Indexed
  $family = array('Nhan', 'Viet');

  // Add to specific index
  $family[2] = 'Win';

  // Print array. For debugging.
  print_r($family);
  echo '<br>';

  // Add to last index
  $family[] = 'Phong Linh';
  echo var_dump($family);
  echo '<br>';

  // Count how many members
  $members =  count($family);
  echo "Members: " . $members . '<br>';


  ## Associative arrays
  /*
    - Allow to define the key and the value with index

  */

  // Using array() function
  $age = array('Viet' => 31, 'Nhan' => 29, 'Win' => 4);
  echo "Win's age: " . $age['Win'] . '<br>';

  // Using bracket
  $id = [89 => 'Viet', 91 => 'Nhan', 17 => 'Win'];
  echo "User with id 91 is: " . $id[89] . '<br>';

  ## Multi-dimensional
  $exprienced = array(
    array('GMO', 3.5, 'IT Comtor'),
    array('NEC', 1.5, 'Tester')
  );
  echo "I have " . $exprienced[0][1] . " years of exprience as a " . $exprienced[0][2] . " at the " . $exprienced[0][0] . " company" . '<br>';
?>