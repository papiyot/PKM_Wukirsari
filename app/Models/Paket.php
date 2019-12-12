<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Paket
 * 
 * @property int $paket_id
 * @property string $paket_nama
 * @property string $paket_letak_deskripsi
 * @property float $paket_biaya
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\PaketDetail[] $paket_details
 *
 * @package App\Models
 */
class Paket extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'paket';
	protected $primaryKey = 'paket_id';

	protected $casts = [
		'paket_biaya' => 'float'
	];

	protected $fillable = [
		'paket_nama',
		'paket_letak_deskripsi',
		'paket_biaya'
	];

	public function paket_details()
	{
		return $this->hasMany(\App\Models\PaketDetail::class, 'paket_detail_paket_id');
	}
}
