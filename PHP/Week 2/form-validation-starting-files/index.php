<?php
    // get the data from the form
if(isset($_POST['email'])){
    //var_dump($_POST);
    $email = $_POST['email'];
    if($email===""){
        header("Location: index.php?emailError=Please enter email");
    }
    $password = $_POST['password'];
    if($password===""){
        header("Location: index.php?emailError=Please enter Password");
    }
    $phone=$_POST['phone'];
}
    // get the rest of the data for the form

    // for the heard_from radio buttons,
    // display a value of 'Unknown' if the user doesn't select a radio button

    // for the wants_updates check box,
    // display a value of 'Yes' or 'No'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Account Sign Up</h1>
    <form action="" method="post">

    <fieldset>
    <legend>Account Information</legend>
        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox"/>
        <?php 
        if(isset($_GET['emailError'])){
            echo $_GET['emailError'];
        }
        ?>
        <br />

        <label>Password:</label>
        <input type="password" name="password" value="" class="textbox"/>
        <br />

        <label>Phone Number:</label>
        <input type="text" name="phone" value="" class="textbox"/>
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine" />
        Search engine<br />
        <input type="radio" name="heard_from" value="Friend" />
        Word of mouth<br />
        <input type=radio name="heard_from" value="Other" />
        Other<br />

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates"/>YES, I'd like to receive
        information about new products and special offers.<br />

        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>

    <input type="submit" value="Submit" />

    </form>
    <br />
    </div>
</body>
</html>