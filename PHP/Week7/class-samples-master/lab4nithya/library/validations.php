<?php
//declare and initialize local variables
$errors = "";
$email = "";
$password = "";
$phone = "";
$heard_from = "";
$wants_updates = "";
$contact_via= "";
$comments = "";

//form submitted get the values and assign to local varibles
if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $contact_via = isset($_POST['contact_via']) ? $_POST['contact_via'] : "";

    $heard_from = isset($_POST['heard_from']) ? $_POST['heard_from'] : "";
    $wants_updates = isset($_POST['wants_updates']) ? $_POST['wants_updates'] : "";
    $comments = $_POST['comments'];

    $errors = validateForm($email, $password, $phone, $contact_via, $heard_from, $wants_updates,$comments, $errors);

    if (empty($errors)) {
        $errors = "Your form has been submitted";

    }
}

//function to validate form fields
function validateForm($email, $password, $phone, $contact_via, $heard_from, $wants_updates, $comments, $errors)
{
    if (empty($email)) {
        $errors .= "Please enter email<br/>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= "Please enter valid email format<br/>";
        }
    }

    if (empty($password)) {
        $errors .= "Please enter password<br/>";
    } else {
        $pattern = "/^[a-zA-Z]*$/";
        if (checkPattern($pattern, $password)) {
            $errors .= "Please enter valid password, alphabet only<br/>";
        }
    }

    if (empty($phone)) {
        $errors .= "Please enter phone<br/>";
    } else {
        $pattern = "/^[1-9]\d{2}-\d{3}-\d{4}/";
        if (checkPattern($pattern, $phone)) {
            $errors .= "Please enter valid phone number<br/>";
        }
    }

    if (empty($contact_via ) ) {
        $errors .= "Please select a contact via the list<br/>";
    }


    if (empty($heard_from)) {
        $errors .= "Please select heard from<br/>";
    } else {
        if (!($heard_from == "Search Engine" || $heard_from == "Friend" || $heard_from == "Other")) {
            $errors .= "Please select heard from from the options<br/>";
        }
    }

    if (empty($wants_updates) ) {
        $errors .= "Please check wants update<br/>";
    }

    if (empty($comments)) {
        $errors .= "Please enter a comments<br/>";
    }

    return $errors;
}

//function to validate with regular expression
function checkPattern($pattern, $value){
    return !preg_match($pattern, $value);
}
