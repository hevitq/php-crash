<?php
  # LOOPS - Execute code set number of times

  /*
    - For loop
    - White loop
    - Do...White loop
    - Foreach loop
  */



  ## For loop
  ###########################
  ## @params - init, condition, increment
  ###########################

  // Declare a temp variable
  $loop_result = '';

  // Loop through 0~9
  for($i = 0; $i < 10; $i++){
    // Concat strings
    $loop_result = $loop_result . $i . ' ';
  };

  // Right trim a space character in the last of string
  echo 'Loop result: ' . rtrim($loop_result, ' ') . '<br>';



  ## White loop
  ###########################
  ## @params - condition
  ###########################

  // Declare initial params value
  $i = 0;
  $while_result = '';

  // Loop until condition
  while($i < 10){
    // Concat strings
    $while_result = $while_result . $i . ' ';

    // Increment params
    $i++;
  };

  // Right trim a space character in the last of string
  echo 'White result: ' . rtrim($while_result, ' ') . '<br>';



  ## Do...While
  ###########################
  ## @params - condition
  ###########################

  // Declare initial params value
  $i = 0;
  $dowhile_result = '';

  do{
    $dowhile_result = $dowhile_result . $i . ' ';
    $i++;
  }

  while($i < 10);

  // Right trim a space character in the last of string
  echo 'Do...While result: ' . rtrim($dowhile_result, ' ') . '<br>';



  ## Foreach loop - For arrays
  ###########################
  ## items in array
  ###########################

  ### Multi-dimensional
  $exprienced = array(
    array('GMO', 3.5, 'IT Comtor', '2014'),
    array('NEC', 1.5, 'Tester', '2019'),
    array('NEW', 0, 'Leader', '2020')
  );

  // Count variable 
  $cnt = 0;
  $roleList = '';

  // Separator
  $separator = ', ';
  $breakLine = '<br>';

  // Loop throuth arrays
  foreach($exprienced as $work){
    // Grab name of company
    $company = $work[0];
    $yearOfExperience = $work[1];
    $role = $work[2];
    $year = (int)$work[3];

    // Increment count
    $cnt = $cnt + 1;

    // Grab roles
    $roleList = $roleList . $role . $separator;

    // Check company condition to run code
    if($company === 'NEC'){
      echo 'I\'m a ' . $role . ' in the ' . $company . ' company.' . $breakLine;
      break;
    };
  };

  // Number of times the code is executed
  echo 'Run ' . $cnt . 'nth time' . $breakLine;

  // Echo role list
  echo 'Roles before ' . $year . ': ' . rtrim($roleList, $separator) . $breakLine;

  ### Array with (key => value)
  $members = array('Viet' => 'hevtiq@gmail.com', 'Nhan' => 'nhan2012@gamil.com', 'Win' => 'win2020@gmail.com');

  // Loop through key, value
  foreach($members as $member => $email){
    echo $member . '\'s email: ' . $email . $breakLine;
  };

?>