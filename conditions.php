<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Conditionals and Comparison</title>
</head>
<body>
  <?php
    # CONDITIONALS & COMPARISON

    /*
      ==
      ===
      <
      >
      <=
      >=
      !=
      !==
    */

    ## SWITCH CASE
    // Days array
    $days = [
      0 => 'SUN',
      1 => 'MON',
      2 => 'TUE',
      3 => 'WED',
      4 => 'THU',
      5 => 'FIR',
      6 => 'SAT'
    ];

    // Lucky number
    $luckyNumber = 5;

    // Random a number in days
    $day = rand(0, 6);

    // Determine status with $day
    switch($day){
      // Cant get reward in SAT or SUN day
      case 0:
      case 1:
        echo "$day: Sorry<br>";
        break;
      
      // Sure got reward in lucky day
      case $luckyNumber:
        echo "$day: Lucky<br>";
        break;
      
      // Otherwise can play to win
      default:
        echo "$day: Good luck<br>";
        break;
    };


    ## IF
    // Flag to determine can login or not
    $isAuth = true;

    $couponList = ['X12G1', 'X12G2', 'X12G5', 'X12G9'];
    $newCoupon = $couponList[array_rand($couponList, 1)];
    $luckyCoupon = 'X12G5';
    echo "newCoupon: $newCoupon<br>";
    echo "luckyCoupon: $luckyCoupon<br>";

    /**
     * Function to check valid coupon
     * 
     * @param String $coupon
     */
    function checkCoupon($coupon){
      global $luckyCoupon;
      if($coupon === $luckyCoupon){
        return true;
      };
        return false;
    };

    /**
     * Function to reject login
     */
    function rejectLogin(){
      echo "Access denied<br>";
    };

    // Grab the last number in the coupon
    $lastCouponNumber = $newCoupon[strlen($newCoupon) - 1];
    $lastLuckyNumber = $luckyCoupon[strlen($luckyCoupon) - 1];

    /**
     * Determine user can login
     * 
     * NESTING IF
     * LOGICAL OPERATIONS
     * and &&
     * or  ||
     * xor
     */
    if($isAuth){
      if(($lastCouponNumber !== $lastLuckyNumber) && $lastCouponNumber >= 8){
        echo "Sorry. Coupon has expired<br>";
      } else {
        if(!checkCoupon($newCoupon)){
          echo "Coupon not match. Do you want get new coupon?<br>";
        } else {
          echo "Your coupon is match<br>";
        };
      };
    } else {
      rejectLogin();
    };
  ?>
</body>
</html>