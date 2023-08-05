<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getPostalCodesTableName()
 */
final class GeoNames extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ConfigurationInterface::class;
    }
}
