<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

interface SeederInterface
{
    /**
     * Seed records into database.
     */
    public function seed(): void;
}
