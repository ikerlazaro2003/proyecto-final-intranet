<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    try {
        $stmt->execute();
        echo "<script>alert('Usuario registrado correctamente'); window.location.href = '../login.html';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Error: El correo ya está registrado.'); window.location.href = '../registro.html';</script>";
    }
}
?>
