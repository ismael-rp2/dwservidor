<?php

namespace Ismael\proyecto1\Class;

use Ismael\proyecto1\Class\Content;
use Ismael\proyecto1\Enums\MovieClassification;

class Pelicula extends Content
{
    private int $length;
    private string $synopsis;
    private array $type;
    private MovieClassification $classification;

    public function __construct() {
        parent::__construct(Uuid::uuid4());
    }
}