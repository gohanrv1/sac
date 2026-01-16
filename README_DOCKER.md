# 🚀 Despliegue con Docker

Esta aplicación está configurada para desplegarse automáticamente usando Docker y Docker Compose.

## 📋 Requisitos Previos

- Docker instalado (versión 20.10 o superior)
- Docker Compose instalado (versión 1.29 o superior)

## 🛠️ Instalación y Despliegue

### 1. Clonar o subir el proyecto al servidor

```bash
cd /ruta/del/proyecto
```

### 2. Configurar la base de datos (opcional)

Si necesitas cambiar las credenciales de la base de datos, edita el archivo `docker-compose.yml`:

```yaml
environment:
  MYSQL_ROOT_PASSWORD: tu_password
  MYSQL_DATABASE: tu_base_datos
```

### 3. Construir y levantar los contenedores

```bash
docker-compose up -d --build
```

Este comando:
- ✅ Construye la imagen de PHP con Apache
- ✅ Crea el contenedor de MySQL
- ✅ Importa automáticamente la base de datos
- ✅ Levanta PHPMyAdmin para administración
- ✅ Configura todos los permisos necesarios

### 4. Verificar que los contenedores estén corriendo

```bash
docker-compose ps
```

Deberías ver 3 contenedores activos:
- `taxi_app` (Aplicación web)
- `taxi_db` (Base de datos MySQL)
- `taxi_phpmyadmin` (Administrador de BD)

## 🌐 Acceso a la Aplicación

Una vez desplegado, puedes acceder a:

- **Aplicación principal**: http://localhost:8080
- **PHPMyAdmin**: http://localhost:8081
  - Usuario: `root`
  - Contraseña: `taxi_password_2026`

## 🔧 Comandos Útiles

### Ver logs en tiempo real
```bash
docker-compose logs -f web
```

### Reiniciar servicios
```bash
docker-compose restart
```

### Detener servicios
```bash
docker-compose down
```

### Detener y eliminar volúmenes (⚠️ Elimina la base de datos)
```bash
docker-compose down -v
```

### Acceder al contenedor de la aplicación
```bash
docker exec -it taxi_app bash
```

### Acceder al contenedor de MySQL
```bash
docker exec -it taxi_db mysql -u root -p
```

### Ver uso de recursos
```bash
docker stats
```

## 🔄 Actualizar la Aplicación

Si haces cambios en el código:

```bash
# Método 1: Sin reconstruir (cambios menores)
docker-compose restart web

# Método 2: Reconstruir imagen (cambios mayores)
docker-compose up -d --build web
```

## 📦 Backup de la Base de Datos

### Crear backup
```bash
docker exec taxi_db mysqldump -u root -ptaxi_password_2026 infotaxi > backup_$(date +%Y%m%d_%H%M%S).sql
```

### Restaurar backup
```bash
docker exec -i taxi_db mysql -u root -ptaxi_password_2026 infotaxi < backup.sql
```

## 🚀 Despliegue en Servidor de Producción

### 1. En el servidor, instala Docker:

```bash
# Ubuntu/Debian
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
sudo usermod -aG docker $USER

# Instalar Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

### 2. Sube los archivos al servidor:

```bash
# Desde tu máquina local
scp -r /ruta/proyecto usuario@servidor:/var/www/taxi
```

### 3. En el servidor:

```bash
cd /var/www/taxi
docker-compose up -d --build
```

### 4. Configurar dominio (opcional):

Modifica el puerto 8080 a 80 en `docker-compose.yml`:

```yaml
ports:
  - "80:80"
```

## 🔐 Seguridad

Para producción, **CAMBIA LAS CONTRASEÑAS** en `docker-compose.yml`:

```yaml
environment:
  MYSQL_ROOT_PASSWORD: TU_PASSWORD_SEGURO_AQUI
  MYSQL_PASSWORD: TU_PASSWORD_SEGURO_AQUI
```

## 🐛 Solución de Problemas

### Error de permisos
```bash
docker exec taxi_app chown -R www-data:www-data /var/www/html
docker exec taxi_app chmod -R 755 /var/www/html
```

### La base de datos no se importa
```bash
docker exec -i taxi_db mysql -u root -ptaxi_password_2026 infotaxi < u990140860_infotaxi.sql
```

### Puerto ocupado
Si el puerto 8080 está en uso, cambia el puerto en `docker-compose.yml`:
```yaml
ports:
  - "8082:80"  # Cambia 8080 por otro puerto
```

## 📊 Monitoreo

Ver estado de salud:
```bash
docker-compose ps
docker inspect taxi_app
```

## 🔄 Actualizaciones Automáticas

Para configurar actualizaciones automáticas, puedes usar Watchtower:

```bash
docker run -d \
  --name watchtower \
  -v /var/run/docker.sock:/var/run/docker.sock \
  containrrr/watchtower
```

## 📞 Soporte

Si tienes problemas, revisa los logs:

```bash
docker-compose logs web
docker-compose logs db
```
