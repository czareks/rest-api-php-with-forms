<?php

header("Content-Type: application/json");

include('db.php'); // Dodane include z plikiem db.php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];


        $sql = "SELECT * FROM transactions2 WHERE order_id = $order_id";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $rows = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }

            http_response_code(200);
            echo json_encode($rows);
        } else {
            http_response_code(404);
            echo json_encode(array('error' => 'Brak rekordów o podanym order_id.'));
        }

    } else {
        http_response_code(400);
        echo json_encode(array('error' => 'Brak wymaganych parametrów.'));
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['order_id'], $_POST['amount'], $_POST['response_code'], $_POST['response_desc'])) {
        // Pobierz dane z formularza
        $order_id = $_POST['order_id'];
        $amount = $_POST['amount'];
        $response_code = $_POST['response_code'];
        $response_desc = $_POST['response_desc'];

        // Utwórz zapytanie SQL
        $sql = "INSERT INTO transactions2 (order_id, amount, response_code, response_desc) VALUES ('$order_id', '$amount', '$response_code', '$response_desc')";

        // Wykonaj zapytanie
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
            echo json_encode(array('message' => 'Dane zostały dodane do bazy danych.'));
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Błąd podczas dodawania danych do bazy.'));
        }
    } elseif (isset($_POST['delete_order_id'])) {
        $order_id = $_POST['delete_order_id'];

        // Utwórz zapytanie SQL do usunięcia danych
        $sql = "DELETE FROM transactions2 WHERE order_id=$order_id";

        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
            echo json_encode(array('message' => 'Dane zostały usunięte.'));
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Błąd podczas usuwania danych.'));
        }
    } elseif (isset($_POST['order_id_update'], $_POST['amount_update'], $_POST['response_code_update'], $_POST['response_desc_update'])) {
        // Pobierz dane z formularza
        $order_id_update = $_POST['order_id_update'];
        $amount_update = $_POST['amount_update'];
        $response_code_update = $_POST['response_code_update'];
        $response_desc_update = $_POST['response_desc_update'];

        // Utwórz zapytanie SQL
        $sql = "UPDATE `transactions2` SET `amount` = '$amount_update', `response_code` = '$response_code_update', `response_desc` = '$response_desc_update' WHERE `transactions2`.`order_id` = $order_id_update;";

        // Wykonaj zapytanie
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
            echo json_encode(array('message' => 'Dane zostały zaktualizowane w bazie danych.'));
        } else {
            http_response_code(500);
            echo json_encode(array('error' => 'Błąd podczas dodawania danych do bazy.'));
        }
    } else {
        http_response_code(400);
        echo json_encode(array('error' => 'Brak wymaganych parametrów.'));
    }
}





mysqli_close($conn);