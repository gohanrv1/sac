# DESPLIEGUE EN EASYPANEL - GUÍA RÁPIDA

## URL de Producción
https://electo-sac.fxtfoe.easypanel.host/

## Pasos para Desplegar en EasyPanel

### 1. Conectar al Servidor EasyPanel
```bash
# Acceder a EasyPanel dashboard
https://panel.fxtfoe.easypanel.host/ (o la URL de tu panel)
```

### 2. Crear Nuevo Proyecto
- Click en "New Project"
- Nombre: sac-taxi
- Seleccionar tipo: "Docker Compose"

### 3. Configuración de Docker Compose
Usar el archivo `docker-compose.easypanel.yml` o copiar esta configuración:

```yaml
version: '3.8'

services:
  web:
    build: .
    container_name: sac_app
    ports:
      - "80:80"
    volumes:
      - ./uploads:/var/www/html/uploads
      - ./excel:/var/www/html/excel
      - ./descarga:/var/www/html/descarga
      - ./application/logs:/var/www/html/application/logs
    environment:
      - DB_HOST=db
      - DB_NAME=infotaxi
      - DB_USER=root
      - DB_PASS=SacTaxi2026Secure!
      - APP_ENV=production
      - BASE_URL=https://electo-sac.fxtfoe.easypanel.host/
    depends_on:
      - db
    restart: always

  db:
    image: mysql:8.0
    container_name: sac_db
    environment:
      MYSQL_ROOT_PASSWORD: SacTaxi2026Secure!
      MYSQL_DATABASE: infotaxi
      MYSQL_USER: taxi_user
      MYSQL_PASSWORD: SacTaxi2026Secure!
    volumes:
      - mysql_data:/var/lib/mysql
      - ./u990140860_infotaxi.sql:/docker-entrypoint-initdb.d/init.sql
    restart: always
    command: --default-authentication-plugin=mysql_native_password

volumes:
  mysql_data:
```

### 4. Configurar Repositorio GitHub
- Repository URL: https://github.com/gohanrv1/sac.git
- Branch: main
- Build context: /

### 5. Configurar Dominio
En EasyPanel:
- Ir a "Domains"
- Agregar: electo-sac.fxtfoe.easypanel.host
- Habilitar HTTPS automático (Let's Encrypt)

### 6. Variables de Entorno (Ya configuradas en docker-compose)
```
DB_HOST=db
DB_NAME=infotaxi
DB_USER=root
DB_PASS=SacTaxi2026Secure!
APP_ENV=production
BASE_URL=https://electo-sac.fxtfoe.easypanel.host/
```

### 7. Desplegar
```bash
# Desde el dashboard de EasyPanel:
# 1. Click en "Deploy"
# 2. Esperar a que se construya la imagen
# 3. Los contenedores se iniciarán automáticamente
```

### 8. Verificar el Despliegue
- Acceder a: https://electo-sac.fxtfoe.easypanel.host/
- Verificar que carga el login
- Probar funcionalidad de importación
- Revisar logs en EasyPanel si hay errores

## IMPORTANTE: Seguridad

### Cambiar Contraseñas Antes de Desplegar
En `docker-compose.easypanel.yml` cambiar:
```yaml
MYSQL_ROOT_PASSWORD: TU_CONTRASEÑA_SEGURA_AQUI
MYSQL_PASSWORD: TU_CONTRASEÑA_SEGURA_AQUI
DB_PASS: TU_CONTRASEÑA_SEGURA_AQUI
```

### Configurar HTTPS
EasyPanel maneja HTTPS automáticamente con Let's Encrypt, pero verifica:
- El dominio está correctamente apuntado
- El certificado SSL está activo
- El .htaccess fuerza HTTPS (ya configurado)

## Estructura de Volúmenes Persistentes
```
uploads/          - Archivos subidos por usuarios
excel/            - Archivos Excel importados
descarga/         - Plantillas descargables
application/logs/ - Logs de la aplicación
mysql_data/       - Datos de MySQL (persistente)
```

## Comandos Útiles en EasyPanel

### Ver Logs
```bash
# En el dashboard de EasyPanel:
# 1. Ir a "Logs"
# 2. Seleccionar servicio (web o db)
# 3. Ver logs en tiempo real
```

### Reiniciar Servicios
```bash
# Desde EasyPanel dashboard:
# 1. Ir a "Services"
# 2. Click en el servicio
# 3. Click "Restart"
```

### Acceder a la Base de Datos
```bash
# Opción 1: Desde el contenedor
docker exec -it sac_db mysql -u root -p

# Opción 2: Usar herramienta de EasyPanel
# Ir a "Database" en el dashboard
```

## Backup de Base de Datos
```bash
# Exportar base de datos
docker exec sac_db mysqldump -u root -pSacTaxi2026Secure! infotaxi > backup_$(date +%Y%m%d_%H%M%S).sql

# Importar base de datos
docker exec -i sac_db mysql -u root -pSacTaxi2026Secure! infotaxi < backup.sql
```

## Solución de Problemas Comunes

### Error: "Base de datos no conecta"
1. Verificar variables de entorno DB_HOST, DB_USER, DB_PASS
2. Revisar logs del contenedor db: `docker logs sac_db`
3. Verificar que el servicio db esté corriendo

### Error: "404 Not Found"
1. Verificar que .htaccess esté en la raíz
2. Verificar que mod_rewrite esté habilitado (ya está en Dockerfile)
3. Revisar rutas en config.php

### Error: "HTTPS no funciona"
1. Verificar dominio en EasyPanel
2. Verificar certificado SSL
3. Verificar reglas en .htaccess (ya configuradas)

### Error: "Importar no funciona"
1. Verificar permisos en uploads/, excel/, descarga/
2. Revisar logs en application/logs/
3. Verificar que PHPExcel esté correctamente cargado

## Monitoreo

### Verificar Estado de Servicios
En el dashboard de EasyPanel verás:
- Estado de contenedores (Running/Stopped)
- Uso de CPU y memoria
- Logs en tiempo real
- Tráfico de red

### Alertas Recomendadas
- CPU > 80%
- Memoria > 90%
- Disco > 85%
- Servicio caído

## Actualizaciones

### Desplegar Nueva Versión
```bash
# 1. Hacer cambios en el código localmente
# 2. Commit y push a GitHub
git add .
git commit -m "Descripción de cambios"
git push origin main

# 3. En EasyPanel dashboard:
# Click en "Rebuild" o "Redeploy"
```

## Contacto y Soporte
- Repositorio: https://github.com/gohanrv1/sac
- Panel: https://panel.fxtfoe.easypanel.host/
- Aplicación: https://electo-sac.fxtfoe.easypanel.host/

---
**Última actualización:** 2025
**Versión de Docker:** 20.10+
**Versión de PHP:** 8.1
**Versión de MySQL:** 8.0
