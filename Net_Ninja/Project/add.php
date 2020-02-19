<?php
    
    // Errors
    // Here we've tweaked the codes to show errors.

    // You will get the following error printed out on the text boxes:
    // <br /><b>Notice</b>:  Undefined variable: email in <b>C:\xampp\htdocs\PHP_Courses\Net_Ninja\Project\add.php</b> on line <b>57</b><br />
    // To fix the issue, we add the following:
    $title = $email = $ingredients = '';

    $errors = array('email' => '', 'title' =>'', 'ingredients' =>'');

    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);
    

    // Check if there is an email entered or if that field's empty
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
        }
    }
    
     // Check title field
     if(empty($_POST['title'])){
        $errors['title'] = 'A title is required <br/>';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

     // Check ingredients field
     if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'Atleast one ingredient is required <br/>';
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match ('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma seperated list';
        }
    }

    // This checks to see if there are errors or not. 
    // If there are errors, you will get the error below echoed.
    // If not, you will get an echo of the form being valid
    // and you will be directed back to the main index.php page.
    if(array_filter($errors)){
        echo 'errors in the form ';
    } else {
        echo 'form is valid';
        header('Location: index.php');
    }

} // end of POST Check


?>

<!DOCTYPE html>
<html>

    <?php include('header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a pizza</h4>
        <form action="add.php" class="white" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Pizza Title</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label>Ingredients (comma seperated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('footer.php'); ?>
    
</html>