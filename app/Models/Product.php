<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'price',
        'stock',
        'images'
    ];

    protected $hidden = [
        'id'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function images(): Attribute
    {
        return new Attribute(
            get: fn($images) => json_decode($images),
            set: fn($images) => json_encode($images)
        );
    }

    public function toSearchableArray(): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
