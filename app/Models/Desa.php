<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Desa
 * 
 * @property int $desa_id
 * @property string $desa_nama
 * @property string $desa_alamat
 * @property string $desa_koordinat
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Objek[] $objeks
 *
 * @package App\Models
 */
class Desa extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'desa';
	protected $primaryKey = 'desa_id';

	protected $fillable = [
		'desa_nama',
		'desa_alamat',
		'desa_koordinat'
	];

	public function objeks()
	{
		return $this->hasMany(\App\Models\Objek::class, 'objek_desa_id');
	}
}
