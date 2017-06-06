<?php
// The code bellow demonstrates a simple back-end written in PHP
// Determine which field you want to check its existence
$isAvailable = true;

switch ($_POST['type']) {
    case 'email':
        $email = $_POST['email'];
        // Check the email existence ...
        $isAvailable = true; // or false
        break;

    case 'username':
    default:
        $username = $_POST['username'];
        // Check the username existence ...
        $isAvailable = false; // or false
        break;
}

// Finally, return a JSON
echo json_encode(array(
    'valid' => $isAvailable,
));