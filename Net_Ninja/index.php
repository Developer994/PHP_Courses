<?php

    // We've created a database using the workbench that you can use by clicking on
    // admin when you're on the xampp control panel and then you can create some data,
    // which is already created and is used by this index.php file.
    // We can use the index.php file to connect to the database and do all sorts of things
    // such as fetching the data and outputting the data in a listed list through the HTML
    // portion.

    // connect to database
    $conn = mysqli_connect('localhost', 'lolter', 'Test1234', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // Write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query and get results
    $result = mysqli_query($conn, $sql);

    // Fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free results from memory
    mysqli_free_result  ($result);
    
    // close connection
    mysqli_close($conn);

    // print_r($pizzas);

    // The explode function takes in two arguments (The first one would be some character to look at and seperate it,
    // and the second one would look at the string that needs to be targeted.)
    print_r(explode(',', $pizzas[0]['ingredients']));

?>

<!DOCTYPE html>
<html>

    <?php include('Project/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
        
        <?php foreach($pizzas as $pizza): ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                        <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                            <li><?php echo htmlspecialchars($ing) ?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        
        <?php if(count($pizzas)>=3): ?>
            <p> There are 3 or more pizzas</p>
        <?php else: ?>
            <p>There are less than 3 pizzas</p>
        <?php endif; ?>


        </div>
    </div>

    <?php include('Project/footer.php'); ?>
    
</html>