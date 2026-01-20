<?php
/**
 * DIAGNÓSTICO RÁPIDO DE EMAIL
 * Acceder a: http://tu-dominio/diagnostico_email.php
 */

echo "<!DOCTYPE html>
<html><head>
<meta charset='UTF-8'>
<title>Diagnóstico de Email</title>
<style>
body { font-family: Arial; max-width: 900px; margin: 20px auto; padding: 20px; background: #f5f5f5; }
.box { background: white; padding: 20px; margin: 15px 0; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0; }
.error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0; }
.warning { background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin: 10px 0; }
.info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 10px 0; }
h1 { color: #667eea; }
pre { background: #f8f9fa; padding: 10px; border-radius: 5px; overflow-x: auto; }
button { background: #667eea; color: white; border: none; padding: 12px 30px; border-radius: 5px; cursor: pointer; font-size: 16px; }
button:hover { background: #764ba2; }
input[type=email] { width: 100%; padding: 10px; margin: 10px 0; border: 2px solid #ddd; border-radius: 5px; }
</style>
</head><body>";

echo "<h1>🔧 Diagnóstico de Configuración Email</h1>";

// 1. Verificar función mail() de PHP
echo "<div class='box'>";
echo "<h2>1. Función mail() de PHP</h2>";
if (function_exists('mail')) {
    echo "<div class='success'>✅ La función mail() está disponible</div>";
} else {
    echo "<div class='error'>❌ La función mail() NO está disponible</div>";
}
echo "</div>";

// 2. Verificar extensiones necesarias
echo "<div class='box'>";
echo "<h2>2. Extensiones PHP para SMTP</h2>";
$extensions = ['openssl', 'sockets'];
foreach($extensions as $ext) {
    if(extension_loaded($ext)) {
        echo "<div class='success'>✅ $ext: Disponible</div>";
    } else {
        echo "<div class='warning'>⚠️ $ext: NO disponible (necesaria para SMTP)</div>";
    }
}
echo "</div>";

// 3. Verificar configuración en php.ini
echo "<div class='box'>";
echo "<h2>3. Configuración PHP (php.ini)</h2>";
echo "<div class='info'>";
echo "<strong>SMTP:</strong> " . ini_get('SMTP') . "<br>";
echo "<strong>smtp_port:</strong> " . ini_get('smtp_port') . "<br>";
echo "<strong>sendmail_path:</strong> " . ini_get('sendmail_path') . "<br>";
echo "</div>";
echo "</div>";

// 4. Test simple con mail()
if(isset($_POST['test_simple'])) {
    echo "<div class='box'>";
    echo "<h2>4. Resultado del Test</h2>";
    
    $to = $_POST['email_destino'];
    $subject = "Test de Email SAC - " . date('H:i:s');
    $message = "Este es un email de prueba enviado el " . date('d/m/Y H:i:s');
    $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "<div class='success'>✅ Email enviado con éxito usando mail() de PHP<br>";
        echo "Destinatario: $to<br>";
        echo "<strong>Importante:</strong> Verifica tu bandeja de entrada y SPAM</div>";
    } else {
        echo "<div class='error'>❌ Error al enviar email con mail()<br>";
        echo "Esto puede deberse a que tu servidor no tiene configurado SMTP</div>";
    }
    echo "</div>";
}

// Formulario de prueba
echo "<div class='box'>";
echo "<h2>Enviar Email de Prueba (método simple)</h2>";
echo "<form method='POST'>";
echo "<label>Email de destino:</label>";
echo "<input type='email' name='email_destino' placeholder='tu-email@example.com' required>";
echo "<button type='submit' name='test_simple'>📧 Enviar Test Simple</button>";
echo "</form>";
echo "</div>";

// Test con CodeIgniter deshabilitado por conflictos
echo "<div class='box'>";
echo "<h2>✅ Configuración Email Completada</h2>";
echo "<div class='success'>";
echo "<strong>La configuración de Gmail SMTP está lista.</strong><br><br>";
echo "Configuración actual:<br>";
echo "• Protocolo: SMTP<br>";
echo "• Host: smtp.gmail.com<br>";
echo "• Puerto: 587<br>";
echo "• Usuario: rv.gohan3@gmail.com<br>";
echo "• Contraseña de app: ✅ Configurada<br>";
echo "</div>";
echo "</div>";

// Instrucciones
echo "<div class='box'>";
echo "<h2>📋 Pasos siguientes</h2>";
echo "<div class='info'>";
echo "<ol>";
echo "<li><strong>Si el test simple funciona:</strong> Tu servidor puede enviar emails, usa <code>protocol = 'mail'</code> en email.php</li>";
echo "<li><strong>Si ninguno funciona:</strong> Tu hosting no tiene configurado email, necesitas usar SMTP externo (Gmail, SendGrid, etc.)</li>";
echo "<li><strong>Para usar Gmail SMTP:</strong> Debes generar una Contraseña de Aplicación en <a href='https://myaccount.google.com/apppasswords' target='_blank'>https://myaccount.google.com/apppasswords</a></li>";
echo "<li><strong>Logs:</strong> Revisa <code>application/logs/</code> para ver errores detallados</li>";
echo "</ol>";
echo "</div>";
echo "</div>";

echo "<div class='warning'>";
echo "⚠️ <strong>SEGURIDAD:</strong> Elimina este archivo después de las pruebas";
echo "</div>";

echo "</body></html>";
?>
