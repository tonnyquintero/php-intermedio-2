<?php

if ( !isset( $_COOKIE["example_cookie"] )) {
    # code...
    setcookie(
        name: "example_cookie",
        value: "un michi salvaje",
        expires_or_options: 0,
        path: "/",
        domain: "localhost",
        secure: false,
        httponly: true,
    );
    
    echo "cookie creada";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>