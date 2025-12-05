<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RigetZooAdventures</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body class="page">
    <main>
        <section>
            <div class="main">
                <div class="signup-container">
                    <h1>Create an account</h1>
                    <form action="/accounts/signup.php" method="post" class="signup-form" novalidate>
                        <label for="fullname">Full name</label>
                        <input type="text" id="fullname" name="fullname" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required minlength="8">

                        <label for="confirm-password">Confirm password</label>
                        <input type="password" id="confirm-password" name="confirm_password" required minlength="8">

                        <button type="submit" class="btn">Sign Up</button>
                    </form>
                    <p class="muted">Already have an account? <a href="login.php">Log in</a></p>
                </div>
            </div>
        </section>

        <header>
            <a href="index.php"><img class="logo" src="../assets/images/preset/Logo.png" alt="Site Logo"></a>
            <nav class="tabs">
                <a href="../plan-your-visit/index.php">Plan Your Visit</a>
                <a href="../membership/index.php">Membership</a>
                <a href="../education/index.php">Education</a>
                <a href="../booking/index.php">Booking</a>
            </nav>
            <div class="signuplogin">
                <div><a href="signup.php">Sign Up</a></div>
                <div><a href="login.php">Log In</a></div>
            </div>
        </header>


    <section>
        
    </section>
        
        <footer>
            <div class="footer-container">
                <div>
                    <h2>Contact Us</h2>
                    <a href="policies/index.php">Cookie Policy</a>
                    <br><a href="../policies/index.php/#privacy">Privacy Policy</a>
                    <br><a href="../policies/index.php/#equality">Equality and Diversity Policy</a>
                    <br><a href="../policies/#terms-conditions">Terms & Conditions</a>
                    <br><a href="../policies/#modern-slavery">Modern Slavery Statement</a>
                </div>
                <div><img src="../assets/images/preset/Logo.png"></div>
                <div>
                    <h2>Contact Us</h2>
                    <a href="www.tiktok.com/"><img src="../assets/images/preset/footer/tiktok.png"></a>
                    <a href="../policies/index.php"><img src="../assets/images/preset/footer/insta.png"></a>
                    <a href="../policies/index.php"><img src="../assets/images/preset/footer/x.png"></a>                    
                </div>
            </div>
        </footer>
    </main>


</body>
</html>
