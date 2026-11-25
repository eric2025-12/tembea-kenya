
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Discover destinations and travel inspiration across Kenya with Tembea Kenya.">

  <title><?php echo $page_title; ?> | Tembea Kenya</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="site-shell">

    <header class="site-header">
      <a class="brand" href="index.php">
        <span class="brand-mark">T</span>
        <span>TEMBEA <b>KENYA</b>
          <small>DISCOVER · EXPERIENCE · EXPLORE</small>
        </span>
      </a>

      <nav aria-label="Main navigation">
        <ul class="nav-list">
          <li><a href="index.php" <?php if ($current_page == 'index.php') echo 'aria-current="page"'; ?>>Home</a></li>
          <li><a href="destinations.php" <?php if ($current_page == 'destinations.php') echo 'aria-current="page"'; ?>>Destinations</a></li>
          <li><a href="experiences.php" <?php if ($current_page == 'experiences.php') echo 'aria-current="page"'; ?>>Experiences</a></li>
          <li><a href="packages.php" <?php if ($current_page == 'packages.php') echo 'aria-current="page"'; ?>>Packages</a></li>
          <li><a href="travel-guide.php" <?php if ($current_page == 'travel-guide.php') echo 'aria-current="page"'; ?>>Travel Guide</a></li>
          <li><a href="about.php" <?php if ($current_page == 'about.php') echo 'aria-current="page"'; ?>>About</a></li>
          <li><a href="contact.php" <?php if ($current_page == 'contact.php') echo 'aria-current="page"'; ?>>Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
