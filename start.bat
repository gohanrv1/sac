@echo off
echo ========================================
echo   Iniciando aplicacion Taxi con Docker
echo ========================================
echo.

REM Verificar si Docker esta corriendo
docker info >nul 2>&1
if errorlevel 1 (
    echo ERROR: Docker no esta corriendo.
    echo Por favor inicia Docker Desktop.
    pause
    exit /b 1
)

echo Construyendo y levantando contenedores...
docker-compose down 2>nul
docker-compose up -d --build

echo.
echo Esperando que los servicios esten listos...
timeout /t 10 >nul

echo.
echo ========================================
echo   Despliegue completado exitosamente!
echo ========================================
echo.
echo Accede a la aplicacion en:
echo   Aplicacion: http://localhost:8080
echo   PHPMyAdmin: http://localhost:8081
echo.
echo Credenciales de MySQL:
echo   Usuario: root
echo   Password: taxi_password_2026
echo.
echo Para ver los logs:
echo   docker-compose logs -f
echo.
echo Para detener:
echo   docker-compose down
echo.
pause
