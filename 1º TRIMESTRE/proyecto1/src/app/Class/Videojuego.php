<?php

namespace Ismael\proyecto1\Class;

use Ismael\proyecto1\Class\Content;
use Ismael\proyecto1\Enums\PlataformType;

class Videojuego extends Content
{
    private PlataformType $plataform;
    private int $players;

    /**
     * @param PlataformType $plataform
     * @param int $players
     */
    public function __construct(PlataformType $plataform, int $players)
    {
        $this->plataform = $plataform;
        $this->players = $players;
        parent::__construct(Uuid::uuid4());
    }


}