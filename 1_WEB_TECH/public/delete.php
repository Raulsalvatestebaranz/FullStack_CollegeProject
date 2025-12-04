<?php

// SECURE DB CONNECTION
include __DIR__ . '/../config/connect_db.php';

// VALIDATE ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("<div class='alert alert-danger'>❌ Invalid product ID.</div>");
}

$id = (int) $_GET['id']; // safe conversion to integer

// DELETE QUERY
$sql = "DELETE FROM products WHERE product_id = $id LIMIT 1";
$result = mysqli_query($link, $sql);

if ($result) {
    // SUCCESS → REDIRECT
    header("Location: read.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>❌ Error deleting product: " . mysqli_error($link) . "</div>";
}
?>
