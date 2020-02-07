<?php

    $stringOne = 'my email is ';
    $stringTwo = 'ros_ni@outlook.com';

    // echo $stringOne.$stringTwo;

    $name = 'Mario';

    // echo 'Hey, my name is ' . $name;

    // echo 'Hey, my name is $name';

    // echo "the ninja screamed \"whaaa\"";
    // echo 'the ninja screamed "whaaa"';

    // The bottom code will output the first index letter in $name.
    // echo $name[0]

    // This stands for string length.
    // echo strlen($name)

    // To Uppercase & lowercase
    // echo strtoupper($name)
    // echo strtolower($name)

    // To replace a certain letter with another letter on selected string. So for the bottom, you are going to replace the M in Mario
    // echo str_replace('M', 'w', $name);

    // Basic operators -> Similar to javascript (*, /, +, -), except for power you use double astricks(**)
    
    $pi = 3.14;
    $radius = 25;

    // echo $pi * $radius**2;

    // The bottom will raise the radius by 1, but you cannot do put echo with $radius++ or else the default value will be outputted.
    // Instead, increment first and then echo the $radius.
    // $radius++;
    // echo $radius;

    // Shorthand operator.
    // $age = 20;

    // $age -= 10;
    // $age *= 2;

    // echo $age;

    // number functions (floor, ceil)
    // echo floor($pi);
    // echo ceil($pi);

    // Different ways of outputting arrays:
    // Indexed arrays
    $peopleOne = ['shaun', 'cystal', 'ryu'];

    $peopleTwo = array('ken', 'chen-li');

    // When you have to print an array with numbers, it will give an error because all echoed values need to be a string.
    $ages = [20, 30, 40, 50];

    // Overriding a value inside the array:
    $ages[1] = 25;
    
    // print_r($ages);

    // Adding more values to an array:

    $ages[] = 60; // First way 

    array_push($ages, 70); // Second way

    // print_r($ages);

    // To count how many variables are inside an array, we use echo count like so:
    // echo count($ages);

    // Merging two arrays:
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree)
    // Associative arrays
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorials</title>
</head>
<body>

</body>
</html>