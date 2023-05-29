<?php
include('db.php'); // Dodane include z plikiem db.php

// Utwórz zapytanie SQL
$sql = "SELECT * FROM transactions2";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Test Menu</title>
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
    <h1>Informacje o działaniu API</h1>
    <p>Strona główna pobiera wszystkie dane z tabeli w db po get bez parametrów</p>
    <p>W menu posiadamy 4 linki z różnymi opcjami:</p>
    <ul>
      <li>Test Get - ma już testowy url z parametrem</li>
      <li>Test Post - ma formularz służący do zapisu danych w db</li>
      <li>Test Update - ma formularz służący do aktualizacji danych</li>
      <li>Test Delete - ma formularz służący do usuwania danych</li>
    </ul>
    <h1 class="mt-4">Get ALL</h1>

    <table class="table mt-4">
      <thead>
        <tr>
          <th>ID</th>
          <th>Order ID</th>
          <th>Amount</th>
          <th>Response Code</th>
          <th>Response Description</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['response_code'] . "</td>";
            echo "<td>" . $row['response_desc'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='5'>Brak danych.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
