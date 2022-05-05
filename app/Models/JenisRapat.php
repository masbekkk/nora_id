<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisRapat extends Model
{
    use HasFactory;

    public function notul()
    {
        return $this->hasMany(Notulensi::class, 'id');
    }
}
