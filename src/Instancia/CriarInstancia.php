<?php

namespace Uazapi\Instancia;

class CriarInstancia
{
    public function __construct(
        private string $servidor_url,
        private string $instanceName,
        private string $apikey,
        private string $number
    ) {}
}