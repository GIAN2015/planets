<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class planets extends Model
{
    use HasFactory;
    protected function name(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }
    protected $fillable = [
        'name',
        'size',
        'description',
        'moons',
        'image',
        'position',

    ];

    public function getRouteKeyName()
    {
        return 'name'
    ;
    }

}
