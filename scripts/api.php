<?php
// Chave da API
$apiKey = 'a6ad28861bc24c4ea431a3badade37b9';

// Data atual
$dataAtual = date('Y-m-d', strtotime('-1 day'));

// URL da API
$url = "https://newsapi.org/v2/everything?q=tech&from=$dataAtual&sortBy=popularity&apiKey=$apiKey";

// Faz a requisição para a API
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Your-User-Agent' // Substitua "Your-User-Agent" pelo valor adequado
]);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);


// Envia a resposta como JSON
header('Content-Type: application/json');
echo $response;
?>
