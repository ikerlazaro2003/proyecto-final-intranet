<?php
$host = 'localhost';          // Host donde corre MariaDB
$db = 'empresa_ficticia';     // Nombre de la base de datos
$user = 'root';               // Usuario de MariaDB
$pass = '';                   // Si no tienes contraseña, déjalo vacío

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión correcta a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>

