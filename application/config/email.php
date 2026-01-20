<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email Configuration
| -------------------------------------------------------------------------
| Configuración de email para CodeIgniter
| 
| OPCIÓN 1 - mail() de PHP (más simple, usa el servidor configurado en php.ini):
|   $config['protocol'] = 'mail';
|
| OPCIÓN 2 - SMTP con Gmail (requiere contraseña de aplicación):
|   1. Activar "Verificación en 2 pasos": https://myaccount.google.com/security
|   2. Generar "Contraseña de aplicación": https://myaccount.google.com/apppasswords
|   3. Usar esa contraseña de 16 caracteres (NO tu contraseña normal)
|
| OPCIÓN 3 - SendGrid (gratis hasta 100 emails/día):
|   Registrarse en https://sendgrid.com y obtener API Key
*/

// ========================================
// CONFIGURACIÓN GMAIL SMTP
// ========================================
// Tu servidor NO soporta mail() local, debes usar SMTP externo

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'rv.gohan3@gmail.com';
$config['smtp_pass'] = 'kugz myaq yrab ipgw';  // ✅ Contraseña de aplicación configurada
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls';
$config['smtp_timeout'] = 30;

/*
⚠️ INSTRUCCIONES PARA GENERAR CONTRASEÑA DE APLICACIÓN:

PASO 1: Activar verificación en 2 pasos
   1. Ve a: https://myaccount.google.com/security
   2. Busca "Verificación en 2 pasos"
   3. Actívala (requiere tu teléfono)

PASO 2: Generar contraseña de aplicación
   1. Ve a: https://myaccount.google.com/apppasswords
   2. En "Seleccionar app": elige "Correo"
   3. En "Seleccionar dispositivo": elige "Otro (nombre personalizado)"
   4. Escribe: "SAC Sistema"
   5. Click en "Generar"
   6. Google te mostrará una contraseña de 16 caracteres (ejemplo: abcd efgh ijkl mnop)
   7. COPIA esa contraseña (con o sin espacios)
   8. Pégala arriba donde dice "REEMPLAZAR_CON_CONTRASEÑA_APP"

PASO 3: Guardar y probar
   1. Guarda este archivo
   2. Ve a tu sitio y prueba recuperar contraseña
   3. Debería funcionar inmediatamente

NOTA: NO uses tu contraseña normal de Gmail, solo funcionará con la contraseña de aplicación.
*/

// Configuración general
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";
$config['wordwrap'] = TRUE;

// Validación
$config['validate'] = TRUE;

// Prioridad del mensaje (1 = alta, 3 = normal, 5 = baja)
$config['priority'] = 3;
