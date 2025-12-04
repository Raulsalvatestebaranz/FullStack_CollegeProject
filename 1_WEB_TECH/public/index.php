<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebTech Book Library</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/codespace/FullStack_CollegeProject/1_WEB_TECH/includes/nav.php'; ?>

<main class="flex-grow-1">

<section class="position-relative overflow-hidden py-5">


  <!-- Soft radial background -->
  <div class="position-absolute top-0 start-50 translate-middle-x w-100" style="z-index:-1;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1365 850" class="w-100">
      <title>Decorative Background</title>
      <defs>
        <radialGradient id="heroGradient" cx="50%" cy="50%" r="70%">
          <stop offset="0%" stop-color="#000" stop-opacity="0.1"/>
          <stop offset="100%" stop-color="transparent"/>
        </radialGradient>
      </defs>
      <path d="M682.5 850C1059.43 850 1365 659.721 1365 425C1365 190.279 1059.43 0 682.5 0C305.566 0 0 190.279 0 425C0 659.721 305.566 850 682.5 850Z"
            fill="url(#heroGradient)"/>
    </svg>
  </div>

  <!-- HERO -->
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT: MAIN TEXT -->
      <div class="col-lg-6 mb-5">
        <h1 class="display-5 fw-bold">Discover Your Next Favorite Book</h1>
        <p class="mt-3 text-muted">
          Welcome to the WebTech Book Library. Browse, add, and manage books with ease using our simple CRUD system.
        </p>

        <div class="d-flex gap-3 mt-4">
          <a class="btn btn-primary" href="read.php">Browse Books</a>
          <a class="btn btn-outline-secondary" href="create.php">Add a Book</a>
        </div>
      </div>

      <!-- RIGHT: BOOK IMAGE COLLAGE -->
      <div class="col-lg-6">
        <div class="row g-3">

          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=600&q=80"
                 class="img-fluid hero-img" alt="Book cover">
          </div>

          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=600&q=80"
                 class="img-fluid hero-img mb-3" alt="Stack of books">

            <img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=600&q=80"
                 class="img-fluid hero-img" alt="Open book">
          </div>

          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80"
                 class="img-fluid hero-img" alt="Books on shelf">
          </div>

          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1528207776546-365bb710ee93?auto=format&fit=crop&w=600&q=80"
                 class="img-fluid hero-img" alt="Library">
          </div>

        </div>
      </div>

    </div>
  </div>

</section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/codespace/FullStack_CollegeProject/1_WEB_TECH/includes/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
