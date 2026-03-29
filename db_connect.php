<?php
function loadEnvFile($filePath)
{
    if (!is_readable($filePath)) {
        return;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#') {
            continue;
        }

        $pos = strpos($line, '=');
        if ($pos === false) {
            continue;
        }

        $name = trim(substr($line, 0, $pos));
        $value = trim(substr($line, $pos + 1));
        $value = trim($value, "\"'");

        if ($name === '') {
            continue;
        }

        // 不覆盖系统环境变量，优先使用外部注入值（例如 Docker Compose）
        if (getenv($name) === false) {
            putenv($name . '=' . $value);
            $_ENV[$name] = $value;
        }
    }
}

function envOrDefault($key, $defaultValue)
{
    $value = getenv($key);
    if ($value === false || $value === '') {
        return $defaultValue;
    }

    return $value;
}

loadEnvFile(__DIR__ . '/.env');

$dbHost = envOrDefault('DB_HOST', 'localhost');
$dbUser = envOrDefault('DB_USER', 'root');
$dbPassword = envOrDefault('DB_PASSWORD', 'root');
$dbName = envOrDefault('DB_NAME', 'xscj');

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die('连接失败: ' . $conn->connect_error);
}

$conn->query('SET NAMES gbk');
