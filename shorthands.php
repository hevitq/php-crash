<!-- PHP -->
<?php
# SHORTHAND SYNTAX

/**
 * Function to add new break line
 * 
 * @param { Int } $numberOfBreak - number of break line
 */
function br($numberOfBreak)
{
  return str_repeat('<br>', $numberOfBreak);
};

## Normal syntax
$loggedIn = false;
$arr = [1, 2, 3, 4, 5];

if ($loggedIn) {
  echo 'You are logged in' . br(2);
} else {
  echo 'You are NOT logged in' . br(2);
};

## Shorthand syntax
echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

// Shorthand not easy to add a break line
echo br(2);

$isRegistered = ($loggedIn == true) ? false : true;
echo $isRegistered . br(2);

$age = 20;
$score = 5;

echo 'You score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horriable' : 'Average'));
echo br(2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Ternary & Shorthand Syntax</title>
</head>

<body>
  <!-- Embed php code inside of html -->

  <!-- Regular way to embed php code-->
  <div>
    <?php if ($loggedIn) { ?>
      <h1>Welcome User</h1>
    <?php } else { ?>
      <h1>Welcome Guest</h1>
    <?php } ?>
  </div>

  <!-- Bette way to embed php code-->
  <div>
    <?php if ($isRegistered) : ?>
      <h1>Welcome User</h1>
    <?php else : ?>
      <h1>Welcome Guest</h1>
    <?php endif; ?>
  </div>

  <div>
    <h3>FOREACH: </h3>
    <?php foreach ($arr as $val) : ?>
      <?php echo $val; ?>
    <?php endforeach; ?>
  </div>

  <!--
    x++ increments x after processing the current statement.
    ++x increments x before processing the current statement.
  -->
  <div>
    <h3>FOR: </h3>
    <?php for ($i = 0; $i < 10; $i++) : ?>
      <li><?php echo $i; ?></li>
    <?php endfor; ?>
  </div>
</body>

</html>