<!-- Storage user's array  for search box-->

<?php
  // People Aray @TODO - Get from DB
  $people[] = 'Steve';
  $people[] = 'John';
  $people[] = 'Kathy';
  $people[] = 'Evan';
  $people[] = 'Anthony';
  $people[] = 'Tom';
  $people[] = 'Hal';
  $people[] = 'Ernie';
  $people[] = 'Johanna';
  $people[] = 'Farrah';
  $people[] = 'Linda';
  $people[] = 'Shawn';
  $people[] = 'Olivia';
  $people[] = 'Derek';
  $people[] = 'Amanda';
  $people[] = 'Rachel';
  $people[] = 'Katie';
  $people[] = 'Jillian';
  $people[] = 'Jose';
  $people[] = 'Malcom';

  // Get/Catch query string
  $q = $_REQUEST['q'];

  // Initialize a variable, set to a blank string
  $suggestion = "";

  // Get suggestions
  if($q !== ""){
    // Make sure all lowsercase to easy compare
    $q = strtolower($q);

    // Get len
    $len = strlen($q);

    // Loop through people array
    foreach($people as $person){
      // Find the first occurrence match
      if(stristr($q, substr($person, 0, $len))){
        if($suggestion === ""){
          // 
          $suggestion = $person;
        } else {
          // Append $persion to $suggestion
          $suggestion .= ", $person";
        };
      };
    };
  };

  // Output result
  echo $suggestion === "" ? "No suggestion" : $suggestion . '<br>';
?>