
<?php
require_once 'includes/db.php';

$page_title = 'Add Destination';
$current_page = 'manage-destinations.php';

$errors = [];

$name = '';
$county = '';
$category = '';
$description = '';
$image_url = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $county = trim($_POST['county'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $image_url = trim($_POST['image_url'] ?? '');

    if ($name === '') {
        $errors[] = 'Destination name is required.';
    }

    if ($county === '') {
        $errors[] = 'County is required.';
    }

    if ($category === '') {
        $errors[] = 'Category is required.';
    }

    if ($description === '') {
        $errors[] = 'Description is required.';
    }

    if ($image_url === '') {
        $errors[] = 'Image URL is required.';
    }

    if (count($errors) === 0) {

        $stmt = mysqli_prepare(
            $conn,
            "INSERT INTO destinations
            (name, county, category, description, image_url)
            VALUES (?, ?, ?, ?, ?)"
        );

        mysqli_stmt_bind_param(
            $stmt,
            'sssss',
            $name,
            $county,
            $category,
            $description,
            $image_url
        );

        mysqli_stmt_execute($stmt);

        header('Location: manage-destinations.php?added=1');
        exit;
    }
}

include 'includes/header.php';
?>

<section class="section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">ADMINISTRATION</p>
            <h2>Add a Destination</h2>
        </div>
        <p>Enter the details of a new Kenyan destination.</p>
    </div>

    <?php foreach ($errors as $error): ?>
        <p class="form-success">
            <?php echo htmlspecialchars($error); ?>
        </p>
    <?php endforeach; ?>

    <form action="add-destination.php" method="POST">

        <label for="name">Destination Name</label>
        <input type="text" id="name" name="name"
               value="<?php echo htmlspecialchars($name); ?>" required>

        <label for="county">County</label>
        <input type="text" id="county" name="county"
               value="<?php echo htmlspecialchars($county); ?>" required>

        <label for="category">Category</label>
        <input type="text" id="category" name="category"
               value="<?php echo htmlspecialchars($category); ?>"
               placeholder="Wildlife, Beach, Adventure..." required>

        <label for="description">Description</label>
        <textarea id="description" name="description" required><?php
            echo htmlspecialchars($description);
        ?></textarea>

        <label for="image_url">Image URL</label>
        <input type="url" id="image_url" name="image_url"
               value="<?php echo htmlspecialchars($image_url); ?>" required>

        <button class="button button-primary" type="submit">
            Save Destination
        </button>

    </form>

    <p>
        <a class="text-link" href="manage-destinations.php">
            Back to Manage Destinations
        </a>
    </p>

</section>

<?php include 'includes/footer.php'; ?>
