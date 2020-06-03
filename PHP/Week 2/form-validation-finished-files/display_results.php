<?php
    // get the data from the form
    if(isset($_POST['email'])) {
        //var_dump($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == ""){
            header("Location: index.php?emailError=Please enter email&passval=" . $password);
        }

        $password = $_POST['password'];
    } else {
        header("Location: index.php");
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
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br />

        <label>Phone Number:</label>
        <span></span><br />

        <label>Heard From:</label>
        <span></span><br />

        <label>Send Updates:</label>
        <span></span><br />

        <label>Contact Via:</label>
        <span></span><br /><br />

        <span>Comments:</span><br />
        <span></span><br />
        
        <p>&nbsp;</p>
    </div>
</body>
</html>