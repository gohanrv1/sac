<?php
/**
 * Script de prueba para verificar la configuración de email
 * 
 * Acceder a: http://tu-dominio.com/test_email.php
 * 
 * IMPORTANTE: Eliminar este archivo después de probar
 */

// Cargar CodeIgniter
define('BASEPATH', TRUE);
require_once 'index.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Configuración de Email - SAC</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .content {
            padding: 30px;
        }
        .success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .error {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .warning {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .info {
            background: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .config-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .config-label {
            font-weight: bold;
            color: #667eea;
        }
        .config-value {
            color: #333;
            font-family: monospace;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin: 10px 5px;
        }
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        form {
            margin: 20px 0;
        }
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #e8e8e8;
            border-radius: 5px;
            font-size: 16px;
            margin: 10px 0;
        }
        pre {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔧 Test de Configuración de Email</h1>
            <p>Sistema SAC - Verificación SMTP</p>
        </div>
        <div class="content">
            
            <?php
            $CI =& get_instance();
            
            // Verificar si el archivo de configuración existe
            $config_file = APPPATH . 'config/email.php';
            if(!file_exists($config_file)) {
                echo '<div class="error">';
                echo '<strong>❌ Error:</strong> El archivo de configuración <code>application/config/email.php</code> no existe.';
                echo '<br><br>Por favor, créalo siguiendo las instrucciones en <code>CONFIGURACION_EMAIL.md</code>';
                echo '</div>';
            } else {
                echo '<div class="success">';
                echo '<strong>✅ Archivo de configuración encontrado</strong>';
                echo '</div>';
                
                // Mostrar configuración actual
                $CI->config->load('email');
                echo '<h2>📋 Configuración Actual</h2>';
                echo '<div class="info">';
                
                $email_config = array(
                    'Protocol' => $CI->config->item('protocol'),
                    'SMTP Host' => $CI->config->item('smtp_host'),
                    'SMTP User' => $CI->config->item('smtp_user'),
                    'SMTP Password' => $CI->config->item('smtp_pass') ? '********' : '<span style="color:red">NO CONFIGURADO</span>',
                    'SMTP Port' => $CI->config->item('smtp_port'),
                    'SMTP Crypto' => $CI->config->item('smtp_crypto'),
                    'Mail Type' => $CI->config->item('mailtype'),
                );
                
                foreach($email_config as $label => $value) {
                    echo '<div class="config-item">';
                    echo '<span class="config-label">'.$label.':</span>';
                    echo '<span class="config-value">'.$value.'</span>';
                    echo '</div>';
                }
                echo '</div>';
                
                // Verificar si está configurado
                if($CI->config->item('smtp_user') == 'tu-email@gmail.com' || 
                   $CI->config->item('smtp_pass') == 'tu-contraseña-app') {
                    echo '<div class="warning">';
                    echo '<strong>⚠️ Configuración Pendiente:</strong> Debes reemplazar los valores por defecto en <code>application/config/email.php</code>';
                    echo '<br><br>Consulta <code>CONFIGURACION_EMAIL.md</code> para instrucciones detalladas.';
                    echo '</div>';
                } else {
                    // Formulario para enviar email de prueba
                    echo '<h2>📧 Enviar Email de Prueba</h2>';
                    
                    if(isset($_POST['test_email'])) {
                        $to_email = $_POST['to_email'];
                        
                        if(filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
                            
                            $CI->load->library('email');
                            
                            $htmlContent = '<!DOCTYPE html>';
                            $htmlContent .= '<html><head><meta charset="UTF-8"></head><body style="font-family: Arial, sans-serif;">';
                            $htmlContent .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">';
                            $htmlContent .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">';
                            $htmlContent .= '<h1 style="color: white; margin: 0;">✅ Email de Prueba SAC</h1>';
                            $htmlContent .= '</div>';
                            $htmlContent .= '<div style="background: white; padding: 30px; border-radius: 0 0 10px 10px;">';
                            $htmlContent .= '<p style="font-size: 16px;">¡Hola!</p>';
                            $htmlContent .= '<p>Este es un email de prueba del sistema SAC.</p>';
                            $htmlContent .= '<p><strong>✓ La configuración de email está funcionando correctamente.</strong></p>';
                            $htmlContent .= '<p style="color: #999; font-size: 12px; margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">';
                            $htmlContent .= 'Enviado el: ' . date('d/m/Y H:i:s') . '<br>';
                            $htmlContent .= 'Desde: ' . $_SERVER['HTTP_HOST'];
                            $htmlContent .= '</p>';
                            $htmlContent .= '</div></div></body></html>';
                            
                            $config = array('mailtype' => 'html', 'charset' => 'utf-8', 'newline' => "\r\n");
                            $CI->email->initialize($config);
                            $CI->email->from($CI->config->item('smtp_user'), 'Sistema SAC - Test');
                            $CI->email->to($to_email);
                            $CI->email->subject('Email de Prueba - SAC');
                            $CI->email->message($htmlContent);
                            
                            if($CI->email->send()) {
                                echo '<div class="success">';
                                echo '<strong>✅ ¡Email enviado exitosamente!</strong><br>';
                                echo 'Se ha enviado un email de prueba a: <strong>' . htmlspecialchars($to_email) . '</strong>';
                                echo '<br><br>Por favor, verifica tu bandeja de entrada y la carpeta de spam.';
                                echo '</div>';
                            } else {
                                echo '<div class="error">';
                                echo '<strong>❌ Error al enviar el email</strong><br><br>';
                                echo '<strong>Detalles del error:</strong>';
                                echo '<pre>' . $CI->email->print_debugger() . '</pre>';
                                echo '</div>';
                            }
                            
                        } else {
                            echo '<div class="error">';
                            echo '<strong>❌ Email inválido</strong> Por favor, ingresa un email válido.';
                            echo '</div>';
                        }
                    }
                    
                    ?>
                    <form method="POST">
                        <label for="to_email"><strong>Email de destino:</strong></label>
                        <input type="email" id="to_email" name="to_email" placeholder="ejemplo@correo.com" required>
                        <button type="submit" name="test_email" class="btn">📨 Enviar Email de Prueba</button>
                    </form>
                    <?php
                }
            }
            ?>
            
            <h2>📚 Recursos</h2>
            <div class="info">
                <p><strong>Documentación:</strong> Consulta <code>CONFIGURACION_EMAIL.md</code> para instrucciones completas.</p>
                <p><strong>Logs:</strong> Los errores se guardan en <code>application/logs/</code></p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo base_url(); ?>" class="btn">← Volver al Login</a>
            </div>
            
            <div class="warning" style="margin-top: 30px;">
                <strong>⚠️ IMPORTANTE:</strong> Por seguridad, elimina este archivo (<code>test_email.php</code>) después de realizar las pruebas.
            </div>
            
        </div>
    </div>
</body>
</html>
