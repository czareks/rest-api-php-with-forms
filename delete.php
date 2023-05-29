<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Usuwanie danych</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/rest2/">Test Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="api.php?order_id=12345">Test GET with parametr</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Test POST form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="put.php">Test UPDATE form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Test DELETE form</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h1 class="mt-4">Usuwanie danych</h1>
    <p>Podaj order id zamówienia które chcesz usunąć</p>
    <form id="deleteForm" action="api.php" method="POST">
      <div class="form-group">
        <label for="delete_order_id">Order ID:</label>
        <input type="text" class="form-control" name="delete_order_id" id="delete_order_id" required>
      </div>
      
      <button type="submit" class="btn btn-danger">Usuń</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
