<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'icon',
        'image_path',
        'price_info',
        'features',
        'order',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
