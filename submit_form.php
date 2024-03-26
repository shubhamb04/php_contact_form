<?php

$name = $email = $message = "";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    // Check if all fields are filled
    if (!empty(htmlspecialchars($name)) && !empty(htmlspecialchars($email)) && !empty(htmlspecialchars($message))) {
        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Save form data to a file
            $data =$name . "|" . $email . "|" . $message . "\n";
            $file = fopen("contacts.txt", "a");
            fwrite($file, $data);
            fclose($file);
            
            echo "<p>Form successfully submitted, Thanks!</p>";
        } else {
            echo "<p>Invalid email format. Please enter a valid email address.</p>";
        }
    } else {
        echo "<p>All fields are required.</p>";
    }
}

