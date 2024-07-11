<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class account extends Model
{
    use HasFactory;

    public function user1(): BelongsTo
    {
        return $this->belongsTo(user1::class);
    }




}
