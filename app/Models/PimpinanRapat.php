<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PimpinanRapat extends Model
{
    use HasFactory;

    public function notulensi()
    {
        return $this->hasMany(Notulensi::class, 'id');
    }
}
