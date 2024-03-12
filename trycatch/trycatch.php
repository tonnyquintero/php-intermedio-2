<?php

try {
    $resultado = 20  / 0;
    echo $resultado;
} catch (Throwable $e) {
    echo $e->getMessage();
    echo "\n";
    echo "ups algo salió mal con tu operación";
    echo "\n";
}

echo "esto pasa si o si";
echo "\n";