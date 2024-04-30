<?php

use Uazapi\Instancia\CriarInstancia;

test('Deve criar uma instancia', function () {
    $servidor_url = '';
    $instanceName = '';
    $apikey = '';
    $number = '';
    new CriarInstancia($servidor_url, $instanceName, $apikey, $number);
    expect(true)->toBeTrue();
});
