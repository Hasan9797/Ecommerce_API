<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static paginate(int $int)
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'order'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public $timestamps = true;
}
