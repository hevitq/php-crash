<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- PHP -->
  <?php
    # FUNCTION - Block of code that can be repeatly called

    /*
      - Camel Case - myFunction() => Recommended for Function
      - Lower Case - my_function()
      - Pascal Case - MyFunction() => Recommended for Class
    */

    /* Common global variable */
    $brTag = '<br>';
    $websiteName = 'vnPace';

    /**
     * Function to welcome in Homepage
     */
    function welcomePage(){
      // Refer to global variable
      global $brTag, $websiteName;
      echo 'Welcome to ' . $websiteName . ' blog.' . $brTag;
    };

    // Invoke welcomePage
    welcomePage();

    /**
     * Function to show welcome user when login
     * 
     * @param { String } $name - Username. Set default 'Guest'
     */
    function sayHello($name = 'Guest'){
      // Refer to global variable
      global $brTag;
      echo 'Welcome back ' . $name . '.' . $brTag;
    };

    // Invoke sayHello with argument
    sayHello('Viet');

    // Invoke sayHello without argument
    sayHello();


    /**
     * Function to add numbers
     * 
     * @param { String } $num1 - The first number
     * @param { Number } $num2 - The secondary number
     * @return { Number }
     */
    function addNumbers($num1 = 7, $num2 = 9){
      return $num1 + $num2;
    };

    echo "addNumbers(20, 7): " . addNumbers(20, 7) . $brTag;
    echo "addNumbers('1a1', 7): " . addNumbers('1a1', 7) . $brTag;
    echo "addNumbers(20, '1a1'): " . addNumbers(20, '1a1') . $brTag;
    echo "addNumbers('2a', '1a7'): " . addNumbers('2a', '1a7') . $brTag;
    echo "addNumbers(): " . addNumbers() . $brTag;

    ### By reference
    $incNum = 5;

    /**
     * Function to add number with return
     * 
     * @param { Number } $num
     */
    function addNumWithReturn($num = 0){
      return $num += 10;
    };

    echo 'Result: ' . addNumWithReturn($incNum) . $brTag;
    echo "Reference not changed: $incNum" . $brTag;;

    /**
     * Function to add number without return
     * 
     * @param { Number } $num
     */
    function addNumWithoutReturn(&$num = 0){
      $num += 10;
    };

    // Invoke addNumWithoutReturn
    addNumWithoutReturn($incNum);

    echo "Reference is changed: $incNum" . $brTag;;
  ?>

  <!-- HTML -->
</body>
</html>

