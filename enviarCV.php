<?php
// Cargar PHPMailer
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables de formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $disponibilidad = $_POST['disponibilidad'];
    $carta = $_POST['carta'];
    $curriculo = $_FILES['curriculo'];

    // Crear instancia de PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();                                      // Usar SMTP
    $mail->Host = 'smtp.tu-servidor.com';                 // Servidor SMTP
    $mail->SMTPAuth = true;                               // Habilitar autenticación SMTP
    $mail->Username = 'tu-email@dominio.com';             // Tu email
    $mail->Password = 'tu-contraseña';                    // Tu contraseña de email
    $mail->SMTPSecure = 'tls';                            // Habilitar encriptación TLS
    $mail->Port = 587;                                    // Puerto TCP

    // Configuración de destinatario y remitente
    $mail->setFrom('tu-email@dominio.com', 'Nombre Remitente');
    $mail->addAddress('destino@dominio.com', 'Nombre Destino');  // Destinatario

    // Adjuntar el archivo de currículum si está presente
    if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] == UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']);
    }

    // Configuración del contenido del email con Bootstrap
    $mail->isHTML(true);                                  // Configurar email en formato HTML
    $mail->Subject = 'Novo CV recebido';
    $mail->Body    = "
                        <div class='container' style='font-family: Poppins, sans-serif !important;'>
                            <h1 class='text-center' style='color: #24449F !important;
                            font-family: Poppins, sans-serif !important;'>Novo CV recebido</h1>
                            <p class='mb-3 text1'><strong>Nome:</strong> $nombre $apellido</p>
                            <p class='mb-3 text1'><strong>Email:</strong> $email</p>
                            <p class='mb-3 text1'><strong>Cargo Desejado:</strong> $cargo</p>
                            <p class='mb-3 text1'><strong>Disponibilidade:</strong> $disponibilidad</p>
                            <p class='mb-3 text1'><strong>Carta de Apresentação:</strong><br>$carta</p>
                            <hr>
                            <footer class='text-center' style='font-size: 12px; color: #777;'>
                                <p>&copy; 2024 OndaCom. Todos os direitos reservados.</p>
                            </footer>
                        </div>
    ";

    // Enviar email y redirigir
    if ($mail->send()) {
        header('Location: mensaje.php');  // Redirigir a mensaje.php si el envío fue exitoso
        exit();
    } else {
        header('Location: mensaje_error.php');  // Redirigir a mensaje_error.php si falló el envío
        exit();
    }
}