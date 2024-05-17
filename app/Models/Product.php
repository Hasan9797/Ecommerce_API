<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'price', 'description', 'category_id'];

    public array $translatable = ['name', 'description'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(Attribute::class);
    }

    public function stock(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
