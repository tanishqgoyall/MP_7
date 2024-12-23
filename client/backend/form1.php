<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $Roll_Number = htmlspecialchars(trim($_POST['Roll_Number']));
    $Contact_Number = htmlspecialchars(trim($_POST['Contact_Number']));


    // Validate form data (e.g., ensure email is valid)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Process the data (e.g., save to a database, send an email, etc.)
    // For this example, we'll just display the data
    echo "<h1>Form Submission Successful</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Contact Number:</strong> $Contact_Number</p>";
    echo "<p><strong>Roll Number:</strong> $Roll_Number</p>";
} else {
    // If the form was not submitted via POST, redirect back to the form
    header("Location: test.html");
    exit;
}
?>
