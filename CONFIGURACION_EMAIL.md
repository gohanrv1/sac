# Configuración de Email para Recuperación de Contraseña

## ⚠️ IMPORTANTE: Configuración Requerida

Para que funcione el envío de correos (recuperación de contraseña, activación de usuarios, etc.), **DEBES configurar** el archivo:

📁 `application/config/email.php`

---

## 🔧 Configuración con Gmail/Google Workspace

### Paso 1: Preparar tu cuenta de Gmail

1. Ingresa a tu cuenta de Google
2. Ve a: https://myaccount.google.com/security
3. Activa "Verificación en 2 pasos"
4. Genera una "Contraseña de aplicación":
   - Ve a: https://myaccount.google.com/apppasswords
   - Selecciona "Correo" y "Otro (nombre personalizado)"
   - Escribe "SAC Sistema"
   - Copia la contraseña generada (16 caracteres)

### Paso 2: Editar el archivo de configuración

Abre el archivo `application/config/email.php` y reemplaza:

```php
$config['smtp_user'] = 'tu-email@gmail.com';  // ← Tu email de Gmail
$config['smtp_pass'] = 'xxxx xxxx xxxx xxxx';  // ← La contraseña de aplicación de 16 dígitos
```

**Ejemplo:**
```php
$config['smtp_user'] = 'sistema.sac@gmail.com';
$config['smtp_pass'] = 'abcd efgh ijkl mnop';
```

---

## 🔧 Configuración con otros proveedores SMTP

### Outlook/Hotmail

```php
$config['smtp_host'] = 'smtp-mail.outlook.com';
$config['smtp_user'] = 'tu-email@outlook.com';
$config['smtp_pass'] = 'tu-contraseña';
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls';
```

### cPanel/Hosting compartido

```php
$config['smtp_host'] = 'mail.tudominio.com';
$config['smtp_user'] = 'noreply@tudominio.com';
$config['smtp_pass'] = 'tu-contraseña';
$config['smtp_port'] = 587;  // o 465 para SSL
$config['smtp_crypto'] = 'tls';  // o 'ssl'
```

### SendGrid (API)

```php
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_user'] = 'apikey';
$config['smtp_pass'] = 'tu-api-key-de-sendgrid';
$config['smtp_port'] = 587;
$config['smtp_crypto'] = 'tls';
```

---

## ✅ Probar la Configuración

### Opción 1: Desde la aplicación

1. Ve a la página de login
2. Haz clic en "Recuperar Contraseña"
3. Ingresa un email registrado
4. Verifica que llegue el correo

### Opción 2: Script de prueba

Crea un archivo `test_email.php` en la raíz del proyecto:

```php
<?php
require_once 'index.php';

$CI =& get_instance();
$CI->load->library('email');

$config = array('mailtype' => 'html');
$CI->email->initialize($config);

$CI->email->from('tu-email@gmail.com', 'Test SAC');
$CI->email->to('destinatario@example.com');
$CI->email->subject('Test de Email SAC');
$CI->email->message('<h1>¡Email funcionando!</h1><p>La configuración es correcta.</p>');

if($CI->email->send()){
    echo "✅ Email enviado exitosamente!";
} else {
    echo "❌ Error al enviar email:<br>";
    echo $CI->email->print_debugger();
}
?>
```

Luego accede a: `http://tu-dominio.com/test_email.php`

---

## 🐛 Solución de Problemas

### Error: "SMTP connect() failed"

**Causas comunes:**
- Usuario o contraseña incorrectos
- Puerto bloqueado por firewall
- SSL/TLS mal configurado

**Soluciones:**
1. Verifica usuario y contraseña
2. Prueba cambiar el puerto (587 ↔ 465)
3. Cambia crypto entre 'tls' y 'ssl'
4. Si estás en hosting compartido, consulta con tu proveedor

### Error: "Authentication failed"

**Para Gmail:**
- Asegúrate de usar una "Contraseña de aplicación", NO tu contraseña normal
- Verifica que la verificación en 2 pasos esté activada

### El correo se marca como SPAM

**Soluciones:**
1. Usa un dominio verificado en el remitente
2. Configura registros SPF y DKIM en tu DNS
3. Usa un servicio SMTP profesional (SendGrid, Mailgun, etc.)

### Logs para debugging

Los errores de email se guardan en:
📁 `application/logs/log-YYYY-MM-DD.php`

Activa el logging en `application/config/config.php`:
```php
$config['log_threshold'] = 2;  // 0=off, 1=errors, 2=debug, 3=info, 4=all
```

---

## 📋 Checklist de Configuración

- [ ] Archivo `application/config/email.php` creado
- [ ] `smtp_user` configurado con tu email
- [ ] `smtp_pass` configurado con la contraseña correcta
- [ ] `smtp_host` y `smtp_port` correctos para tu proveedor
- [ ] Prueba de envío exitosa
- [ ] Verificar bandeja de entrada y spam del destinatario

---

## 🔒 Seguridad

**NUNCA subas el archivo `email.php` con credenciales reales a repositorios públicos.**

### Opción recomendada: Variables de entorno

1. Crea un archivo `.env` (añadir a `.gitignore`)
2. Usa una librería como `vlucas/phpdotenv`
3. Lee las credenciales desde variables de entorno

```php
// En email.php
$config['smtp_user'] = getenv('SMTP_USER');
$config['smtp_pass'] = getenv('SMTP_PASS');
```

---

## 📞 Soporte

Si después de seguir esta guía aún tienes problemas:

1. Revisa los logs en `application/logs/`
2. Verifica la consola de desarrollador del navegador
3. Usa el script de prueba para obtener errores específicos
4. Contacta a tu proveedor de hosting si el problema persiste

---

**Fecha de actualización:** Enero 2026
**Sistema:** SAC - Sistema de Administración y Control
