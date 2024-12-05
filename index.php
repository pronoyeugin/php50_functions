
    <h1>PHP Most Used Functions</h1>


    <h3>Core_Functions</h3>
    <!-- Echo -->
    <?php
        $data = "Hello World"; /*Outputs a string*/
        echo $data ."<br>";
        echo chunk_split ($data,5,"...");
    ?> 
    <br>
    <!-- Print -->
    <?php
        $data="Hello, world!";/*Outputs a string*/
        print $data;
    ?>
    <br>
     <!-- var dump -->
    <?php
        $data = "Hello, world!"; /*Dumps information about a variable*/
        echo $data ."<br>";
        var_dump($data);
    ?>
    <br>
    <!-- die -->
    <?php
        $site = "https://www.youtube.com/";/*Terminates the script*/
        fopen($site,"r")
        or die("Unable to connect to $site");
    ?>
    <br>
    <!-- exit -->
    <?php

        echo "Hello, world!";
        exit; // Script terminates here
        echo "This line will not be executed.";

        $site = "https://www.youtube.com/";
        $data = "Hello, world!"; /*Terminates the script*/
        echo $site;
        exit ($site); 
    ?>
    <br>
    <!-- isset -->
    <?php
        $data = "Hello, world!"; /*Checks if a variable is set*/

    ?>
    <br>
    <!-- empty -->
    <?php
        $data = "Hello, world!"; /*Checks if a variable is empty*/

    ?>
    <br>
    <!-- unset -->
    <?php
        $data = "Hello, world!"; /* Unsets a variable*/

    ?>
    <br>
    <!-- defined -->
    <?php
        $data = "Hello, world!"; /*Checks if a constant is defined*/

    ?>
    <br>
    <!-- explode -->
    <?php
        $data = "Hello, world!"; /*Prints human-readable information about a variable*/
        echo $data ."<br>";
        print_r(explode(" ", $data));
    ?>
    <br>

    <h3>String_Functions</h3>
    <!-- strlen -->
    <?php
        $data = "Hello World"; /*Gets string length*/
        echo $data ."<br>";
        echo strlen ($data);
    ?>
    <br>
    <!-- strpos -->
        <?php
        $data = "Hello World"; /*Finds the position of the first occurrence of a substring*/
        echo $data ."<br>";
        echo strpos($data, "Hello");
    ?>
    <br>
    <!-- strrpos -->
    <?php
        $data = "Hello World"; /*Finds the position of the first occurrence of a substring*/
        echo $data ."<br>";
        echo strrpos($data, "Hello");
    ?>
    <br>
    <!-- substr -->
    <?php
        $data = "Hello World"; /*Extracts a substring*/
        echo substr("Hello world",6);
        
    ?>
    <br>
    <!-- str_replace -->
    <?php
        $data = "Hello World"; /* Replaces all occurrences of a search string with a replacement string*/
        echo $data . "br>";
        echo str_repalce("World", "there", $data); 
    ?>
    <br>
    <!-- strtolower -->
    <?php
        $data = "Hello World"; /*Converts a string to lowercase*/
        echo $data . "br>";
        echo strtolower("Hello WORLD.");
        
    ?>
    <br>
    <!-- strtoupper -->
    <?php
        $data = "Hello World"; /* Converts a string to uppercase*/
        echo $data . "br>";
        echo strtoupper("Hello WORLD!");
        
    ?>
    <br>
    <!-- trim -->
    <?php
        $data = "Hello World"; /* Removes whitespace from both ends of a string*/
        echo $data . "br>";  
    ?>
    <br>
    <!--ltrim-->
    <?php
        $data = "Hello World"; /*Removes whitespace from the beginning of a string*/
        echo $data . "br>"; 
        echo trim($data,"Hed!"); 
    ?>
    <br>
    <!--rtrim-->
    <?php
        $data = "Hello World"; /*Removes whitespace from the end of a string*/
        echo $data . "br>";  
        echo rtrim($data,"World!");
    ?>
    <br>
    <!-- str_repeat -->
    <?php
        $data = "Hello, world!";
        echo $data ."<br>";
        echo str_repeat( $data, 5);
    ?>

    <h3>Array_Functions</h3>
    <br>
    <!-- count -->
    <?php
        $cars=array("Volvo","BMW","Toyota");  /*Counts all elements in an array*/
        echo count($cars);
    ?>
    <br>
    <!-- array_pop -->
    <?php
        $a=array("red","green","blue"); /*Pops the element off the end of an array*/
        array_pop($a);
        print_r($a);
    ?>
    <br>
    <!-- array_shift -->
    <?php
        $a=array("a"=>"red","b"=>"green","c"=>"blue"); /*Shifts an element off the beginning of an array*/
        echo array_shift($a)."<br>";
        print_r ($a);
    ?>
     <br>
    <!-- array_unshift -->
    <?php
        $a=array("a"=>"red","b"=>"green","c"=>"blue");/*Shifts one or more elements onto the beginning of an array*/
        echo array_shift($a);
        print_r ($a);
    ?>
    <br>
    <!-- array_merge -->
    <?php
        $data = "Hello, world!"; /*Merges two or more arrays*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- array_keys -->
    <?php
        $data = "Hello world!"; /*Returns an array containing all the keys of an array*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- array_values -->
    <?php
        $data = "Hello world!"; /*Shifts an element off the beginning of an array*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- in_array -->
    <?php
        $data = "Hello world!"; /*Checks if a value exists in an array*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- array_search -->
    <?php
        $data = "Hello world!"; /*Searches an array for a given value and returns its key*/
        echo $data ."<br>";
    ?>
    
    <h3>File System Functions</h3>
    <br>
    <!-- file_exists -->
    <?php
        $data = "Hello world!"; /*Checks if a file or directory exists.*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- is_file -->
    <?php
        $data = "Hello world!"; /*Checks if a filename is a regular file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- is_dir -->
    <?php
        $data = "Hello world!"; /*Checks if a filename is a directory.*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- file_get_contents-->
    <?php
        $data = "Hello world!"; /*Reads a file into a string*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- file_put_contents -->
    <?php
        $data = "Hello world!"; /* Writes a string to a file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- fopen -->
    <?php
        $data = "Hello world!"; /*Opens a file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- fclose-->
    <?php
        $data = "Hello world!"; /*Closes an open file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- fwrite -->
    <?php
        $data = "Hello world!"; /*Writes a string to an open file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- fread-->
    <?php
        $data = "Hello world!"; /*Reads a string from an open file*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- unlink -->
    <?php
        $data = "Hello world!"; /*Deletes a file*/
        echo $data ."<br>";
    ?>

    
    <h3>Date and Time Functions</h3>
    <br>
    <!-- time -->
    <?php
        $data = "Hello world!"; /*Returns the current time*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- date -->
    <?php
        $data = "Hello world!"; /*Formats a local date/time*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- strtotime -->
    <?php
        $data = "Hello world!"; /*Parses a time/date string*/
        echo $data ."<br>";
    ?>
    <br>
    <!-- mktime -->
    <?php
        $data = "Hello world!"; /*Makes a date/time*/
        echo $data ."<br>";
    ?>

    <h3>Other Common Functions</h3>
    <br>
    <!--htmlspecialchars -->
    <?php
        $data = "Hello world!"; /*Converts special characters to HTML entities*/
        echo $data ."<br>";
    ?>
    <br>
    <!--urlencode -->
    <?php
        $data = "Hello world!"; /*URL-encodes a string*/
        echo $data ."<br>";
    ?>
    <br>
    <!--urldecode -->
    <?php
        $data = "Hello world!"; /*URL-decodes a string*/
        echo $data ."<br>";
    ?>
    <br>
    <!--json_encode -->
    <?php
        $data = "Hello world!"; /*Encodes a value to JSON format*/
        echo $data ."<br>";
    ?>
    <br>
    <!--json_decode -->
    <?php
        $data = "Hello world!"; /*Decodes a JSON string*/
        echo $data ."<br>";
    ?>
    <br>
    <!--preg_match -->
    <?php
        $data = "Hello world!"; /*Performs a regular expression match*/
        echo $data ."<br>";
    ?>






