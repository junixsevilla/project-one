<?php include('variables.php'); ?>

<html>
    <head>
        <title><?php echo($page_title); ?></title>
    </head>
</html>
    
<body>
    <center>
    
        <?php 
        echo "<h1>" . "Welcome to Project One" ."</h1>" . "<hr>" . "<br/>";
        echo "<h2>" . $page_title . "</h2>";
        echo "<h3>" . $page_subtitle ."</h3>";
        /*
        $value_zero = 30;
        $value_one = "Hello World!";
        $value_two = "I am llearning PHP";
        
        $value_three  = $value_one . "<br/>" . $value_two;
        echo "<h3>". $value_three . "<br/>" .$value_zero . " is my age." . "</h3>";
        */
        
        //$number_1 = 30;
        //$number_2 = 5;
        
        //echo $number_1 + $number_2;
        //echo $number_1 - $number_2;
        //echo $number_1 / $number_2;
        //echo $number_1 * $number_2;
        //echo $number_1 % $number_2;
        //echo ++$number_1;
        //echo --$number_1;
        
        //$my_var1 = "And then she said: \"You're Welcome\" ";
        //$my_var2 = 'And then she said: "You\'re Welcome" ';
        //echo $my_var1 . "<br/>";
        //echo $my_var2;
        
        
        /*  Math operations
        
        $a = 4;
        $c = 6;
        
        
        if ($a > $c) {
            echo $a . " is greater than " . $c;
            
        } elseif ($a == $c) {
            echo $a . " is equal to " . $c;
            
        } else {
            echo $a. " is less than " . $c;
        }
        
        */
        
        // Start of Array Examples
        // Numeric Array
        
        //$my_var = array("Red", "Green", "Blue", "Yellow");
        //echo "The color is: " . $my_var[1];
        
        // Associative Array
        /*
        $my_var['key0']="Red";
        $my_var['key1']="Green";
        $my_var['key2']="Blue";
        $my_var['key3']="Yellow";
        echo "The value is: " . $my_var['key2'];
        
        // Associative Array - User ages
        $age['James']=25; 
        $age['Jack']=20;
        $age['John']=15;
        $age['Jill']=10;
        
        echo "User age is: " . $age['Jill'];
        */
        
        // Loops
        
        /* while loop
        
        $a = 1;
        while ($a < 10) {
            echo $a . "<br />";
            $a++;
        }
        */
        
        // For Loop
        /*
        for ($a = 1; $a < 10; $a++) {
            echo $a;
            echo "<br/>";
        }
        */
        
        /*
        $colors = array("Red", "Green", "Blue", "Yellow", "Black", "Magenta");
        $arrlength = count($colors);
        echo "Total number of colors: " . $arrlength;
        echo "<br/>";
        
        for ($x = 0; $x < $arrlength; $x++) {
            echo $colors[$x];
            echo "<br/>";
        }
        */
        
        
        // FUNCTION
        /*
        function namer($name) {
            echo "Hello, my name is " . $name;
        }
        namer("Junix"); // call the function
        */
        
        /*
        $random_names = mt_rand(0,4);
        $names = array ("John", "Jake", "Jim", "Jill", "Joe");
        echo $names[$random_names];
        */
        
        // Date Function
        // echo date('l jS \of F,Y');
        
        // String manipulation
        // strtoupper
        // strtolower
        // ucwords
        // lcfirst
        
        /*
        $my_variable = "Junix is learning PHP.";
        //$old_word = "Junix";
        //$new_word = "Junico";
        //echo str_replace($old_word, $new_word, $my_variable);
        
        echo strlen($my_variable);
        */
        
        ?>
        
    
    </center>
</body>