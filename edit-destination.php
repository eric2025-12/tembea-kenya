
<?php
require_once 'includes/db.php';

$page_title = 'Edit Destination';
$current_page = 'manage-destinations.php';

$errors = [];

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('Invalid destination ID.');
}

$stmt = mysqli_prepare(
    $conn,
    "SELECT * FROM destinations WHERE destination_id = ?"
);

mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$destination = mysqli_fetch_assoc($result);

if (!$destination) {
    die('Destination not found.');
}

$name = $destination['name'];
$county = $destination['county'];
$category = $destination['category'];
$description = $destination['description'];
$image_url = $destination['image_url'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $county = trim($_POST['county'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $image_url = trim($_POST['image_url'] ?? '');

    if ($name === '') $errors[] = 'Destination name is required.';
    if ($county === '') $errors[] = 'County is required.';
    if ($category === '') $errors[] = 'Category is required.';
    if ($description === '') $errors[] = 'Description is required.';
    if (!filter_var($image_url, FILTER_VALIDATE_URL)) {
        $errors[] = 'Enter a valid image URL.';
    }

    if (count($errors) === 0) {

        $stmt = mysqli_prepare(
            $conn,
            "UPDATE destinations
             SET name = ?, county = ?, category = ?,
                 description = ?, image_url = ?
             WHERE destination_id = ?"
        );

        mysqli_stmt_bind_param(
            $stmt,
            'sssssi',
            $name,
            $county,
            $category,
            $description,
            $image_url,
            $id
        );

        mysqli_stmt_execute($stmt);

        header('Location: manage-destinations.php?updated=1');
        exit;
    }
}

include 'includes/header.php';
?>

<section class="section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">ADMINISTRATION</p>
            <h2>Edit Destination</h2>
        </div>
        <p>Update the destination details below.</p>
    </div>

    <?php foreach ($errors as $error): ?>
        <p class="form-success">
            <?php echo htmlspecialchars($error); ?>
        </p>
    <?php endforeach; ?>

    <form action="edit-destination.php?id=<?php echo $id; ?>" method="POST">

        <label for="name">Destination Name</label>
        <input type="text" id="name" name="name"
               value="<?php echo htmlspecialchars($name); ?>" required>

        <label for="county">County</label>
        <input type="text" id="county" name="county"
               value="<?php echo htmlspecialchars($county); ?>" required>

        <label for="category">Category</label>
        <input type="text" id="category" name="category"
               value="<?php echo htmlspecialchars($category); ?>" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" required><?php
            echo htmlspecialchars($description);
        ?></textarea>

        <label for="image_url">Image URL</label>
        <input type="url" id="image_url" name="image_url"
               value="<?php echo htmlspecialchars($image_url); ?>" required>

        <button class="button button-primary" type="submit">
            Update Destination
        </button>

    </form>

    <p>
        <a class="text-link" href="manage-destinations.php">
            Back to Manage Destinations
        </a>
    </p>

</section>

<?php include 'includes/footer.php'; ?>
