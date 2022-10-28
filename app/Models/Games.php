<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    public function publisher() {
        return $this->belongsTo(Publisher::class, 'pengembang_id' );
        } 
        protected $table = "games";
        protected $fillable = ['id', 'judul', 'tahun', 'platform', 'pengembang_id'];
}
