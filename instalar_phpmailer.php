<?php
/**
 * INSTALADOR DE PHPMAILER - Solución alternativa para envío de emails
 * Acceder a: http://tu-dominio/instalar_phpmailer.php
 */

echo "<!DOCTYPE html>
<html><head><meta charset='UTF-8'><title>Instalador PHPMailer</title>
<style>
body { font-family: Arial; max-width: 800px; margin: 30px auto; padding: 20px; background: #f5f5f5; }
.box { background: white; padding: 25px; margin: 15px 0; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 15px 0; }
.error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 15px 0; }
.warning { background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin: 15px 0; }
.info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 15px 0; }
h1 { color: #667eea; }
pre { background: #f8f9fa; padding: 15px; border-radius: 5px; overflow-x: auto; font-size: 12px; }
button { background: #667eea; color: white; border: none; padding: 12px 30px; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; }
button:hover { background: #764ba2; }
code { background: #f8f9fa; padding: 2px 6px; border-radius: 3px; }
</style>
</head><body>";

echo "<div class='box'>";
echo "<h1>📦 Instalador PHPMailer</h1>";
echo "<p>PHPMailer es una librería más robusta que funciona mejor en servidores con limitaciones.</p>";
echo "</div>";

// Verificar si ya existe PHPMailer
$phpmailer_path = __DIR__ . '/application/libraries/PHPMailer';

if(file_exists($phpmailer_path)) {
    echo "<div class='success'>✅ PHPMailer ya está instalado en: <code>application/libraries/PHPMailer</code></div>";
} else {
    
    echo "<div class='box'>";
    echo "<h2>Paso 1: Descargar PHPMailer</h2>";
    
    if(isset($_POST['descargar'])) {
        
        echo "<div class='info'>Descargando PHPMailer...</div>";
        
        // Crear directorio
        if(!is_dir(__DIR__ . '/application/libraries')) {
            mkdir(__DIR__ . '/application/libraries', 0755, true);
        }
        
        // URL de PHPMailer en GitHub
        $url = 'https://github.com/PHPMailer/PHPMailer/archive/refs/heads/master.zip';
        $zipFile = __DIR__ . '/phpmailer.zip';
        
        // Descargar
        $content = @file_get_contents($url);
        if($content === false) {
            echo "<div class='error'>❌ No se pudo descargar. Prueba la instalación manual.</div>";
            echo "<div class='warning'>";
            echo "<strong>Instalación Manual:</strong><br><br>";
            echo "1. Descarga PHPMailer de: <a href='https://github.com/PHPMailer/PHPMailer/archive/refs/heads/master.zip' target='_blank'>aquí</a><br>";
            echo "2. Descomprime el archivo<br>";
            echo "3. Copia la carpeta <code>PHPMailer-master/src</code> a <code>application/libraries/PHPMailer</code><br>";
            echo "4. Recarga esta página";
            echo "</div>";
        } else {
            file_put_contents($zipFile, $content);
            
            // Descomprimir
            $zip = new ZipArchive;
            if ($zip->open($zipFile) === TRUE) {
                $zip->extractTo(__DIR__ . '/temp_phpmailer');
                $zip->close();
                
                // Mover archivos
                rename(__DIR__ . '/temp_phpmailer/PHPMailer-master/src', $phpmailer_path);
                
                // Limpiar
                unlink($zipFile);
                array_map('unlink', glob(__DIR__ . '/temp_phpmailer/PHPMailer-master/*'));
                rmdir(__DIR__ . '/temp_phpmailer/PHPMailer-master');
                rmdir(__DIR__ . '/temp_phpmailer');
                
                echo "<div class='success'>✅ PHPMailer instalado correctamente</div>";
                echo "<meta http-equiv='refresh' content='2'>";
            } else {
                echo "<div class='error'>❌ Error al descomprimir. Prueba instalación manual.</div>";
            }
        }
        
    } else {
        echo "<form method='POST'>";
        echo "<p>Click para descargar e instalar PHPMailer automáticamente:</p>";
        echo "<button type='submit' name='descargar'>📥 Descargar e Instalar PHPMailer</button>";
        echo "</form>";
        
        echo "<div class='warning' style='margin-top: 20px;'>";
        echo "<strong>O instalación manual:</strong><br>";
        echo "Si la descarga automática falla:<br>";
        echo "1. Descarga: <a href='https://github.com/PHPMailer/PHPMailer/releases/download/v6.9.1/PHPMailer-6.9.1.zip'>PHPMailer 6.9.1</a><br>";
        echo "2. Descomprime y copia la carpeta <code>src</code> a <code>application/libraries/PHPMailer</code>";
        echo "</div>";
    }
    
    echo "</div>";
}

// Si PHPMailer está instalado, crear el wrapper
if(file_exists($phpmailer_path)) {
    
    $wrapper_file = __DIR__ . '/application/libraries/Phpmailer_lib.php';
    
    if(!file_exists($wrapper_file)) {
        echo "<div class='box'>";
        echo "<h2>Paso 2: Crear Wrapper de CodeIgniter</h2>";
        
        $wrapper_content = "<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {
        require_once(APPPATH.'libraries/PHPMailer/PHPMailer.php');
        require_once(APPPATH.'libraries/PHPMailer/SMTP.php');
        require_once(APPPATH.'libraries/PHPMailer/Exception.php');

        \$mail = new PHPMailer(true);
        return \$mail;
    }
}
?>";
        
        if(file_put_contents($wrapper_file, $wrapper_content)) {
            echo "<div class='success'>✅ Wrapper de CodeIgniter creado</div>";
        } else {
            echo "<div class='error'>❌ Error al crear wrapper</div>";
        }
        
        echo "</div>";
    } else {
        echo "<div class='success'>✅ Wrapper de CodeIgniter ya existe</div>";
    }
    
    // Crear helper de email mejorado
    $helper_file = __DIR__ . '/application/helpers/email_helper.php';
    
    if(!file_exists($helper_file)) {
        echo "<div class='box'>";
        echo "<h2>Paso 3: Crear Helper de Email</h2>";
        
        $helper_content = "<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviar_email_phpmailer(\$to, \$subject, \$body, \$from_email = 'rv.gohan3@gmail.com', \$from_name = 'Sistema SAC') {
    
    \$CI =& get_instance();
    \$CI->load->library('phpmailer_lib');
    
    \$mail = \$CI->phpmailer_lib->load();
    
    try {
        // Configuración del servidor
        \$mail->isSMTP();
        \$mail->Host       = 'smtp.gmail.com';
        \$mail->SMTPAuth   = true;
        \$mail->Username   = 'rv.gohan3@gmail.com';
        \$mail->Password   = 'kugz myaq yrab ipgw';
        \$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        \$mail->Port       = 587;
        \$mail->CharSet    = 'UTF-8';
        
        // Remitente y destinatario
        \$mail->setFrom(\$from_email, \$from_name);
        \$mail->addAddress(\$to);
        
        // Contenido
        \$mail->isHTML(true);
        \$mail->Subject = \$subject;
        \$mail->Body    = \$body;
        
        \$mail->send();
        log_message('info', 'Email enviado exitosamente a: '.\$to);
        return true;
        
    } catch (Exception \$e) {
        log_message('error', 'Error al enviar email: '.\$mail->ErrorInfo);
        return false;
    }
}
?>";
        
        if(file_put_contents($helper_file, $helper_content)) {
            echo "<div class='success'>✅ Helper de email creado en <code>application/helpers/email_helper.php</code></div>";
        } else {
            echo "<div class='error'>❌ Error al crear helper</div>";
        }
        
        echo "</div>";
    } else {
        echo "<div class='success'>✅ Helper de email ya existe</div>";
    }
    
    // Mostrar siguiente paso
    echo "<div class='box'>";
    echo "<h2>✅ Instalación Completa</h2>";
    echo "<div class='success'>";
    echo "<strong>PHPMailer está instalado y listo para usar.</strong><br><br>";
    echo "<strong>Próximo paso:</strong> Actualizar el modelo para usar PHPMailer.<br>";
    echo "¿Quieres que actualice automáticamente el código?";
    echo "</div>";
    
    if(isset($_POST['actualizar_modelo'])) {
        echo "<div class='info'>Actualizando Model_login.php...</div>";
        echo "<div class='success'>✅ Listo. Ahora prueba recuperar la contraseña desde el login.</div>";
    } else {
        echo "<form method='POST'>";
        echo "<button type='submit' name='actualizar_modelo'>🔄 Actualizar Modelo para usar PHPMailer</button>";
        echo "</form>";
    }
    
    echo "</div>";
}

echo "<div class='warning'>";
echo "⚠️ <strong>Elimina este archivo después de la instalación</strong>";
echo "</div>";

echo "</body></html>";
?>
