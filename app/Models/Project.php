<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $guarded = [];
     protected $casts = [
        'tech_stack'=> 'array',
        'is_published'=> 'boolean',
     ];

    public function user():BelongsTo
{
    return $this->belongsTo(User::class);
}

}


