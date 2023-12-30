<?php

// Die angeforderte URL extrahieren
$request_uri = $_SERVER['REQUEST_URI'];

$templatepath = "/templates/";
$functionpath = "/function/";

// Nur den Pfadteil der URL erhalten (ohne Domain und Query-Parameter)
$path = parse_url($request_uri, PHP_URL_PATH);

// Die ersten 25 Zeichen vom Pfad abschneiden
$path = substr($path, 41);


// Routen definieren
$routes = [
    '' => $templatepath . 'start.php',
    'submit' => $functionpath . 'submit.php',
    'create' => $templatepath . 'create.php',


];

// Überprüfen, ob die angeforderte Route vorhanden ist
if (array_key_exists($path, $routes)) {
    require_once __DIR__ . $routes[$path];
} else {
    // Wenn die Route nicht gefunden wurde, behandeln Sie dies entsprechend
    require_once __DIR__ . $templatepath ."404.php";
}