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
                <section class="booking-form">
                    <h2>Booking Form</h2>
                    <form id="bookingForm">
                        <h3>Day of reservation</h3>
                        <input type="date" id="reservation_day" name="reservation_day" required>

                        <h3>Time of reservation</h3>
                        <input type="time" id="reservation_time" name="reservation_time" required>

                        <h3>Number of adult tickets</h3>
                        <input type="number" id="adult_tickets" name="adult_tickets" min="0" value="1" required>

                        <h3>Number of child tickets</h3>
                        <input type="number" id="child_tickets" name="child_tickets" min="0" value="0" required>

                        <h3>Number of elderly tickets (65+)</h3>
                        <input type="number" id="elderly_tickets" name="elderly_tickets" min="0" value="0" required>

                        <button type="submit">Reserve</button>
                    </form>
                    <div id="bookingMessage" role="status" aria-live="polite"></div>
                </section>
            </main>

            <?php include '../assets/preset/footer.php'; ?>
        </div>

        <script>
        (function(){
            const form = document.getElementById('bookingForm');
            const msg = document.getElementById('bookingMessage');

            form.addEventListener('submit', async function(e){
                e.preventDefault();
                msg.textContent = '';

                const data = {
                    reservation_day: form.reservation_day.value,
                    reservation_time: form.reservation_time.value,
                    adult_tickets: parseInt(form.adult_tickets.value, 10) || 0,
                    child_tickets: parseInt(form.child_tickets.value, 10) || 0,
                    elderly_tickets: parseInt(form.elderly_tickets.value, 10) || 0
                };

                try {
                    const res = await fetch('api.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data)
                    });
                    const json = await res.json();
                    if (res.ok && json.success) {
                        msg.textContent = 'Booking successful! Reference ID: ' + json.id;
                        form.reset();
                    } else {
                        msg.textContent = (json.errors ? json.errors.join('; ') : json.error) || 'Booking failed';
                    }
                } catch (err) {
                    msg.textContent = 'Network error: ' + err.message;
                }
            });
        })();
        </script>
    </body>
</html>
