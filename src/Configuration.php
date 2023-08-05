<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Support\Facades\Config;
use TypeError;

final class Configuration implements ConfigurationInterface
{
    public function getPostalCodesTableName(): string
    {
        return $this->getStringValue('geonames.tables.postal_codes');
    }

    private function getStringValue(string $key): string
    {
        $value = Config::get($key);

        if (\is_string($value)) {
            return $value;
        }

        throw new TypeError("Configuration value '{$key}' must be a string.");
    }
}
