<?php
/**
 * RECUPERACIÓN RÁPIDA DE CONTRASEÑA
 * Versión simple sin dependencias
 * 
 * Acceder a: http://tu-dominio/recuperar_simple.php
 */

// ========================================
// CONFIGURACIÓN - AJUSTAR ESTOS VALORES
// ========================================

// Configuración de base de datos
$DB_HOST = 'localhost';
$DB_USER = 'root';  // Cambiar si es diferente
$DB_PASS = '';      // Cambiar si tienes contraseña
$DB_NAME = 'u990140860_infotaxi';

// Configuración de Gmail
$GMAIL_USER = 'rv.gohan3@gmail.com';
$GMAIL_PASS = 'kugz myaq yrab ipgw';

// ========================================
// NO MODIFICAR DESDE AQUÍ
// ========================================

// Función para enviar email
function enviar_email_simple($to, $subject, $body, $from_email, $password) {
    
    // Verificar si fsockopen está disponible
    if (!function_exists('fsockopen')) {
        return array('success' => false, 'error' => 'fsockopen no disponible en el servidor');
    }
    
    $host = 'smtp.gmail.com';
    $port = 587;
    
    $smtp = @fsockopen($host, $port, $errno, $errstr, 10);
    
    if (!$smtp) {
        return array('success' => false, 'error' => "No se pudo conectar a Gmail SMTP: $errstr ($errno)");
    }
    
    stream_set_timeout($smtp, 10);
    
    $response = fgets($smtp, 515);
    
    fputs($smtp, "EHLO " . gethostname() . "\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, "STARTTLS\r\n");
    $response = fgets($smtp, 515);
    
    if(substr($response, 0, 3) != '220') {
        fclose($smtp);
        return array('success' => false, 'error' => 'STARTTLS falló: ' . $response);
    }
    
    $crypto = @stream_socket_enable_crypto($smtp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
    
    if (!$crypto) {
        fclose($smtp);
        return array('success' => false, 'error' => 'No se pudo habilitar TLS (falta openssl)');
    }
    
    fputs($smtp, "EHLO " . gethostname() . "\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, "AUTH LOGIN\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, base64_encode($from_email) . "\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, base64_encode($password) . "\r\n");
    $response = fgets($smtp, 515);
    
    if(substr($response, 0, 3) != '235') {
        fclose($smtp);
        return array('success' => false, 'error' => 'Autenticación Gmail fallida. Verifica tu contraseña de aplicación.');
    }
    
    fputs($smtp, "MAIL FROM: <$from_email>\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, "RCPT TO: <$to>\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, "DATA\r\n");
    $response = fgets($smtp, 515);
    
    $headers = "From: Sistema SAC <$from_email>\r\n";
    $headers .= "To: <$to>\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "\r\n";
    
    fputs($smtp, $headers . $body . "\r\n.\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, "QUIT\r\n");
    fclose($smtp);
    
    return array('success' => true);
}

// Conectar a base de datos
$mysqli = @new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_error) {
    die("Error de conexión: <strong>Verifica la configuración de base de datos en recuperar_simple.php</strong><br>" . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");

// Base URL
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recuperar Contraseña - SAC</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; }
.container { max-width: 700px; margin: 30px auto; background: white; border-radius: 15px; padding: 35px; box-shadow: 0 10px 40px rgba(0,0,0,0.3); }
h1 { color: #667eea; margin-bottom: 10px; font-size: 28px; }
.subtitle { color: #666; margin-bottom: 30px; font-size: 14px; }
.success { background: #d4edda; border-left: 4px solid #28a745; color: #155724; padding: 15px; border-radius: 5px; margin: 15px 0; }
.error { background: #f8d7da; border-left: 4px solid #dc3545; color: #721c24; padding: 15px; border-radius: 5px; margin: 15px 0; }
.warning { background: #fff3cd; border-left: 4px solid #ffc107; color: #856404; padding: 15px; border-radius: 5px; margin: 15px 0; }
.info { background: #d1ecf1; border-left: 4px solid #17a2b8; color: #0c5460; padding: 15px; border-radius: 5px; margin: 15px 0; }
input[type="email"] { width: 100%; padding: 14px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 16px; margin: 10px 0; transition: all 0.3s; }
input[type="email"]:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1); }
button { width: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 15px; border-radius: 8px; cursor: pointer; font-size: 17px; font-weight: bold; margin: 15px 0; transition: all 0.3s; }
button:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4); }
.enlace-box { background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #667eea; word-break: break-all; }
.enlace-box a { color: #667eea; font-weight: bold; text-decoration: none; }
.enlace-box a:hover { text-decoration: underline; }
label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
.footer { margin-top: 30px; padding-top: 20px; border-top: 2px solid #eee; text-align: center; }
.footer a { color: #667eea; text-decoration: none; font-weight: 500; }
.footer a:hover { text-decoration: underline; }
code { background: #f8f9fa; padding: 2px 6px; border-radius: 3px; color: #e83e8c; font-size: 13px; }
</style>
</head>
<body>
<div class='container'>
<h1>🔐 Recuperar Contraseña</h1>
<p class="subtitle">Genera un enlace de recuperación e intenta enviarlo por email</p>

<?php
if(isset($_POST['recuperar'])) {
    $email = trim($_POST['email_usuario']);
    
    echo "<h2>Procesando: " . htmlspecialchars($email) . "</h2>";
    
    // Verificar usuario
    $stmt = $mysqli->prepare("SELECT id_user, username, nombres FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $user = $result->fetch_object();
        
        // Generar token seguro
        $token = bin2hex(random_bytes(16));
        
        // Guardar token
        $stmt_update = $mysqli->prepare("UPDATE users SET token = ? WHERE username = ?");
        $stmt_update->bind_param("ss", $token, $email);
        
        if($stmt_update->execute()) {
            
            $enlace = $base_url . 'index.php/login/nuevaclave/' . $token;
            $nombre = !empty($user->nombres) ? $user->nombres : $email;
            
            echo "<div class='success'>";
            echo "<strong>✅ Token generado exitosamente</strong><br>";
            echo "Usuario: " . htmlspecialchars($nombre) . "<br>";
            echo "Token guardado en la base de datos";
            echo "</div>";
            
            echo "<div class='enlace-box'>";
            echo "<strong>🔗 Enlace de Recuperación:</strong><br><br>";
            echo "<a href='".$enlace."' target='_blank'>" . $enlace . "</a>";
            echo "</div>";
            
            echo "<a href='".$enlace."' target='_blank' style='display: inline-block; width: 100%; padding: 15px; background: #28a745; color: white; text-decoration: none; border-radius: 8px; text-align: center; font-weight: bold; margin: 10px 0;'>👉 Ir al Enlace de Recuperación</a>";
            
            // Preparar email
            $subject = 'Recuperación de Contraseña - SAC';
            
            $htmlContent = '<!DOCTYPE html>';
            $htmlContent .= '<html><head><meta charset="UTF-8"></head><body style="font-family: Arial, sans-serif; line-height: 1.6;">';
            $htmlContent .= '<div style="max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px;">';
            $htmlContent .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">';
            $htmlContent .= '<h1 style="color: white; margin: 0;">Recuperación de Contraseña</h1>';
            $htmlContent .= '</div>';
            $htmlContent .= '<div style="background: white; padding: 30px; border-radius: 0 0 10px 10px;">';
            $htmlContent .= '<p style="font-size: 16px;">Hola <strong>'.$nombre.'</strong>,</p>';
            $htmlContent .= '<p>Hemos recibido una solicitud para recuperar tu contraseña.</p>';
            $htmlContent .= '<p>Haz clic en el siguiente botón para restablecer tu contraseña:</p>';
            $htmlContent .= '<div style="text-align: center; margin: 30px 0;">';
            $htmlContent .= '<a href="'.$enlace.'" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">RESTABLECER CONTRASEÑA</a>';
            $htmlContent .= '</div>';
            $htmlContent .= '<p style="color: #666; font-size: 14px;">O copia este enlace:</p>';
            $htmlContent .= '<p style="word-break: break-all; color: #667eea; font-size: 12px;">'.$enlace.'</p>';
            $htmlContent .= '<p style="color: #999; font-size: 12px; margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">Si no solicitaste este cambio, ignora este correo.</p>';
            $htmlContent .= '</div></div></body></html>';
            
            // Intentar enviar email
            echo "<div class='info'>";
            echo "<h3>📧 Intentando enviar email...</h3>";
            
            $resultado = enviar_email_simple($email, $subject, $htmlContent, $GMAIL_USER, $GMAIL_PASS);
            
            if($resultado['success']) {
                echo "<div class='success'>";
                echo "<strong>✅ ¡EMAIL ENVIADO EXITOSAMENTE!</strong><br><br>";
                echo "El correo ha sido enviado a: <strong>" . htmlspecialchars($email) . "</strong><br>";
                echo "Revisa tu bandeja de entrada y la carpeta de SPAM.";
                echo "</div>";
            } else {
                echo "<div class='error'>";
                echo "<strong>❌ No se pudo enviar el email</strong><br><br>";
                echo "Motivo: " . htmlspecialchars($resultado['error']) . "<br><br>";
                echo "<strong>SOLUCIÓN:</strong> Usa el enlace de arriba para recuperar tu contraseña.";
                echo "</div>";
                
                echo "<div class='warning'>";
                echo "<strong>⚠️ Diagnóstico:</strong><br>";
                echo "Tu servidor tiene restricciones para enviar emails.<br>";
                echo "Contacta a tu proveedor de hosting para habilitar el envío de emails SMTP.";
                echo "</div>";
            }
            
            echo "</div>";
            
        } else {
            echo "<div class='error'>❌ Error al guardar el token en la base de datos</div>";
        }
        
    } else {
        echo "<div class='error'>";
        echo "<strong>❌ Email no encontrado</strong><br>";
        echo "El email <strong>" . htmlspecialchars($email) . "</strong> no está registrado en el sistema.";
        echo "</div>";
    }
    
} else {
    // Formulario
    echo "<div class='info'>";
    echo "<strong>ℹ️ Cómo funciona:</strong><br>";
    echo "1. Ingresa tu email registrado<br>";
    echo "2. Se generará un enlace de recuperación<br>";
    echo "3. Intentaremos enviarlo por email<br>";
    echo "4. Si falla, podrás usar el enlace directamente";
    echo "</div>";
    
    echo "<form method='POST'>";
    echo "<label>Email registrado en el sistema:</label>";
    echo "<input type='email' name='email_usuario' placeholder='tu-email@ejemplo.com' required autofocus>";
    echo "<button type='submit' name='recuperar'>🔓 Generar Enlace de Recuperación</button>";
    echo "</form>";
}
?>

<div class='footer'>
    <a href="<?php echo $base_url; ?>">← Volver al Login</a>
</div>

<div class='warning' style='margin-top: 20px; font-size: 13px;'>
    <strong>⚠️ Seguridad:</strong> Elimina este archivo (recuperar_simple.php) una vez resuelto el problema.
</div>

</div>
</body>
</html>

<?php
$mysqli->close();
?>
