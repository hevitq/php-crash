<!-- PHP -->
<?php
  // Declare a file path
  /**
   * $path: path to link to a specify file.
   */
  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';

  // Return filename of path
  echo basename($path) . '<br>';

  // Return filename without ext
  echo basename($path, '.php') . '<br>';

  // Return the directory name from path
  echo dirname($path) . '<br>';

  // Check if file exists
  echo file_exists($file) . '<br>';

  // Get absolute path
  echo realpath($file) . '<br>';

  // Checks to see if file
  echo is_file($file) . '<br>';

  // Check if writable (readonly or not)
  echo is_writable($file) . '<br>';

  // Check if readable (readonly or not)
  echo is_readable($file) . '<br>';

  // Get file size
  echo filesize($file) . '<br>';

  // Create a directory
  // mkdir('testing');

  // Remove a directory if empty
  // rmdir('testing');

  // Copy file with same content
  echo copy('file1.txt', 'file2.txt') . '<br>';

  // Rename a file
  rename('file2.txt', 'myfile.txt');

  // Delete file
  unlink('myfile.txt');

  // Read entire file into a string
  echo file_get_contents($file) . '<br>';

  // Write a string to a file
  echo file_put_contents($file, 'Keep learning') . '<br>';

  // Add new content and keep old contents
  $current = file_get_contents($file);
  $current .= '<br>Good job!';
  file_put_contents($file, $current);

  // Open file for reading
  $handle = fopen($file, 'r');

  // Read all file
  $data = fread($handle, filesize($file));

  // Read only 8 character
  // $data = fread($handle, 8);

  // Echo out data read
  echo $data . '<br>';

  // Create a new file and open file for writing
  $newfile = 'file2.txt';
  $handle = fopen($newfile, 'w');

  // New content will be write
  $txt = "Join Doe\n";

  // Write new content to file
  fwrite($handle, $txt);

  // More new content
  $txt = "Steve Smith\n";
  fwrite($handle, $txt);

  // Close file
  fclose($handle);

  // Echo out file content
  echo file_get_contents($newfile) . '<br>';

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | File System Functions</title>
</head>
<body>
  
</body>
</html>