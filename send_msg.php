<?php

// Recebendo parametros
$id_chat = $_POST['chat'];
$mensagem = $_POST['mensagem'];

// Credenciais do telegram
$apiToken = "5663540695:AAG8IzQ0KqHTH9W-KFkvplwG3xmBdsVJKbc";
$data = [
    'chat_id' => $id_chat, 
    'text' => $mensagem
];


// Enviando mensagem
$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?" .
http_build_query($data) );

?>