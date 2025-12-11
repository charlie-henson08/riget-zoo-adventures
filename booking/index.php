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

            <main>
                <section>
                    <h1>Book Your Tickets</h1>
                    <p>Reserve your tickets for an unforgettable experience at Riget Zoo Adventures!</p>
                </section>

                <section class="booking-form">
                    <h2>Booking Details</h2>
                    <form>
                        <div class="form-group">
                            <label for="date">Select Date:</label>
                            <input type="date" id="date" name="date" required>
                        </div>

                        <div class="form-group">
                            <label for="visitors">Number of Visitors:</label>
                            <input type="number" id="visitors" name="visitors" min="1" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <button type="submit" class="bookNow">Reserve Now</button>
                    </form>
                </section>
            </main>

            <?php include '../assets/preset/footer.php'; ?>
        </div>
    </body>
</html>
