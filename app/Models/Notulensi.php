<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
	use HasFactory;

	protected $dates = ['tgl'];

	public function pemimpin()
	{
		return $this->belongsTo(User::class, 'id_pemimpin_rapat');
	}

	public function jenis()
	{
		return $this->belongsTo(JenisRapat::class, 'id_jenis_rapat');
	}

	public function notulen()
	{
		return $this->belongsTo(User::class, 'notulen_id');
	}
}
