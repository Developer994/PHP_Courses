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


    // Loops

    // for loop

    $ninjas = ['Rex', 'Haui', 'Yoshi'];

    for($i = 0; $i < count($ninjas); $i++){
        echo $ninjas[$i] . '<br />'; // You have to add a . for concatenating the <br/>.
    }

    // foreach loop
    // The following foreach loop performs the same action as the above for loop, giving you the same result.

    foreach($ninjas as $ninja) {
        echo $ninja . '<br/>';
    }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    foreach($products as $product){
        echo $product['name'] . ' - ' . $product['price'];
        echo '<br/>';
    }

    $i = 0;

    // While loop

    while($i < count($products)){
        echo $products[$i]['name'];
        echo '<br/>';
        $i++;
    }


?>


<!-- foreach loop example inside html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorials</title>
</head>
<body>

<h1>Products</h1>
<ul>
<?php foreach($products as $product){?> <!-- Here, we start a tag for the foreach loop.-->

    <h3><?php echo $product['name']; ?></h3>
    <p>$ <?php echo $product['price']; ?> </p>

<?php } ?> <!-- Here, we close the tag for the foreach loop.-->
</ul>

</body>
</html>