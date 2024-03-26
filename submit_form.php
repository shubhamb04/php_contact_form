<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (!empty(htmlspecialchars( $_POST['name'])) && !empty($_POST['email']) && !empty(htmlspecialchars($_POST['message']))) {
        // Validate email
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // Save form data to a file
            $data = $_POST['name'] . "|" . $_POST['email'] . "|" . $_POST['message'] . "\n";
            $file = fopen("contacts.txt", "a");
            fwrite($file, $data);
            fclose($file);
            // Display success message
            echo "<p>Form successfully submitted, Thanks!</p>";
        } else {
            // Email validation failed
            echo "<p>Invalid email format. Please enter a valid email address.</p>";
        }
    } else {
        // Required fields are missing
        echo "<p>All fields are required.</p>";
    }
}

