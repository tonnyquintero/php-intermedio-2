<?php

echo "hello cookie";

setcookie(
    name: "subdomain_cookie",
    value: "esta cookie solo esta disponible en configuracion",
    expires_or_options: time() + 60 * 60 * 24,
    path: "/configuracion",
    domain: "localhost",
    secure: false,
    httponly: true,
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";