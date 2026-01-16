@echo off
REM Script de backup para Windows

set BACKUP_DIR=backups
set TIMESTAMP=%date:~-4%%date:~3,2%%date:~0,2%_%time:~0,2%%time:~3,2%%time:~6,2%
set TIMESTAMP=%TIMESTAMP: =0%
set DB_CONTAINER=taxi_db
set DB_NAME=infotaxi
set DB_USER=root
set DB_PASS=taxi_password_2026

REM Crear directorio de backups
if not exist %BACKUP_DIR% mkdir %BACKUP_DIR%

echo ====================================
echo   Backup de Base de Datos
echo ====================================
echo.

echo Creando backup...
docker exec %DB_CONTAINER% mysqldump -u %DB_USER% -p%DB_PASS% %DB_NAME% > "%BACKUP_DIR%\backup_%TIMESTAMP%.sql"

if %errorlevel% equ 0 (
    echo.
    echo Backup completado exitosamente!
    echo Archivo: backup_%TIMESTAMP%.sql
    echo Ubicacion: %BACKUP_DIR%
) else (
    echo.
    echo ERROR: No se pudo crear el backup
)

echo.
pause
