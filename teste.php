<?php

require 'vendor/autoload.php';
/*
Exemplo2::exemplo2();
exit()
;
*/
/*
exibir('oi');
exibir('testando funcao');
*/
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Nando\BuscadorDeCursos\Buscador;
/*
require 'src/Buscador.php'; Para fazer o composer carregar nossos arquivos, temos que ir no arquivo composer.json e adicionar a "função" autoload. Para atualizar o autoload, usar o comando no "composer dumpautoload" no cmd
*/
$client = new Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

$crawler = new Crawler();
$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar ('/cursos-online-programacao/java');

foreach ($cursos as $curso){
    echo $curso->textContent . PHP_EOL;    // Já que o $curso nao é uma string, e sim um elemento do DOM, entao preciso fazer um textContent

}

/*
$resposta = $client->request('GET', '/cursos-online-programacao/php');


$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');
*/
