<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Dates and Timestamps</title>
</head>
<body>
  <?php
    # DATES & TIMESTAMPS

    // Set Time Zone
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // Hour, Min, Second
    echo 'date(\'h\'): ' . date('h') . '<br>';
    echo 'date(\'i\'): ' . date('i') . '<br>';
    echo 'date(\'s\'): ' . date('s') . '<br>';
    echo 'date(\'a\'): ' . date('a') . '<br>';
    echo 'date(\'H:i:s A\'): ' . date('H:i:s A') . '<br>';

    // Day
    echo 'date(\'d\'): ' . date('d') . '<br>';

    // Day of the weekend
    echo 'date(\'D\'): ' . date('D') . '<br>';
    echo 'date(\'l\'): ' . date('l') . '<br>';
    echo 'date(\'L\'): ' . date('L') . '<br>';

    // Month
    echo 'date(\'m\'): ' . date('m') . '<br>';
    echo 'date(\'M\'): ' . date('M') . '<br>';

    // Year
    echo 'date(\'y\'): ' . date('y') . '<br>';
    echo 'date(\'Y\'): ' . date('Y') . '<br>';

    // Date
    echo 'date(\'Y/m/d\'): ' . date('Y/m/d') . '<br>';
    echo 'date(\'Y-m-d\'): ' . date('Y-m-d') . '<br>';

    /**
     * Unix Timestamp
     * mktime(hour, minute, second, month, day, year)
     */
    $timestamp = mktime(20, 22, 45, 9, 19, 2020);
    echo '$timestamp: ' . $timestamp . '<br>';
    echo date('m/d/Y h:i:s A', $timestamp) . '<br>';

    // Convert string to time
    $timestamp2 = strtotime('8:22PM September 19 2020');
    echo date('m/d/Y h:i:s A', $timestamp2) . '<br>';

    $timestamp3 = strtotime('tomorrow');
    echo date('m/d/Y h:i:s A', $timestamp3) . '<br>';

    $timestamp4 = strtotime('next Sunday');
    echo date('m/d/Y h:i:s A', $timestamp4) . '<br>';

    $timestamp5 = strtotime('+2 Months');
    echo date('m/d/Y h:i:s A', $timestamp5) . '<br>';

  ?>
</body>
</html>