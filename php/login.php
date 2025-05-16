<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el usuario existe (ahora en PDO)
    $query = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':email' => $email,
        ':password' => $password
    ]);

    if ($stmt->rowCount() > 0) {
        // Usuario encontrado, redirigir a la Intranet
        header("Location: ../intranet.html");
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='../login.html';</script>";
    }
}
?>

