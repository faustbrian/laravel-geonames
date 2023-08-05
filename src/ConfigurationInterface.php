<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

interface ConfigurationInterface
{
    public function getPostalCodesTableName(): string;
}
