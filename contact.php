<?php
include("includes/header.php");
?>
<section class="contact">
    <div class="container">
        <div class="text">
            <p class="page-title">We’d love to hear from you!</p>
            <h1>Contact Us</h1>
        </div>
    </div>
</section>
<section class="form">
    <h3 class="main-title">Get in <span>Touch</span></h3>
    <div class="container form-container">
        <!-- Left Form -->
        <div class="form-left">
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" rows="6" placeholder="Write your message"></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>

        <!-- Right Contact Info -->
        <div class="form-right">

            <div class="contact-info">

                <div class="info-box">
                    <h4>Phones</h4>
                    <p>+20 123 456 789</p>
                    <p>+20 987 654 321</p>
                </div>
                <div class="info-box">
                    <h4>Email</h4>
                    <p>info@veracare.online</p>
                    <p>support@veracare.online</p>
                </div>
                <div class="info-box">
                    <h4>Address</h4>
                    <p>123 VeraCare St., Cairo, Egypt</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include("includes/footer.php");
?>