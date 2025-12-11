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
                    <h1>Sign Up!</h1>
                    <p>Create Your ForecastPro Account Now!</p>

                    <form action="proccesses/process-signup.php" method="post" class="signup-form" id="signupForm" novalidate>
                        <h3>Name</h3>
                        <input type="text" id="name" name="name" required>
                    
                        <h3>Email</h3> 
                        <input type="email" id="email" name="email" required>

                        <h3>Password</h3>
                        <input type="password" id="password" name="password" required>
                        <div class="password-strength">
                            <div class="strength-bar"></div>
                        </div>
                        <div id="passwordError" class="error-message">Password must be at least 8 characters</div>

                        <button type="submit">Log in</button>
                        <a href="signup.php"><p>Don't Have An Account? Sign Up</p></a>
                    </form>

                
                    <?php
                        $db = new PDO(dsn: 'sqlite:database.db');
                        $db->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

                        $sql = "CREATE TABLE IF NOT EXISTS users (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        name TEXT,
                        email TEXT UNIQUE,
                        password TEXT
                        )";
                        $db->exec(statement: $sql);
                    ?>

                </section>

            </main>

            <?php include '../assets/preset/footer.php'; ?>
        </div>
    </body>
</html>
