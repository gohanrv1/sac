<?php
/**
 * SOLUCIÓN DIRECTA: Enviar email de recuperación
 * Acceder a: http://tu-dominio/enviar_recuperacion.php?email=tu-email@registrado.com
 */

// Función para enviar email con Gmail usando sockets directos
function enviar_email_gmail($to, $subject, $body) {
    $from = 'rv.gohan3@gmail.com';
    $password = 'kugz myaq yrab ipgw';
    
    $host = 'smtp.gmail.com';
    $port = 587;
    
    // Conectar al servidor SMTP
    $smtp = fsockopen($host, $port, $errno, $errstr, 30);
    
    if (!$smtp) {
        return array('success' => false, 'error' => "No se pudo conectar: $errstr ($errno)");
    }
    
    $response = fgets($smtp, 515);
    
    // EHLO
    fputs($smtp, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
    $response = fgets($smtp, 515);
    
    // STARTTLS
    fputs($smtp, "STARTTLS\r\n");
    $response = fgets($smtp, 515);
    
    // Habilitar crypto
    stream_socket_enable_crypto($smtp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
    
    // EHLO después de TLS
    fputs($smtp, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
    $response = fgets($smtp, 515);
    
    // AUTH LOGIN
    fputs($smtp, "AUTH LOGIN\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, base64_encode($from) . "\r\n");
    $response = fgets($smtp, 515);
    
    fputs($smtp, base64_encode($password) . "\r\n");
    $response = fgets($smtp, 515);
    
    if(substr($response, 0, 3) != '235') {
        fclose($smtp);
        return array('success' => false, 'error' => 'Autenticación fallida: ' . $response);
    }
    
    // MAIL FROM
    fputs($smtp, "MAIL FROM: <$from>\r\n");
    $response = fgets($smtp, 515);
    
    // RCPT TO
    fputs($smtp, "RCPT TO: <$to>\r\n");
    $response = fgets($smtp, 515);
    
    // DATA
    fputs($smtp, "DATA\r\n");
    $response = fgets($smtp, 515);
    
    // Headers y contenido
    $headers = "From: Sistema SAC <$from>\r\n";
    $headers .= "To: <$to>\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "\r\n";
    
    fputs($smtp, $headers . $body . "\r\n.\r\n");
    $response = fgets($smtp, 515);
    
    // QUIT
    fputs($smtp, "QUIT\r\n");
    fclose($smtp);
    
    return array('success' => true);
}

// Cargar CodeIgniter
define('BASEPATH', TRUE);
require_once 'index.php';

$CI =& get_instance();
$CI->load->database();

?>
<!DOCTYPE html>
<html><head>
<meta charset='UTF-8'>
<title>Enviar Recuperación de Contraseña</title>
<style>
body { font-family: Arial; max-width: 800px; margin: 30px auto; padding: 20px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
.container { background: white; border-radius: 15px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.3); }
h1 { color: #667eea; margin-top: 0; }
.success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 15px 0; }
.error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 15px 0; }
.warning { background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin: 15px 0; }
.info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 15px 0; }
input[type="email"] { width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 5px; font-size: 16px; margin: 10px 0; box-sizing: border-box; }
button { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 30px; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; }
button:hover { opacity: 0.9; }
.enlace { background: #f8f9fa; padding: 15px; border-radius: 5px; word-break: break-all; margin: 15px 0; border-left: 4px solid #667eea; }
pre { background: #f8f9fa; padding: 10px; border-radius: 5px; overflow-x: auto; font-size: 11px; }
</style>
</head><body>
<div class='container'>
<h1>📧 Enviar Recuperación de Contraseña</h1>

<?php
if(isset($_POST['enviar_email']) || isset($_GET['email'])) {
    $email = isset($_POST['enviar_email']) ? $_POST['email_usuario'] : $_GET['email'];
    
    echo "<h2>Procesando: " . htmlspecialchars($email) . "</h2>";
    
    // Verificar usuario
    $CI->db->select('id_user, username, nombres');
    $CI->db->from('users');
    $CI->db->where('username', $email);
    $query = $CI->db->get();
    
    if($query->num_rows() == 1) {
        $user = $query->row();
        
        // Generar token
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = substr(str_shuffle($permitted_chars), 0, 32);
        
        // Guardar token
        $CI->db->set('token', $token);
        $CI->db->where('username', $email);
        $CI->db->update('users');
        
        $enlace = base_url() . 'index.php/login/nuevaclave/' . $token;
        $nombre = $user->nombres ? $user->nombres : $email;
        
        // HTML del email
        $htmlContent = '<!DOCTYPE html>';
        $htmlContent .= '<html><head><meta charset="UTF-8"></head><body style="font-family: Arial, sans-serif;">';
        $htmlContent .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">';
        $htmlContent .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">';
        $htmlContent .= '<h1 style="color: white; margin: 0;">Recuperación de Contraseña</h1></div>';
        $htmlContent .= '<div style="background: white; padding: 30px; border-radius: 0 0 10px 10px;">';
        $htmlContent .= '<p style="font-size: 16px;">Hola <strong>'.$nombre.'</strong>,</p>';
        $htmlContent .= '<p>Para restablecer tu contraseña, haz clic en el siguiente enlace:</p>';
        $htmlContent .= '<div style="text-align: center; margin: 30px 0;">';
        $htmlContent .= '<a href="'.$enlace.'" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">RESTABLECER CONTRASEÑA</a>';
        $htmlContent .= '</div>';
        $htmlContent .= '<p style="color: #666; font-size: 14px;">O copia este enlace:</p>';
        $htmlContent .= '<p style="word-break: break-all; color: #667eea; font-size: 12px;">'.$enlace.'</p>';
        $htmlContent .= '</div></div></body></html>';
        
        echo "<div class='success'>";
        echo "✅ Token generado y guardado en la base de datos<br>";
        echo "Nombre: " . $nombre;
        echo "</div>";
        
        echo "<div class='enlace'>";
        echo "<strong>Enlace de recuperación:</strong><br><br>";
        echo $enlace;
        echo "</div>";
        
        echo "<a href='".$enlace."' style='display: inline-block; padding: 10px 20px; background: #667eea; color: white; text-decoration: none; border-radius: 5px; margin: 10px 0;' target='_blank'>👉 Ir al Enlace</a>";
        
        // Intentar enviar email
        echo "<div class='info'>";
        echo "<h3>Intentando enviar email...</h3>";
        
        $result = enviar_email_gmail($email, 'Recuperación de Contraseña - SAC', $htmlContent);
        
        if($result['success']) {
            echo "<div class='success'>✅ <strong>¡EMAIL ENVIADO EXITOSAMENTE!</strong><br>";
            echo "Revisa tu bandeja de entrada y carpeta de spam en: <strong>$email</strong></div>";
        } else {
            echo "<div class='error'>❌ No se pudo enviar el email<br>";
            echo "Error: " . htmlspecialchars($result['error']) . "<br><br>";
            echo "<strong>SOLUCIÓN:</strong> Usa el enlace de arriba para recuperar tu contraseña.</div>";
        }
        
        echo "</div>";
        
    } else {
        echo "<div class='error'>❌ Email no encontrado en el sistema</div>";
    }
    
} else {
    echo "<div class='info'>Ingresa el email registrado para generar el enlace de recuperación y enviarlo por correo.</div>";
    echo "<form method='POST'>";
    echo "<label><strong>Email registrado:</strong></label>";
    echo "<input type='email' name='email_usuario' placeholder='tu-email@ejemplo.com' required>";
    echo "<button type='submit' name='enviar_email'>📧 Generar y Enviar Recuperación</button>";
    echo "</form>";
}
?>

<div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid #eee;">
    <a href="<?php echo base_url(); ?>" style="color: #667eea; text-decoration: none;">← Volver al Login</a>
</div>

<div class='warning' style='margin-top: 20px;'>
⚠️ <strong>Elimina este archivo después de resolver el problema</strong>
</div>

</div>
</body></html>
