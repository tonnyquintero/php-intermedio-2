<?php

session_start();

echo "hello login";

 $users = [
    array(
        "username" => "Retaxito",
        "email" => "estnoesmiemail@retax.com"
    ),
    array(
        "username" => "Mr Michi",
        "email" => "estnoesmiemail@MrMichi.com"
    )
    ];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
