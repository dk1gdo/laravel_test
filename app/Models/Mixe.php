<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mixe extends Model
{

    public function posts() {
        return $this->belongsToMany(Post::class, 'foreign_key');
    }

    use HasFactory;
}
