<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>View Products - WebTech CRUD</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='assets/css/style.css' rel='stylesheet'>
</head>

<body class="d-flex flex-column min-vh-100">

<?php include __DIR__ . '/../includes/nav.php'; ?>
<?php include __DIR__ . '/../config/connect_db.php'; ?>

<main class="flex-grow-1">
  <div class="container mt-5">
    <h2 class="mb-4">Product List</h2>

    <a href="create.php" class="btn btn-primary mb-3">Add New Product</a>

    <?php
      // QUERY PRODUCTS
      $sql = "SELECT * FROM products ORDER BY product_id DESC";
      $result = mysqli_query($link, $sql);
    ?>

    <table class="table table-hover align-middle shadow-sm">
      <thead class="table-dark">
        <tr>
          <th style="width: 60px;">ID</th>
          <th style="width: 120px;">Image</th>
          <th>Name</th>
          <th>Description</th>
          <th style="width: 120px;">Price (€)</th>
          <th style="width: 140px;">Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>

            <tr>
              <td class="text-center fw-bold"><?= $row['product_id']; ?></td>

              <td class="text-center">
                <?php if (!empty($row['product_image'])): ?>
                  <img src="<?= $row['product_image']; ?>"
                       width="80" height="80"
                       style="object-fit: cover; border-radius:6px;">
                <?php else: ?>
                  <img src="assets/img/no-image.png"
                       width="80" height="80"
                       style="object-fit: cover; opacity:0.6; border-radius:6px;">
                <?php endif; ?>
              </td>

              <td><?= htmlspecialchars($row['product_name']); ?></td>
              <td><?= htmlspecialchars($row['product_desc']); ?></td>
              <td class="fw-bold"><?= number_format($row['product_price'], 2); ?></td>

              <td>
                <a href="update.php?id=<?= $row['product_id']; ?>" 
                   class="btn btn-warning btn-sm me-1">Edit</a>

                <a href="delete.php?id=<?= $row['product_id']; ?>" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure you want to delete this product?');">
                   Delete
                </a>
              </td>
            </tr>

          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center text-muted py-4">
              No products found.
            </td>
          </tr>
        <?php endif; ?>
      </tbody>

    </table>

  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
