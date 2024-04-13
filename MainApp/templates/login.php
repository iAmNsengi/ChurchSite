


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/signup.css">
    <title>Log In</title>
</head>

<body>
    <main class="container">
        <div class="form-container">
            <div class="header">
                <i class="ri-user-smile-fill"></i>
                <h2>AdminHub</h2>
            </div>
            <form action="login.php" method="POST" id="loginForm">
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

                <button type="submit" class="btn">Log In</button>
                <small>You have no Account ? <a href="signup.php">Create an Account</a></small>
            </form>
        </div>
    </main>

    <script>
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const form = document.getElementById("loginForm");

        const emailError = document.getElementById("emailError");
        const passwordError = document.getElementById("passwordError");

        form.addEventListener('submit', (e) => {
            var emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!email.value.match(emailCheck)) {
                e.preventDefault();
                emailError.innerHTML = "Email address is required";
            } else {
                emailError.innerHTML = "";
            }
            if (password.value == '') {
                e.preventDefault();
                passwordError.innerHTML = "Password is required";
            } else {
                passwordError.innerHTML = "";
            }

            if (password.value.length <= 5) {
                e.preventDefault();
                passwordError.innerHTML = "Password must have more than 6 characters";
            }
            if (password.value.length >= 15) {
                e.preventDefault();
                passwordError.innerHTML = "Password must not exceed 15 characters";
            }
            if (password.value == "password") {
                e.preventDefault();
                passwordError.innerHTML = "Password cannot be 'password'";
            }
        })
    </script>
</body>

</html>