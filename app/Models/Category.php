<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'subtitle',
        'icons',
        'sqr',
        'image',
        'persons',
        'is_main'
    ];

    public function accomods() : HasMany
    {
        return $this->hasMany(Accomod::class);
    }

    public function orders() : HasMany
    {
        return $this->hasMany(Order::class);
    }
}
