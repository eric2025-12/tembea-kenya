
<?php
$page_title = 'Explore Destinations';
$current_page = 'destinations.php';

// Connect to the database
require_once 'includes/db.php';

// Retrieve destinations from the database
$sql = "SELECT * FROM destinations ORDER BY destination_id ASC";
$result = mysqli_query($conn, $sql);

include 'includes/header.php';
?>

<section class="hero">
    <img class="hero-image" src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=1400&q=82" alt="Scenic view of Kenya" fetchpriority="high">
    <div class="hero-shade"></div>
    <div class="hero-content">
        <p class="eyebrow">FIND YOUR NEXT ESCAPE</p>
        <h1>A country of many worlds.</h1>
        <p class="hero-copy">Discover remarkable places across Kenya, from wildlife-rich reserves to beautiful coastal towns.</p>
        <a class="button button-primary" href="destination-details.php">View destination guide <span aria-hidden="true">→</span></a>
    </div>
    <span class="hero-caption">KENYA · AFRICA</span>
</section>

<section class="section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">THE TEMBEA COLLECTION</p>
            <h2>Explore our featured destinations</h2>
        </div>
        <p>A few ideas to get your journey started.</p>
    </div>

    <div class="card-grid">

        <?php if ($result && mysqli_num_rows($result) > 0): ?>

            <?php while ($destination = mysqli_fetch_assoc($result)): ?>

                <article class="card">

                    <a class="card-image" href="destination-details.php" aria-label="Explore <?php echo htmlspecialchars($destination['name']); ?>">

                        <img
                            src="<?php echo htmlspecialchars($destination['image_url']); ?>"
                            alt="<?php echo htmlspecialchars($destination['name']); ?>"
                            loading="lazy"
                        >

                    </a>

                    <div class="card-body">

                        <h3><?php echo htmlspecialchars($destination['name']); ?></h3>

                        <p><?php echo htmlspecialchars($destination['description']); ?></p>

                        <a class="text-link" href="destination-details.php">
                            Explore more <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>

            <?php endwhile; ?>

        <?php else: ?>

            <p>No destinations are currently available. Please check again later.</p>

        <?php endif; ?>

    </div>

</section>

<section class="closing-banner">
    <div>
        <p class="eyebrow">YOUR KENYAN JOURNEY</p>
        <h2>There is more to discover.</h2>
        <p>Explore at your own pace and let Kenya surprise you.</p>
    </div>
    <a class="button button-light" href="destinations.php">
        Discover Kenya <span aria-hidden="true">→</span>
    </a>
</section>

<?php include 'includes/footer.php'; ?>
