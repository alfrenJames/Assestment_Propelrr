<?php
// Initialize variables
$name = $email = $mobile = $dob = $age = $gender = "";
$errors = [];

// Function to sanitize user input
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Validate full name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $errors["name"] = "Full Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z\s\-']+$/", $name)) {
            $errors["name"] = "Full Name should only contain letters, spaces, dashes, and apostrophes";
        }
    }

    // Validate email address
    if (empty($_POST["email"])) {
        $errors["email"] = "Email Address is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid Email Address format";
        }
    }

    // Validate mobile number
    if (empty($_POST["mobile"])) {
        $errors["mobile"] = "Mobile Number is required";
    } else {
        $mobile = sanitizeInput($_POST["mobile"]);
        if (!preg_match("/^(09|\+639)\d{9}$/", $mobile)) {
            $errors["mobile"] = "Invalid Mobile Number format. Must be a valid Philippines mobile number.";
        }
    }

    // Validate date of birth
    if (empty($_POST["dob"])) {
        $errors["dob"] = "Date of Birth is required";
    } else {
        $dob = sanitizeInput($_POST["dob"]);
        // You can add additional validation for the date format if needed
    }

    // Validate age
    if (empty($_POST["age"])) {
        $errors["age"] = "Age is required";
    } else {
        $age = sanitizeInput($_POST["age"]);
        if (!is_numeric($age)) {
            $errors["age"] = "Age should be a number";
        }
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        $errors["gender"] = "Gender is required";
    } else {
        $gender = sanitizeInput($_POST["gender"]);
        $allowedGenders = ["male", "female", "others"];
        if (!in_array($gender, $allowedGenders)) {
            $errors["gender"] = "Invalid Gender";
        }
    }

    // If there are no validation errors, you can proceed with further actions like storing data in a database
    if (empty($errors)) {
       require('addPeople.php');
    }
}
?>
