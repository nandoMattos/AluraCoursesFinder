<?php
/*
O composer também pode ler arquivos que nao sejam classes. Basta ir no composer.json em "autoload" e colocar "file"
*/
function exibir(string $mensagem){
    echo $mensagem . PHP_EOL;
}