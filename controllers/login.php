<?php

// Recibe los datos del formulario
$logemail = $_POST['logemail'];
$password = $_POST['password'];

// Conecta a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'elections');


// Verifica si el usuario y la contraseña son válidos
$stmt = $conn->prepare('SELECT * FROM coordinator WHERE email = ? AND password = ?');
$stmt->bind_param('ss', $logemail, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // Inicia la sesión de usuario
  session_start();
  $_SESSION['logemail'] = $logemail;

  // Envía una respuesta de éxito al script JavaScript
  echo 'success';
} else {
  // Envía una respuesta de error al script JavaScript
  echo 'error';
}

// Cierra la conexión a la base de datos
$conn->close();


?>