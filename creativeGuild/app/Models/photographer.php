<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photographer extends Model
{
    use HasFactory;
    public function albums(){
        return $this->hasMany(Picture::class);
    }
}