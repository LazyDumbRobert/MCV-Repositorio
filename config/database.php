<?php
$host = 'localhost';
$dbname = 'industria_textil';
$username = 'root';
$password = 'root';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$conn = null;

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
