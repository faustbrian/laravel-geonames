<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Support\LazyCollection;

interface ReaderInterface
{
    public function getRecords(string $path): LazyCollection;
}
