<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <title>Plan Your Visit- Riget Zoo Adventures</title>
    </head>

    <body>
        <div class="page">
            <?php include '../assets/preset/header.php'; ?>

           <main>
                <section>
                    <div class="heroImage">
                        <img src="../assets/images/plan-your-visit/HeroImage.png" alt="Lion">
                        <div class="heroSlogan">
                            <h2>Plan your legendary visit to Riget Zoo Adventures</h2>
                            <h1>Plan Your Visit</h1>
                            <a href="booking/index.php"><div class="bookNow">Plan Now</div></a>
                        </div>
                    </div>
                </section>

                <section class="main">
                    <h1>Site Map</h1>
                    <img src="../assets/images/plan-your-visit/siteMap.png" alt="Site Map" width="800px" height="500px">

                    <h1>Frequently Asked Questions</h1>
                    <div class="faq-container">
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What time does Riget Zoo Adventure Open?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Riget Zoo Adventures opens at 9:00 AM every day of the week. Sundays are closed</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Do I need to book tickets in advance?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>You don't need to book tickets in advance, however tickets are cheaper.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Is parking available on-site?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, Parking is avaible on site, however you need to pay for parking.</p>
                            </div>
                    </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Are food and drinks allowed inside the zoo?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, however you can only use our restaurants and shops for food and drinks, outside drinks and food are not allowed.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <?php include '../assets/preset/footer.php'; ?>
        </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var faqItems = document.querySelectorAll('.faq-item');
                faqItems.forEach(function(item) {
                    var question = item.querySelector('.faq-question');
                    var answer = item.querySelector('.faq-answer');
                    var toggle = item.querySelector('.faq-toggle');
                    if (question && answer && toggle) {
                        question.addEventListener('click', function() {
                            var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
                            if (isOpen) {
                                answer.style.maxHeight = '0px';
                                toggle.textContent = '+';
                            } else {
                                answer.style.maxHeight = answer.scrollHeight + 'px';
                                toggle.textContent = '-';
                            }
                        });
                    }
                });
            });
            </script>
    </body>
</html>
