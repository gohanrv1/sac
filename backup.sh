#!/bin/bash

# Script de backup automático para la aplicación Taxi
# Uso: ./backup.sh

BACKUP_DIR="./backups"
TIMESTAMP=$(date +%Y%m%d_%H%M%S)
DB_CONTAINER="taxi_db"
DB_NAME="infotaxi"
DB_USER="root"
DB_PASS="taxi_password_2026"

# Crear directorio de backups si no existe
mkdir -p $BACKUP_DIR

echo "🔄 Iniciando backup de la base de datos..."

# Backup de la base de datos
docker exec $DB_CONTAINER mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > "$BACKUP_DIR/backup_$TIMESTAMP.sql"

if [ $? -eq 0 ]; then
    echo "✅ Backup completado: backup_$TIMESTAMP.sql"
    
    # Comprimir el backup
    gzip "$BACKUP_DIR/backup_$TIMESTAMP.sql"
    echo "📦 Backup comprimido: backup_$TIMESTAMP.sql.gz"
    
    # Mantener solo los últimos 7 backups
    cd $BACKUP_DIR
    ls -t backup_*.sql.gz | tail -n +8 | xargs -r rm
    echo "🧹 Backups antiguos eliminados (se mantienen los últimos 7)"
    
    # Mostrar tamaño del backup
    SIZE=$(du -h "backup_$TIMESTAMP.sql.gz" | cut -f1)
    echo "📊 Tamaño del backup: $SIZE"
else
    echo "❌ Error al crear el backup"
    exit 1
fi

echo ""
echo "✨ Proceso completado exitosamente"
