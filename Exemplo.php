<?php

/*
Para que o composer consiga identificar classes/arquivos que nao seguem a PSR-4,
podemos mapear no composer.json, dentro do "autoload" que criamos e colocar
"classmap" e no cmd "composer dumpautoload".
Curiosidade: O composer guarda isso no arquivo vendor/composer/autoload_classmap
*/

class Exemplo
{
    static public function exemplo()
    {
        echo 'Exemplo' . PHP_EOL;
    }
}

class Exemplo2
{
    static public function exemplo2()
    {
        echo 'Exemplo2' . PHP_EOL;
    }
}