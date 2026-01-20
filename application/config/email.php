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
// MÉTODO ACTUAL: Cambiar según necesites
// ========================================

// OPCIÓN 1: mail() - Simple pero puede ir a spam
$config['protocol'] = 'mail';

// OPCIÓN 2: Gmail SMTP (descomentar estas líneas y comentar la de arriba)
// IMPORTANTE: Debes usar una CONTRASEÑA DE APLICACIÓN, NO tu contraseña de Gmail
/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'rv.gohan3@gmail.com';
$config['smtp_pass'] = 'xxxx xxxx xxxx xxxx';  // Contraseña de aplicación de 16 dígitos
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls';
$config['smtp_timeout'] = 30;
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
