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

// $products = [
//         ['name' => 'shiny star', 'price' => 20],
//         ['name' => 'green shell', 'price' => 10],
//         ['name' => 'red shell', 'price' => 15],
//         ['name' => 'gold coin', 'price' => 5],
//         ['name' => 'lightning bolt', 'price' => 40],
//         ['name' => 'banana skin', 'price' => 2]
//     ];

// foreach($products as $product){
//     if($product['name'] === 'lightning bolt'){
//     break;
//     }
//     if($product['price'] > 15){
//         continue;
//     }
//     echo $product['name'] . '</br>';
// }

// // Functions

//     function sayHello($name = 'Rick' , $time = 'morning'){
//         echo "good $time $name";
//     }

//     sayHello('yoshi', 'night');

//     function formatProduct($product){
//         // echo "{$product['name']} costs {$product['price']} to buy <br />";
//         return "{$product['name']} costs {$product['price']} to buy <br />";
//     }

//     $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
//     echo $formatted;


// // Function Scoping

// $name = 'mario';

// function sayHello(){
// // In order to have the above variable outputted using this function,
// // you must put global when calling the variable:
//     global $name;
//     // To override the $name, we can just rename the variable like so:
//     $name = 'yoshi';
//     echo "hello $name";
// }

// sayHello();
// // Changing the $name variable to 'yoshi' also changes the variable outside
// // of the function:
// echo $name;

// // Adding the And percent (&) to the function's parameter will change the variable $name to wario  
// // even outside the function:

// function sayBye(&$name){
//     $name = 'wario';
//     echo "Bye $name";
// }

// sayBye($name);
// echo $name;

// Include and Require 

// Check the include.php, include2.php and content.php files for 
// some examples of this session.

// Project & Footer
// Check the Project folder for the project.

 // Ternary operators

//  $score = 50;

//  // if($score > 40){
//  //     echo 'high score!';
//  // } else {
//  //     echo 'low score :(';
//  // }
 
//  echo $score > 40 ? 'high score!' : 'low score :(';

// // Superglobals

// // $_GET['name'], $_POST['name']

// // The following will show properties of the server based on the input put in (e.g. SERVER_NAME, REQUEST_METHOD)
// echo $_SERVER['SERVER_NAME'] . '<br/>';
// echo $_SERVER['REQUEST_METHOD'] . '<br/>';
// echo $_SERVER['PHP_SELF'] . '<br/>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';

// // Sessions

// // Added cookies to the code.
// if(isset($_POST['submit'])){

//     // The 86400 is the seconds before expiration.
//     setcookie('gender', $_POST['gender'], time() + 86400);

//     session_start();

//     $_SESSION['name'] = $_POST['name'];
//     echo $_SESSION['name'];

//     header('Location: index.php');
// }

// File system part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;
    // $file = 'readme.txt';

    // // If the file exists
    // if(file_exists($file)){

        // // Read file
        // echo readfile($file) . '<br/>';

        // // Copy file
        // //    The file to copy from($file), the new file to create(quotes.txt)
        // copy($file, 'quotes.txt');

        // // Absolute patg
        // echo realpath($file) . '<br/>';

        // // File size
        // echo filesize($file) . '<br/>';

        // // Rename file
        // rename($file, 'test.txt');



    // } else {

    //     echo 'file does not exist';

    // }

    // // Make dir
    // mkdir('quotes');

    $file = 'quotes.txt';
    
    // // The following code is used to select a file and take an action with it, for example:
    // // $handle = fopen(the variable that contains the file ($file in this case), the action to be taken('r' for read)) 
    // $handle = fopen($file, 'r');

    // // Read the opened file of the above:
    // // echo fread(the variable made to open a file, how many bytes that will be read)
    // echo fread($handle, filesize($file));

    // // To just read a certain amount of the characters, we do:
    // // echo fread(the variable used to open the file, how many characters that need to be read)
    // echo fread($handle, 40);

    // // Reading a single line:
    // echo fgets($handle);

    // // Reading a single character:
    // echo fgetc($handle);

    // // For reading and writing, we add a plus in front of the r in $handle:
    // $handle = fopen($file, 'r+');

    // fwrite($handle, "\nEverything popular is wrong");
    // echo fread($handle, filesize($file));

    // // // If you want to add a new line at the end of the text, do the following:
    // $handle = fopen($file, 'a+');
    // // fwrite($handle, "\nEverything popular is wrong");
    
    // // Closing a file:
    // fclose($handle);
    
    // // Deleting a file
    // unlink($file);
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