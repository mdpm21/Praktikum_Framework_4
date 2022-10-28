<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Publisher extends Model
{
    public function Games() {
        return $this->hasMany(Games::class);
        }
    use HasFactory;
}
