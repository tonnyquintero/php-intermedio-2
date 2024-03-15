<?php

$page = $_GET["page"] ?? null;

switch ($page) {
    case 'contact':
        # code...
        require("pages/contact.php");
        break;
    case 'services';
        require("pages/services.php");
        break;
    default:
        # code...
        require("pages/home.php");
        break;
}