<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    public function mixe() {
        return $this->belongsToMany(Mixe::class);
    }

    use HasFactory;
}
