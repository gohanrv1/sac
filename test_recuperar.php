<?php
/**
 * TEST DIRECTO DE RECUPERACIÓN DE CONTRASEÑA
 * Accede a: http://tu-dominio/test_recuperar.php?email=tu-email@registrado.com
 */

define('BASEPATH', TRUE);
require_once 'index.php';

$CI =& get_instance();
$CI->load->model('Model_login');
$CI->load->database();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Recuperar Contraseña</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 700px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }
        h1 { color: #667eea; margin-top: 0; }
        .success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 15px 0; }
        .error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 15px 0; }
        .warning { background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin: 15px 0; }
        .info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 15px 0; }
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        button:hover { opacity: 0.9; }
        .enlace-recuperacion {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            word-break: break-all;
            margin: 15px 0;
            border-left: 4px solid #667eea;
        }
        a.btn-enlace {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Test de Recuperación de Contraseña</h1>
        
        <?php
        if(isset($_POST['test_email']) || isset($_GET['email'])) {
            $email = isset($_POST['test_email']) ? $_POST['test_email'] : $_GET['email'];
            
            echo "<h2>Procesando: " . htmlspecialchars($email) . "</h2>";
            
            // Verificar si el email existe
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
                
                // Generar enlace
                $enlace = base_url() . 'index.php/login/nuevaclave/' . $token;
                
                echo "<div class='success'>";
                echo "<strong>✅ Usuario encontrado</strong><br>";
                echo "Nombre: " . ($user->nombres ? $user->nombres : 'No registrado') . "<br>";
                echo "Token generado y guardado en la base de datos";
                echo "</div>";
                
                echo "<h3>🔗 Enlace de Recuperación Generado:</h3>";
                echo "<div class='enlace-recuperacion'>";
                echo "<strong>Copia este enlace y pégalo en el navegador:</strong><br><br>";
                echo $enlace;
                echo "</div>";
                
                echo "<a href='".$enlace."' class='btn-enlace' target='_blank'>👉 Ir Directamente al Enlace</a>";
                
                echo "<div class='info'>";
                echo "<h3>🧪 Pruebas de Email:</h3>";
                
                // Test 1: mail() directo
                echo "<strong>1. Test con mail() de PHP:</strong><br>";
                $subject = "Test Recuperación SAC";
                $message = "Enlace de recuperación: " . $enlace;
                $headers = "From: noreply@" . $_SERVER['HTTP_HOST'];
                
                if(@mail($email, $subject, $message, $headers)) {
                    echo "✅ mail() ejecutado (revisa tu bandeja/spam)<br>";
                } else {
                    echo "❌ mail() falló - Tu servidor no puede enviar emails<br>";
                }
                
                // Test 2: Con CodeIgniter
                echo "<br><strong>2. Test con CodeIgniter Email:</strong><br>";
                try {
                    $CI->load->library('email');
                    $CI->email->clear();
                    $config = array(
                        'protocol' => 'mail',
                        'mailtype' => 'text',
                        'charset' => 'utf-8'
                    );
                    $CI->email->initialize($config);
                    $CI->email->from('noreply@' . $_SERVER['HTTP_HOST'], 'Test SAC');
                    $CI->email->to($email);
                    $CI->email->subject('Test Recuperación SAC');
                    $CI->email->message('Enlace: ' . $enlace);
                    
                    if($CI->email->send()) {
                        echo "✅ Email CodeIgniter enviado (revisa bandeja/spam)<br>";
                    } else {
                        echo "❌ Email CodeIgniter falló<br>";
                        echo "<pre style='font-size:10px;'>" . $CI->email->print_debugger() . "</pre>";
                    }
                } catch(Exception $e) {
                    echo "❌ Error: " . $e->getMessage() . "<br>";
                }
                echo "</div>";
                
                echo "<div class='warning'>";
                echo "<strong>💡 Solución Temporal:</strong><br>";
                echo "Si los emails no llegan, usa el enlace generado arriba para recuperar tu contraseña directamente.<br>";
                echo "El token es válido y está guardado en la base de datos.";
                echo "</div>";
                
            } else {
                echo "<div class='error'>";
                echo "<strong>❌ Email no encontrado</strong><br>";
                echo "El email <strong>" . htmlspecialchars($email) . "</strong> no está registrado en el sistema.";
                echo "</div>";
            }
            
        } else {
            // Formulario
            echo "<div class='info'>";
            echo "Este script genera el enlace de recuperación directamente, útil cuando los emails no llegan.";
            echo "</div>";
            
            echo "<form method='POST'>";
            echo "<label><strong>Email registrado en el sistema:</strong></label>";
            echo "<input type='email' name='test_email' placeholder='tu-email@ejemplo.com' required>";
            echo "<button type='submit'>🔍 Generar Enlace de Recuperación</button>";
            echo "</form>";
            
            echo "<div class='warning' style='margin-top: 20px;'>";
            echo "<strong>Nota:</strong> Este script también intentará enviar los emails de prueba.";
            echo "</div>";
        }
        ?>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid #eee;">
            <a href="<?php echo base_url(); ?>" style="color: #667eea; text-decoration: none;">← Volver al Login</a>
            |
            <a href="test_recuperar.php" style="color: #667eea; text-decoration: none;">🔄 Nueva Prueba</a>
        </div>
        
        <div class="warning" style="margin-top: 20px;">
            <strong>⚠️ IMPORTANTE:</strong> Elimina este archivo (test_recuperar.php) cuando termines las pruebas.
        </div>
    </div>
</body>
</html>
