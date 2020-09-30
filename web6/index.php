<!-- PHP -->


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP | Ajax</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

  <script>
    /**
     * Method to request data from ./suggest.php
     * 
     * @param { String } str - inputted string
     */
    function showSuggestion(str){
      // console.log(str);
      // Check to see if what typed in here
      if(str.length == 0){
        // Empty result when nothing inputted
        document.getElementById('output').innerHTML = '';
      } else {
        // Send a request to a server with ajax when inputted

        // Create an object instance form XMLHttpRequest
        var xmlhttp = new XMLHttpRequest();

        // Method to check ready state to put into the elemet
        xmlhttp.onreadystatechange = function(){
          // if ready state and status is 200
          if(this.readyState == 4 && this.status == 200 ){
            document.getElementById('output').innerHTML = this.responseText;
          };
        };

        /**
         * Method to make a request to query data
         * 
         * @param String "GET" - Method to query
         * @param String URL - URL with directory & param
         * @param Bool Asyn - Asyn or Syn
         */
        xmlhttp.open("GET", "./suggest.php?q=" + str, true);

        // Send a request
        xmlhttp.send();
      };
    };
  </script>

</head>

<body>
  <div class="container">
    <h1>Search Users: </h1>

    <!--
      Form to input text to search
      onkeyup: Every time we type will call showSuggestion()
      showSuggestion(): method to request data
      this.value: data inputed in the tag <input>
     -->
    <form action="">Search User
      <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>

    <!-- Place to output results searched -->
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
  </div>

</body>

</html>