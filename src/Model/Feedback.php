<?php

namespace Alura\Solid\Model;

use DomainException;

class Feedback {

    /** @var int */
    private $nota;

    /** @var string|null */
    private $depoimento;

    public function __construct(int $nota, ?string $depoimento) {
        if ($nota < 9 && empty($depoimento))
            throw new DomainException('Depoimento obrigatório');

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

}