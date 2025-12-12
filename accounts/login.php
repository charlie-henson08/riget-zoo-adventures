<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <title>Book Tickets - Riget Zoo Adventures</title>
    </head>

    <body>
        <div class="page">
            <?php include '../assets/preset/header.php'; ?>

            <main class="signup-main">
                <section class="signup-container">
                    <h1>Log in!</h1>
                    <p>Login to use our account only features!</p>

                    <form action="processes/process-login.php" method="post" class="signup-form" id="loginForm" novalidate>
                        <h3>Email</h3>
                        <input type="email" id="email" name="email" required>
                        <div id="emailError" class="error-message">Please enter a valid email address</div>

                        <h3>Password</h3>
                        <input type="password" id="password" name="password" required>
                        <div id="passwordError" class="error-message">Password is required</div>
                        <a href="https://google.com"><p>Forgotten your password?</p></a>

                        <button type="submit">Log in</button>
                        <a href="signup.php"><p>Don't Have An Account? Sign Up</p></a>
                    </form>
                </section>

            </main>

            <?php include '../assets/preset/footer.php'; ?>
        </div>
    </body>
</html>
