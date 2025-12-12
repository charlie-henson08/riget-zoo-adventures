            <?php
            if (session_status() === PHP_SESSION_NONE) session_start();
            ?>
            <header>
                <div class="header-left"></div>
                <a href="../index.php"><img class="logo" src="../assets/images/Logo.png" alt="Site Logo"></a>
                <nav class="tabs" id="nav-menu">
                    <a href="../plan-your-visit/index.php">Plan Your Visit</a>
                    <a href="../membership/index.php">Membership</a>
                    <a href="../education/index.php">Education</a>
                    <a href="../booking/index.php">Booking</a>
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="../loyalty/index.php">Loyalty</a>
                    <?php endif; ?>
                </nav>
                <?php if (!isset($_SESSION['user'])): ?>
                <div class="signuplogin">
                    <div><a href="../accounts/signup.php">Sign Up</a></div>
                    <div><a href="../accounts/login.php">Log In</a></div>
                </div>
                <?php else: ?>
                <form action="../accounts/processes/logout.php" method="post" style="margin:0;">
                    <button type="submit" style="background:#414A37;color:#F3EBE2;border:none;border-radius:10px;padding:0.75rem 1.5rem;cursor:pointer;font-family:'denk one',sans-serif;font-size:16px;">Log Out</button>
                </form>
                <?php endif; ?>
                <div class="header-left"></div>
            </header>