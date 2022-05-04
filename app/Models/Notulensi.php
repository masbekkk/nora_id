<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
    use HasFactory;

    public function pemimpin()
    {
        return $this->belongsTo(User::class, 'id_pemimpin_rapat');
    }
}
