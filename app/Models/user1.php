<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    use HasFactory;

public function account(){
    return $this->hasOne(account::class);
}



}
