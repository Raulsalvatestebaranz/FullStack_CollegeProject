<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Edit Product - WebTech CRUD</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='assets/css/style.css' rel='stylesheet'>
</head>

<body class="d-flex flex-column min-vh-100">

<?php include __DIR__ . '/../includes/nav.php'; ?>
<?php include __DIR__ . '/../config/connect_db.php'; ?>

<main class="flex-grow-1">
  <div class="container mt-5">
    <h2 class="mb-4">Edit Product</h2>

    <?php
      // GET ID SAFELY
      if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
          echo "<div class='alert alert-danger'>Invalid product ID.</div>";
          exit();
      }

      $id = (int) $_GET['id'];

      // FETCH PRODUCT
      $sql = "SELECT * FROM products WHERE product_id = $id LIMIT 1";
      $result = mysqli_query($link, $sql);

      if (!$result || mysqli_num_rows($result) == 0) {
          echo "<div class='alert alert-danger'>Product not found.</div>";
          exit();
      }

      $product = mysqli_fetch_assoc($result);

      // HANDLE FORM SUBMISSION
      if ($_SERVER["REQUEST_METHOD"] === "POST") {

          $errors = array();

          // VALIDATE NAME
          if (empty($_POST['product_name'])) {
              $errors[] = "Please enter a product name.";
          } else {
              $name = mysqli_real_escape_string($link, trim($_POST['product_name']));
          }

          // VALIDATE DESC
          if (empty($_POST['product_desc'])) {
              $errors[] = "Please enter a product description.";
          } else {
              $desc = mysqli_real_escape_string($link, trim($_POST['product_desc']));
          }

          // VALIDATE PRICE
          if (empty($_POST['product_price'])) {
              $errors[] = "Please enter a product price.";
          } else {
              $price = mysqli_real_escape_string($link, trim($_POST['product_price']));
          }

          // VALIDATE IMAGE (optional)
          if (!empty($_POST['product_image'])) {
              $image = mysqli_real_escape_string($link, trim($_POST['product_image']));
          } else {
              $image = NULL;
          }

          // IF NO ERRORS — UPDATE DB
          if (empty($errors)) {

              $update_sql = "
                UPDATE products 
                SET 
                  product_name='$name',
                  product_desc='$desc',
                  product_price='$price',
                  product_image='$image'
                WHERE product_id = $id
              ";

              if (mysqli_query($link, $update_sql)) {
                  echo "<div class='alert alert-success'>Product updated successfully!</div>";
                  echo "<meta http-equiv='refresh' content='1; URL=read.php'>";
              } else {
                  echo "<div class='alert alert-danger'>Database error: " . mysqli_error($link) . "</div>";
              }

          } else {
              echo "<div class='alert alert-danger'><strong>Errors:</strong><br>";
              foreach ($errors as $msg) echo "- $msg<br>";
              echo "</div>";
          }
      }
    ?>

    <form method="POST">

      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="product_name" class="form-control" 
               value="<?= htmlspecialchars($product['product_name']); ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Description</label>
        <textarea name="product_desc" class="form-control" rows="4" required><?= htmlspecialchars($product['product_desc']); ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Price (€)</label>
        <input type="number" step="0.01" name="product_price" class="form-control" 
               value="<?= htmlspecialchars($product['product_price']); ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Image URL</label>
        <input type="text" name="product_image" class="form-control" 
               value="<?= htmlspecialchars($product['product_image']); ?>">
      </div>

      <button type="submit" class="btn btn-primary">Save Changes</button>
      <a href="read.php" class="btn btn-secondary">Cancel</a>

    </form>
  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
