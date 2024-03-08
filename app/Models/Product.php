<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Client\Request;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'image_url',
        'description',
        'unit_price',
        'vehicle_id'
    ];

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function Brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function Vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
