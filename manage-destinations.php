
<?php
require_once 'includes/db.php';

$page_title = 'Manage Destinations';
$current_page = 'manage-destinations.php';

$sql = "SELECT * FROM destinations ORDER BY destination_id ASC";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

include 'includes/header.php';
?>

<section class="section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">ADMINISTRATION</p>
            <h2>Manage Destinations</h2>
            <?php if (isset($_GET['added'])): ?>
    <p class="form-success">Destination added successfully!</p>
<?php endif; ?>

<?php if (isset($_GET['updated'])): ?>
    <p class="form-success">Destination updated successfully!</p>
<?php endif; ?>

<?php if (isset($_GET['deleted'])): ?>
    <p class="form-success">Destination deleted successfully!</p>
<?php endif; ?>
        </div>
        <p>Add, view, edit and remove destinations.</p>
    </div>

    <h3>Current Destinations</h3>
    <p>
    <a class="button button-primary" href="add-destination.php">
        + Add Destination
    </a>
</p>

    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>County</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['destination_id']; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['county']); ?></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td>
    <a href="edit-destination.php?id=<?php echo $row['destination_id']; ?>">
        Edit
    </a>

    <form action="delete-destination.php" method="POST"
          style="display:inline;"
          onsubmit="return confirm('Are you sure you want to delete this destination?');">

        <input type="hidden" name="destination_id"
               value="<?php echo $row['destination_id']; ?>">

        <button type="submit">Delete</button>
    </form>
</td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
