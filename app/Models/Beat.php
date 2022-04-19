<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Beat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genre(){
        return $this->hasOne(Genre::class);
    }
}
