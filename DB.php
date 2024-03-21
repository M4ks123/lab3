
<?php
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "LABA3";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Помилка підключення: " . $conn->connect_error);
    }

    return $conn;
}

function close($conn) {

    $conn->close();
}
?>

