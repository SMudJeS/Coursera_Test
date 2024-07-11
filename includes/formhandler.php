<?php

//var_dump ($_SERVER["REQUEST_METHOD"]);
//if (isset($_POST["submit"]));

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $cartype = htmlspecialchars($_POST["cartype"]);
    //htmlentities();

    if (empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }

    if (empty($lastname)) {
        exit();
        header("Location: ../index.php");
    }

    echo "These are the data that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $cartype;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}