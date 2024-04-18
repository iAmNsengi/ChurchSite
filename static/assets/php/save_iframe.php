<?php
include "connect.php";
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve iframe code from the form
    $iframe_code = $_POST["iframe_code"];

    // Store the iframe code in the database
    $sql = "INSERT INTO iframes (iframe_code) VALUES ('$iframe_code')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to index page after successful submission
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>