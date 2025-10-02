<?php
    echo"Yo!<br>";
    echo "Im walking over here! <br>";

    //comment;

    /*this
    is a multi 
    line comment
    */

    // integers

    $age = 28;
    $users = 2;
    $quantity = 3;

    // floats

    $gpa = 2.5;
    $price = 19.99;
    $tax = 0.07;

    // strings

    $name = "Armani Tuileepa";
    $food = "Tacos";
    $email = "myemail@example.com";

    // boolean
    $isemployed = true;
    $online = false;
    
    echo "My name is $name.";
    echo "<br> I like $food.";
    echo "<br> My email is $email.";
    echo "<br> I am $age years old.";
    echo "<br> There are $users users online.";
    echo "<br> I want to order $quantity $food.";
    echo "<br> My GPA is $gpa.";
    echo "<br> The price of the $quantity $food is $$price.";
    echo "<br> The tax on the $quantity $food is $" . ($price * $tax) . ".";
    echo "<br> I am employed: $isemployed.";
    echo "<br> I am online: $online.";
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button class="clickme">Click Me!</button>
</body>
</html>

<!-- STYLES -->

<style>
    button.clickme {
        background-color: rgb(001, 500, 300);
        color: white;
        border-radius: 10px;
        border:none;
        height: 25px;
        cursor: pointer;
        
        
    }
</style>