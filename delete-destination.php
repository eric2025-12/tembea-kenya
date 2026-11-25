
<?php
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = filter_input(INPUT_POST, 'destination_id', FILTER_VALIDATE_INT);

    if ($id) {

        $stmt = mysqli_prepare(
            $conn,
            "DELETE FROM destinations WHERE destination_id = ?"
        );

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
    }
}

header('Location: manage-destinations.php?deleted=1');
exit;
