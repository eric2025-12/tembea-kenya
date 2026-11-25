
<?php
$page_title = 'Kenya Travel Guide';
$current_page = 'travel-guide.php';

include 'includes/header.php';
?>

      <section class="hero">
        <img class="hero-image" src="https://images.unsplash.com/photo-1472396961693-142e6e269027?auto=format&fit=crop&w=1400&q=82" alt="Scenic view of Kenya" fetchpriority="high">
        <div class="hero-shade"></div>
        <div class="hero-content">
          <p class="eyebrow">PLAN WITH CONFIDENCE</p>
          <h1>A few helpful tips before you go.</h1>
          <p class="hero-copy">Good preparation can make a journey more comfortable. Use these simple pointers as a starting point, then check current official travel advice before travelling.</p>
          <a class="button button-primary" href="contact.php">Get in touch <span aria-hidden="true">→</span></a>
        </div>
        <span class="hero-caption">KENYA · AFRICA</span>
      </section>

      <section class="tip-box">
        <h2>Before you travel</h2>
        <p>Check current entry requirements, health guidance, weather conditions and park regulations through relevant official sources before making plans.</p>
      </section>

      <section class="section">
        <div class="section-heading">
          <div>
            <p class="eyebrow">THE TEMBEA COLLECTION</p>
            <h2>Travel basics</h2>
          </div>
          <p>A practical starting point for planning your visit.</p>
        </div>

        <div class="card-grid">
          <article class="card">
            <a class="card-image" href="contact.php" aria-label="Explore What to pack">
              <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=82" alt="What to pack landscape" loading="lazy">
            </a>
            <div class="card-body">
              <h3>What to pack</h3>
              <p>Pack comfortable clothing, suitable walking shoes, sun protection and any personal essentials.</p>
              <a class="text-link" href="contact.php">Explore more <span aria-hidden="true">→</span></a>
            </div>
          </article>

          <article class="card">
            <a class="card-image" href="destinations.php" aria-label="Explore When to visit">
              <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1400&q=82" alt="When to visit landscape" loading="lazy">
            </a>
            <div class="card-body">
              <h3>When to visit</h3>
              <p>Weather varies by region and season. Check conditions for your chosen destination and dates.</p>
              <a class="text-link" href="destinations.php">Explore more <span aria-hidden="true">→</span></a>
            </div>
          </article>

          <article class="card">
            <a class="card-image" href="about.php" aria-label="Explore Travel responsibly">
              <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=1400&q=82" alt="Travel responsibly landscape" loading="lazy">
            </a>
            <div class="card-body">
              <h3>Travel responsibly</h3>
              <p>Follow local guidance, respect communities and keep a safe distance from wildlife.</p>
              <a class="text-link" href="about.php">Explore more <span aria-hidden="true">→</span></a>
            </div>
          </article>
        </div>
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
