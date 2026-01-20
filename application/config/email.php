<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email Configuration
| -------------------------------------------------------------------------
| Configuración de email para CodeIgniter
| 
| Para usar Gmail/Google Workspace:
| - Activar "Verificación en 2 pasos" en tu cuenta Google
| - Generar una "Contraseña de aplicación" en: https://myaccount.google.com/apppasswords
| - Usar esa contraseña en smtp_pass
|
| Para otros servicios SMTP, ajustar smtp_host, smtp_port según el proveedor
*/

// Protocolo de envío
$config['protocol'] = 'smtp';

// Configuración SMTP - REEMPLAZAR CON TUS DATOS
$config['smtp_host'] = 'smtp.gmail.com';  // Cambiar según tu proveedor de email
$config['smtp_user'] = 'rv.gohan3@gmail.com';  // CAMBIAR: Tu email completo
$config['smtp_pass'] = '98020958669';    // CAMBIAR: Contraseña de aplicación de Gmail
$config['smtp_port'] = 587;                    // 587 para TLS, 465 para SSL
$config['smtp_crypto'] = 'tls';                // 'tls' o 'ssl'
$config['smtp_timeout'] = 30;

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
