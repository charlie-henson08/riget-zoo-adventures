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
        <section class="auth-section">
            <div class="auth-container">
                <div class="auth-card">
                    <a href="../index.php"><img class="logo-small" src="../assets/images/preset/Logo.png" alt="Site Logo"></a>
                    <h1>Log in to your account</h1>

                    <form method="post" action="login.php" class="auth-form">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="you@example.com" required>

                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="Enter your password" required>

                        <div class="auth-actions">
                            <div class="remember">
                                <input id="remember" name="remember" type="checkbox">
                                <label for="remember">Remember me</label>
                            </div>
                            <a class="forgot" href="#">Forgot?</a>
                        </div>

                        <button type="submit" class="btn-primary">Log In</button>
                    </form>

                    <p class="signup-cta">Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </section>

        <header>
            <a href="../index.php"><img class="logo" src="../assets/images/preset/Logo.png" alt="Site Logo"></a>
            <nav class="tabs">
                <a href="../plan-your-visit/index.php">Plan Your Visit</a>
                <a href="../membership/index.php">Membership</a>
                <a href="../eduation/index.php">Education</a>
                <a href="../booking/index.php">Booking</a>
            </nav>
            <div class="signuplogin">
                <div><a href="../accounts/signup.php">Sign Up</a></div>
                <div><a href="">Log In</a></div>
            </div>
        </header>

        <footer>
            <div class="footer-container">
                <div>
                    <h2>Contact Us</h2>
                    <a href="../policies/index.php">Cookie Policy</a>
                    <br><a href="../policies/index.php/#privacy">Privacy Policy</a>
                    <br><a href="../policies/index.php/#equality">Equality and Diversity Policy</a>
                    <br><a href="../policies/#terms-conditions">Terms & Conditions</a>
                    <br><a href="../policies/#modern-slavery">Modern Slavery Statement</a>
                </div>
                <div><img src="../assets/images/preset/Logo.png"></div>
                <div>
                    <h2>Contact Us</h2>
                    <a href="../policies/index.php"><img src="../assets/images/preset/footer/tiktok.png"></a>
                    <a href="../policies/index.php"><img src="../assets/images/preset/footer/insta.png"></a>
                    <a href="../policies/index.php"><img src="../assets/images/preset/footer/x.png"></a>                    
                </div>
            </div>
        </footer>
    </main>


</body>
</html>
