# Proste REST API

To jest prosty projekt REST API, który umożliwia pobieranie, dodawanie, aktualizowanie i usuwanie danych z bazy danych MySQL

## Pobieranie wszystkich danych w widoku HTML

Aby pobrać wszystkie dane w widoku HTML, należy otworzyć plik `index.php` w przeglądarce.

## Pobieranie jednego rekordu po ID w formacie JSON

Aby pobrać jeden rekord z bazy danych o określonym ID, należy użyć metody GET i przekazać ID jako parametr. Na przykład:

GET /api.php?id=1


Odpowiedź zawierać będzie dane w formacie JSON.

## Dodawanie danych poprzez formularz

Aby dodać nowe dane, należy otworzyć plik `post.php` w przeglądarce. Wypełnić formularz i przesłać go. Dane zostaną dodane do bazy danych.

## Usuwanie danych poprzez formularz

Aby usunąć dane, należy otworzyć plik `delete.php` w przeglądarce. Wypełnić formularz, podając ID rekordu do usunięcia, i przesłać go. Rekord zostanie usunięty z bazy danych.

## Aktualizowanie danych poprzez formularz

Aby zaktualizować dane, należy otworzyć plik `put.php` w przeglądarce. Wypełnić formularz, podając ID rekordu do aktualizacji, oraz nowe wartości pól, i przesłać go. Rekord zostanie zaktualizowany w bazie danych.
