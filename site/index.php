<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width', initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Stress Test</title>
</head>
<body>

    <h1>My Site - Wildcard</h1>
        <?php
        /*
            echo "Hello World!";
        ?>
        <br>
        <br>
        <?php
            echo "In php, end all statements with a semicolon.";
        ?>
        <br>
        <p>
            This is a paragraph!
        </p>
        <br>
        <?php 
            echo "This is ALSO a paragraph!"; 
        ?>
        <br>
        <p>
            This paragraph contains <?php echo "both HTML and PHP"; ?> to say what it is saying!
        </p>
        <br>
        <br>
        <?php 
        Scalar types (contains one value)
        $string = "SMudJeS";
        $int = 1234567890;
        $float = 2.5678;
        $bool_01 = true;
        $bool_02 = false;

        // Array type
        $names = array("Mike", "John", "Sulli");

        /* Object type 
         $object = new Car();

            echo "Scalar type examples:";
        ?>
        <br>
        <?php
            echo "String: "; echo $string;
        ?>
        <br>
        <?php
            echo "Integer: "; echo $int;
        ?>
        <br>
        <?php
            echo "Float: "; echo $float;
        ?>
        <br>
        <?php
            echo "Boolean True: "; echo $bool_01;
        ?>
        <br>
        <?php
            echo "Boolean False: "; echo $bool_02;
        ?>
        <p>Hello! My name is <?php echo $string; ?> and I'm learning PHP!</p>
        <br>
        <?php
            echo "Array type example:";
        ?>
        <br>
        <?php
            echo $names;
        ?>
        <?php
            $_SERVER[""];
            $_GET[""];
            $_POST[""];
            $_REQUEST[""];
            $_FILES[""];
            $_COOKIE[""];
            $_SESSION[""];
            $_ENV[""];
        <?php
            echo $_GET["name"];
            echo "<br>";
            echo $_GET["eyecolor"];
        ?>
        <?php
            // echo $_REQUEST["name"];
            // echo "<br>";
            // echo $_FILES["name"];
            // echo $_COOKIE["name"];
            //$_SESSION["username"] = "EyemProblyHi";
            //echo $_SESSION["username"];
        
         In the below HTML form, "get" method populates the info in the URL, "post" does not
        
        <section class="wrapper-main">
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">First Name: </label>
            <input type="text" id="firstname" name="firstname" placeholder="First Name">
            <br>
            <label for="lastname">Last Name: </label>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name">
            <br>
            <label for="cartype">What type of car do you own?</label>
            <br>
            <select name="cartype" id="cartype">
                <option value="Ford">Ford</option>
                <option value="Chevy">Chevy</option>
                <option value="Toyota">Toyota</option>
            </select>
            <br>
            <br>
            <button type="submit" value="submit">Send Data</button>
        </form>
    </section>
        */
        ?>
    <?php
    
    // String operator
    /*
    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;
    echo $c;
    

    // Arithmetic operator - +,-,*,/,% (% is modulo, meaning the remainder when dividing)

    echo (1 + 2) * (4 - 2);
    
    
    // Assignment operator
    
    $a = 2;
    $a += 4;
    echo $a;
    

    // Comparison operator - >, <, !=, ==, ===, >=, <=, <>

    $a = 2;
    $b = 4;
    
    if ($a != $b) { //2 == means comparing 2 pieces of data, 3 === means comparing 2 pieces and types of data
        echo "This statement is false!";
    }
    

    // Logical operator - and (&&), or (||)

    $a = 4;
    $b = 8;
    $c = 2;
    $d = 6;

    if ($a != $b && $c != $d || $a != $c) {
        echo "This statement is false!";
    }
    

    // Incrementing/decrementing operators - ++$a for $a+1, --$a for $a-1, $a++ for echo $a and then add 1 

    $a = 1;
    echo $a--;
    echo "<br>";
    echo $a;
    */

    $bool = true;
    $a = 1;
    $b = 4;

    $result = match ($a) {
        1 => "Variable a is equal to one!",
        2 => "Variable a is equal to two!",
    };

    echo $result;

    /*
    switch ($a) {
        case 1:
            echo "The first case is correct!";
            break;
        case 3:
            echo "The second case is correct!";
            break;
        default:
            echo "None of the conditions are true!";    
    }
    echo "<br>";
    if ($a < $b && !$bool) {
        echo "Both conditions are true!";
    }
    else if ($a < $b || $bool) {
        echo "Only one condition is true!";
    }
    else {
        echo "None of the conditions are true!";
    }
    */


    ?>
</body>
</html>