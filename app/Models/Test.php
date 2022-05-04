<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table ='tests';

    public function getParent()
    {
         if ( ! $this->getAttribute('users_id')) {
             return null;
         }
         return $this->getAttribute('parent');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function parent()
     {
         return $this->belongsTo(User::class, 'users_id');
     }
}
