<?php
include "./assets/php/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate input
    $errors = array();

    if (empty($fullName)) {
        $errors[] = "Full name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6 || strlen($password) > 15 || $password == "password") {
        $errors[] = "Password must be between 6 and 15 characters and cannot be 'password'.";
    }

    if (empty($errors)) {
        // Create a prepared statement
        $stmt = $conn->prepare("INSERT INTO admin (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullName, $email, $password); // Store password as plaintext

        // Execute the statement
        if ($stmt->execute()) {
            // Set up session with user's name
            session_start();
            $_SESSION['fullname'] = $fullName;

            // Redirect to dashboard upon successful registration
            header("Location: dashboard.php");
            exit(); // Ensure that subsequent code is not executed after redirection
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Output errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/signup.css">
    <title>Sign Up</title>
</head>

<body>


    <main class="container">
        <div class="form-container">
            <div class="header">
                <i class="ri-user-smile-fill"></i>
                <h2>AdminHub</h2>
            </div>
            <form id="signupForm" method="post">
                <div class="element">
                    <label for="fullName">Full Name</label>
                    <input type="text" name="fullName" id="fullName" placeholder="Enter your name">
                    <br>
                    <span style="color: rgb(241, 61, 61);" id="error-name" class="error-name"></span>
                </div>
                <div class="element">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email address">
                    <br>
                    <span style="color: rgb(241, 61, 61);" id="emailError" class="error-email"></span>
                </div>
                <div class="element">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <br>
                    <span style="color: rgb(241, 61, 61);" id="passwordError" class=""></span>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <small>Already have an account? <a href="login.php">Login</a></small>
            </form>


        </div>
    </main>

    <script>
        const name = document.getElementById("fullName");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const form = document.getElementById("signupForm");
        const errorName = document.getElementById("error-name");
        const emailError = document.getElementById("emailError");
        const passwordError = document.getElementById("passwordError");

        form.addEventListener('submit', (e) => {
            var emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (name.value === '') {
                e.preventDefault();
                errorName.innerHTML = "le nom est obligatoire";
            }
            else {
                errorName.innerHTML = "";
            }
            if (!email.value.match(emailCheck)) {
                e.preventDefault();
                emailError.innerHTML = "l'address mail est obligatoire";
            }
            else {
                emailError.innerHTML = "";
            }
            if (password.value === "") {
                e.preventDefault();
                passwordError.innerHTML = "le mot de passe est obligatoire";
            }
            else {
                passwordError.innerHTML = "";
            }

            if (password.value.length <= 5) {
                e.preventDefault();
                passwordError.innerHTML = "le mot de pass doit avoir plus de 6 characters";
            }
            if (password.value.length >= 15) {
                e.preventDefault();
                passwordError.innerHTML = "le mot de pass doit pas depasser 15 characters";
            }
            if (password.value == "password") {
                e.preventDefault();
                passwordError.innerHTML = "le mot de passe ne peut etre password";
            }


        })


    </script>

</body>

</html>