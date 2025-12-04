<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Add Product - WebTech CRUD</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='assets/css/style.css' rel='stylesheet'>

  <!-- Bootstrap JS + Toast helper loaded EARLY so PHP can call showToast() later -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function showToast(message, type = "success") {
        const toastEl   = document.getElementById('liveToast');
        const toastBody = document.getElementById('toastMessage');

        // set colour (success / danger / etc)
        toastEl.className = "toast fade align-items-center text-bg-" + type + " border-0";
        toastBody.textContent = message;

        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
  </script>
</head>

<body class="d-flex flex-column min-vh-100">

<!-- Toast Container -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
  <div id="liveToast" 
       class="toast fade align-items-center text-bg-success border-0" 
       role="alert" 
       data-bs-autohide="false">
    <div class="d-flex">
      <div class="toast-body" id="toastMessage"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/nav.php'; ?>
<?php include __DIR__ . '/../config/connect_db.php'; ?>

<main class="flex-grow-1">
  <div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>

    <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST") {

          $errors = array();

          if (empty($_POST['product_name'])) {
              $errors[] = 'Please enter a product name.';
          } else {
              $name = mysqli_real_escape_string($link, trim($_POST['product_name']));
          }

          if (empty($_POST['product_desc'])) {
              $errors[] = 'Please enter a product description.';
          } else {
              $desc = mysqli_real_escape_string($link, trim($_POST['product_desc']));
          }

          if (empty($_POST['product_price'])) {
              $errors[] = 'Please enter a product price.';
          } else {
              $price = mysqli_real_escape_string($link, trim($_POST['product_price']));
          }

          if (empty($_POST['product_image'])) {
              $image = NULL;
          } else {
              $image = mysqli_real_escape_string($link, trim($_POST['product_image']));
          }

          if (empty($errors)) {

              $sql = "
                INSERT INTO products (product_name, product_desc, product_price, product_image)
                VALUES ('$name', '$desc', '$price', '$image')
              ";

              $result = mysqli_query($link, $sql);

              if ($result) {
                  // ✅ Now showToast() is already defined, so this works
                  echo "<script>showToast('Product added successfully!');</script>";
                  echo "<script>setTimeout(() => { window.location = 'read.php'; }, 1200);</script>";
              } else {
                  echo "<div class='alert alert-danger'>Database error: " . mysqli_error($link) . "</div>";
              }

          } else {
              echo "<div class='alert alert-danger'><strong>Errors found:</strong><br>";
              foreach ($errors as $msg) echo "- $msg <br>";
              echo "</div>";
          }
      }
    ?>

    <form method="POST">

      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="product_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Description</label>
        <textarea name="product_desc" class="form-control" rows="4" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Price (€)</label>
        <input type="number" step="0.01" name="product_price" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Product Image URL</label>
        <input type="text" name="product_image" class="form-control" placeholder="https://example.com/image.jpg">
      </div>

      <button type="submit" class="btn btn-primary">Add Product</button>
      <a href="read.php" class="btn btn-secondary">Cancel</a>

    </form>
  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
