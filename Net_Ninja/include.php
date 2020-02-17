<?php
// // Include and require.

// // Include basically imports code from the file that 
// // is exporting the code.

// // Require

// include('include2.php');
// require('include2.php')

// include('include3.php');

// // // The above include file should give you some sort of 
// // // error since the file does not exist.
// // // However, the echo for this program will still be carried
// // // with the execution

// require('include3.php');

// // However, with require, the echo won't be carried on with
// // the execution.

// Include and require don't require parenthesis to work fine:

include 'include2.php';
require 'include2.php';

echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php include('content.php'); ?>

</body>
</html>