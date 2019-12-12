<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class PaketDetail
 * 
 * @property int $paket_detail_id
 * @property int $paket_detail_paket_id
 * @property int $paket_detail_objek_id
 * @property float $paket_detail_biaya
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Objek $objek
 * @property \App\Models\Paket $paket
 *
 * @package App\Models
 */
class PaketDetail extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'paket_detail';
	protected $primaryKey = 'paket_detail_id';

	protected $casts = [
		'paket_detail_paket_id' => 'int',
		'paket_detail_objek_id' => 'int',
		'paket_detail_biaya' => 'float'
	];

	protected $fillable = [
		'paket_detail_paket_id',
		'paket_detail_objek_id',
		'paket_detail_biaya'
	];

	public function objek()
	{
		return $this->belongsTo(\App\Models\Objek::class, 'paket_detail_objek_id');
	}

	public function paket()
	{
		return $this->belongsTo(\App\Models\Paket::class, 'paket_detail_paket_id');
	}
}
