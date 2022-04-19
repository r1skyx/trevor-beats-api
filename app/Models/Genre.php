<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beat;

class Genre extends Model
{
    use HasFactory;

    public function beats(){
        return $this->hasMany(Beat::class);
    }
}
