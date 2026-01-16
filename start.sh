#!/bin/bash

echo "🚀 Iniciando despliegue de la aplicación Taxi..."
echo ""

# Verificar si Docker está instalado
if ! command -v docker &> /dev/null; then
    echo "❌ Docker no está instalado. Instalando..."
    curl -fsSL https://get.docker.com -o get-docker.sh
    sudo sh get-docker.sh
    sudo usermod -aG docker $USER
    echo "✅ Docker instalado correctamente"
fi

# Verificar si Docker Compose está instalado
if ! command -v docker-compose &> /dev/null; then
    echo "❌ Docker Compose no está instalado. Instalando..."
    sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
    sudo chmod +x /usr/local/bin/docker-compose
    echo "✅ Docker Compose instalado correctamente"
fi

echo ""
echo "📦 Construyendo contenedores..."
docker-compose down 2>/dev/null
docker-compose up -d --build

echo ""
echo "⏳ Esperando que los servicios estén listos..."
sleep 10

echo ""
echo "✅ Despliegue completado!"
echo ""
echo "📍 Accede a la aplicación en:"
echo "   🌐 Aplicación: http://localhost:8080"
echo "   🗄️  PHPMyAdmin: http://localhost:8081"
echo ""
echo "🔐 Credenciales de MySQL:"
echo "   Usuario: root"
echo "   Contraseña: taxi_password_2026"
echo ""
echo "📊 Para ver los logs:"
echo "   docker-compose logs -f"
echo ""
echo "🛑 Para detener:"
echo "   docker-compose down"
echo ""
