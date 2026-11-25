


<?php
$page_title = 'Contact Us';
$current_page = 'contact.php';

$confirmation = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    $confirmation = "Thank you, " . htmlspecialchars($name) . ". Your message has been received.";
}

include 'includes/header.php';
?>

<section class="hero">
    <img class="hero-image" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1400&q=82" alt="Scenic view of Kenya" fetchpriority="high">
    <div class="hero-shade"></div>
    <div class="hero-content">
        <p class="eyebrow">LET'S TALK TRAVEL</p>
        <h1>Have a question? Get in touch.</h1>
        <p class="hero-copy">Send us a message about a destination, travel idea or question. This demonstration form does not submit to a live booking service.</p>
        <a class="button button-primary" href="destinations.php">Explore destinations <span aria-hidden="true">→</span></a>
    </div>
    <span class="hero-caption">KENYA · AFRICA</span>
</section>

<section class="section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">THE TEMBEA COLLECTION</p>
            <h2>We would love to hear from you</h2>
        </div>
        <p>Use the sample enquiry form below.</p>
    </div>

    <div class="card-grid">
        <article class="card">
            <a class="card-image" href="contact.php" aria-label="Explore General enquiries">
                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=82" alt="General enquiries landscape" loading="lazy">
            </a>
            <div class="card-body">
                <h3>General enquiries</h3>
                <p>Ask a question about the information on this website.</p>
                <a class="text-link" href="contact.php">Explore more <span aria-hidden="true">→</span></a>
            </div>
        </article>
    </div>
</section>

<section class="contact-panel">
    <div>
        <p class="eyebrow">SEND AN ENQUIRY</p>
        <h2>Tell us what you have in mind.</h2>
        <p>This sample form demonstrates a contact interface. It is not connected to a live booking service.</p>
    </div>

    <?php if ($confirmation != ''): ?>
        <p class="form-success">
            <?php echo $confirmation; ?>
        </p>
    <?php endif; ?>

    <form class="contact-form" action="contact.php" method="POST">

        <label for="name">Your name</label>
        <input id="name" name="name" type="text" placeholder="Enter your name" required>

        <label for="email">Email address</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" required>

        <label for="topic">What is your enquiry about?</label>
        <select id="topic" name="topic">
            <option>Destinations</option>
            <option>Travel packages</option>
            <option>General question</option>
        </select>

        <label for="message">Your message</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

        <button class="button button-primary" type="submit">Send enquiry</button>

    </form>
</section>

<section class="closing-banner">
    <div>
        <p class="eyebrow">YOUR KENYAN JOURNEY</p>
        <h2>There is more to discover.</h2>
        <p>Explore at your own pace and let Kenya surprise you.</p>
    </div>
    <a class="button button-light" href="destinations.php">Discover Kenya <span aria-hidden="true">→</span></a>
</section>

<?php include 'includes/footer.php'; ?>
