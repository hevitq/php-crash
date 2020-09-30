<?php
  /**
   * substr()
   * 
   * @param { String } - string
   * @param { Int } - position start to cut
   * @param { Int } - length char will be cut. Optional. Default to end. 
   * @return { String } - portion of a string
   */

   $output = substr('Hello', 1);  // ello
   echo $output . '<br>';

   $output = substr('Hello', 1, 3);  // ell
   echo $output . '<br>';



  /**
   * strlen()
   * 
   * @param { String } - string
   * @return { Int } - lengh of a string (include the space)
   */

  $output = strlen('Hello World');  // 11
  echo $output . '<br>';



  /**
   * strpos()
   * 
   * @param { String } - string
   * @return { Int } - position of the FIRST occurence of a sub string
   */

  $output = strpos('Hello World', 'o');  // 4
  echo $output . '<br>';



  /**
   * strrpos()
   * 
   * @param { String } - string
   * @return { Int } - position of the LAST occurence of a sub string
   */

  $output = strrpos('Hello World', 'o');  // 7
  echo $output . '<br>';

  /**
   * trim()
   * 
   * @param { String } - string
   * @return { String } - strips whitespace
   */

  $text = 'Hello World    ';  // 15
  // var_dump($text);
  echo strlen($text) . '<br>';

  $trimmed = trim($text);  // 11
  // var_dump($trimmed);
  echo strlen($trimmed) . '<br>';



  /**
   * strtoupper()
   * 
   * @param { String } - string
   * @return { String } - make everything uppercase
   */

  $output = strtoupper('Hello World');  // HELLO WORLD
  echo $output . '<br>';



  /**
   * strtolower()
   * 
   * @param { String } - string
   * @return { String } - make everything lowercase
   */

  $output = strtolower('Hello World');  // hello world
  echo $output . '<br>';


  /**
   * ucwords()
   * 
   * @param { String } - string
   * @return { String } - Capitalize every word
   */

  $output = ucwords('hello world');  // Hello World
  echo $output . '<br>';


  /**
   * str_replace()
   * 
   * @param { Mixed } $search - mixed (string, number...)
   * @param { Mixed } $replace - mixed (string, number...)
   * @param { Mixed } $subject - mixed (string, number...)
   * @return { String } - replace all occurences of a search string with a replacement
   */

  $number = 12345;
  // var_dump($number);
  $output = str_replace(4, 8, $number);
  echo $output . '<br>';
  // var_dump($output);


  /**
   * is_string()
   * 
   * @param { Mixed } $var - mixed (string, number...)
   * @return { Boolean } - Check if string
   */

  $val = '22';
  $output = is_string($val);
  echo $output . '<br>';

  $values = array(
    true,  // 1
    false,  //
    null,
    'abc',
    33,
    '33',
    22.4,
    '22.4',
    '',
    ' ',
    0,
    '0'
  );

  foreach($values as $value){
    if(is_string($value)){
      echo "{$value} is a string. //--------------------------";
      echo var_dump($value);
      echo '<br>';
    } else {
      echo "{$value} is NOT a string. //--------------------------";
      echo var_dump($value);
      echo '<br>';
    };
  };


  /**
   * gzcompress()
   * 
   * @param { String } $data
   * @return { String } - compress a string
   */

  $data = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium laborum adipisci nihil sit blanditiis, earum eligendi a enim laudantium deleniti maiores debitis sint, nobis velit repudiandae, consequuntur tempora aperiam et expedita suscipit quam. Vel cupiditate similique tenetur labore consectetur at dolor perspiciatis nostrum quas. Aut dolorem ullam consequatur veniam commodi.";

  $compressed = gzcompress($data);
  echo $compressed . '<br>' . '<br>' . '<br>';

  $original = gzuncompress($compressed);
  echo $original . '<br>';
?>