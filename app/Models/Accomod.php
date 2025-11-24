<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accomod extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'start_date',
        'finish_date',
        'price',
        'user_id',
        'persons'
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
