
<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'tembea_kenya'
);

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

?>
