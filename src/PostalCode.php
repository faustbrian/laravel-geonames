<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class PostalCode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'country_code',
        'postal_code',
        'place_name',
        'admin_name1',
        'admin_code1',
        'admin_name2',
        'admin_code2',
        'admin_name3',
        'admin_code3',
        'latitude',
        'longitude',
        'accuracy',
    ];

    /**
     * Get the table associated with the model.
     */
    public function getTable(): string
    {
        return GeoNames::getPostalCodesTableName();
    }
}
