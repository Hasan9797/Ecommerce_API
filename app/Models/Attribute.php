<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Attribute extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['key', 'value'];
    public array $translatable = ['key', 'value'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
