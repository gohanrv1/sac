<?php
// Archivo de prueba para verificar detección de HTTPS
// Acceder a: https://electo-sac.fxtfoe.easypanel.host/test_https.php

echo "<h2>Verificación de Configuración HTTPS</h2>";

echo "<h3>Variables de Servidor Relevantes:</h3>";
echo "<pre>";
echo "HTTPS: " . (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'NO DEFINIDO') . "\n";
echo "HTTP_X_FORWARDED_PROTO: " . (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'NO DEFINIDO') . "\n";
echo "HTTP_X_FORWARDED_SSL: " . (isset($_SERVER['HTTP_X_FORWARDED_SSL']) ? $_SERVER['HTTP_X_FORWARDED_SSL'] : 'NO DEFINIDO') . "\n";
echo "SERVER_PORT: " . (isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : 'NO DEFINIDO') . "\n";
echo "REQUEST_SCHEME: " . (isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'NO DEFINIDO') . "\n";
echo "</pre>";

echo "<h3>Detección de HTTPS:</h3>";
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    || (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on')
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);

echo "<p><strong>¿Se detecta HTTPS?:</strong> " . ($is_https ? "SÍ ✓" : "NO ✗") . "</p>";

echo "<h3>Base URL que se generaría:</h3>";
$base_url = ($is_https ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
echo "<p><code>" . htmlspecialchars($base_url) . "</code></p>";

echo "<h3>Todas las Variables $_SERVER:</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
