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

    // multi-dimensional arrays

    // $blogs = [
    //     ['mario party', 'mario', 'lorem', 30],
    //     ['mario kart cheats', 'toad', 'lorem', 25],
    //     ['zelda hidden chests', 'link', 'lorem', 50]
    // ];

    // To output nested values of a set of arrays amongst arrays, we do the following:
    // print_r($blogs[0][0])

    // $blogs = [
    //     ['title'=>'mario party','author'=>'mario', 'content'=>'lorem', 'likes'=>30],
    //     ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem','likes'=>25],
    //     ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
    // ];

    // To target an index within a category(such as author, as shown below), we do the following:
    // echo $blogs[2]['author'];

    // echo count($blogs);


    // // We add more data to an array by doing the following:
    // $blogs[] = ['title' => 'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
    // print_r($blogs);

    // // We can remove data from an array by using the pop function:
    // $popped = array_pop($blogs);
    // print_r($popped);


    // // Loops

    // // for loop

    // $ninjas = ['Rex', 'Haui', 'Yoshi'];

    // for($i = 0; $i < count($ninjas); $i++){
    //     echo $ninjas[$i] . '<br />'; // You have to add a . for concatenating the <br/>.
    // }

    // // foreach loop
    // // The following foreach loop performs the same action as the above for loop, giving you the same result.

    // foreach($ninjas as $ninja) {
    //     echo $ninja . '<br/>';
    // }

    // $products = [
    //     ['name' => 'shiny star', 'price' => 20],
    //     ['name' => 'green shell', 'price' => 10],
    //     ['name' => 'red shell', 'price' => 15],
    //     ['name' => 'gold coin', 'price' => 5],
    //     ['name' => 'lightning bolt', 'price' => 40],
    //     ['name' => 'banana skin', 'price' => 2]
    // ];

    // foreach($products as $product){
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br/>';
    // }

    // $i = 0;

    // // While loop

    // while($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br/>';
    //     $i++;
    // }

    // // Boolean in PHP

    // // Echoeing true on to the browser will give you a "1", because 1 is a truthy value.
    // echo true;

    // // Echoeing falseon to the browser will give you a "", because an empty string is falsey.
    // echo false;

    // // numbers
    // // Boolean can also be used for determining if one number is greater, less or equal to the other:
    // echo 5 < 10; // This would be true("1")
    // echo 5 > 10; // This would give you false("")

    // // Comparing strings:
    // // If the first letter of the first string comes before the first letter of the second string,
    // // then it will give you true if you say string one is less than string two:
    // echo 'george' < 'shaun';

    // // Case sensitivity:
    // // Uppercase letters are seen as less than a lowercase letter:
    // echo 'george' > 'George';

    // // To see if two words are equal or not, we use double equal signs(==):
    // echo 'mario' == 'mario';
    // echo 'mario' == 'Mario';

    // // Loose vs strict equal comparison:
    // echo 5 == '5'; // Two equal signs would be loose equal, which means 5 and '5' are loosely equal
    //                // but not strictly equal.

    // echo 5 === '5'; // This will check if both the digits are ints or not, as it wil check whether or not
    //                 // they're strictly equal.
    
    // Conditional Statements

    // $price = 60;

    // if ($price < 10){
    //     echo 'the condition is met';
    // } elseif ($price < 20){
    //     echo 'elseif condition met';
    // }
    //  else {
    //     echo 'the condition is not met';
    // }

// // Or (||) and And (&&) examples with foreach loops and if statements
// $products = [
//         ['name' => 'shiny star', 'price' => 20],
//         ['name' => 'green shell', 'price' => 10],
//         ['name' => 'red shell', 'price' => 15],
//         ['name' => 'gold coin', 'price' => 5],
//         ['name' => 'lightning bolt', 'price' => 40],
//         ['name' => 'banana skin', 'price' => 2]
//     ];

//     foreach($products as $product){
//             // And percent (&&)
//             // if($product['price'] < 15 && $product['price'] > 2){
//             //     echo $product['name'] . '<br/>';
//             // }
//             // Or (||)
//             if($product['price'] > 20 || $product['price'] < 10){
//                 echo $product['name'] . '<br/>';
//             }
//     }

$products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

foreach($products as $product){
    if($product['name'] === 'lightning bolt'){
    break;
    }
    if($product['price'] > 15){
        continue;
    }
    echo $product['name'] . '</br>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPTutorial</title>
</head>
<body>
    
</body>
</html>