<?php

// Recebendo parametros
$id_chat = $_POST['chat'];
$mensagem = $_POST['mensagem'];

// Credenciais do telegram
$apiToken = "YOUR KEY";
$data = [
    'chat_id' => $id_chat, 
    'text' => $mensagem
];


// Enviando mensagem
$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?" .
http_build_query($data) );

?>
