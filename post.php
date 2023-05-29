<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Dodawanie danych do bazy danych</title>
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
    <h1 class="mt-4">Dodawanie danych do bazy danych</h1>
  
    <form action="api.php" method="POST">
      <div class="form-group">
        <label for="order_id">Order ID:</label>
        <input type="text" class="form-control" name="order_id" id="order_id" required>
      </div>
      
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" class="form-control" name="amount" id="amount" required>
      </div>
      
      <div class="form-group">
        <label for="response_code">Response Code:</label>
        <input type="text" class="form-control" name="response_code" id="response_code" required>
      </div>
      
      <div class="form-group">
        <label for="response_desc">Response Description:</label>
        <input type="text" class="form-control" name="response_desc" id="response_desc" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
