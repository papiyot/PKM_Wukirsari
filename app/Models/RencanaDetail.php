<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class RencanaDetail
 * 
 * @property int $rencana_detail_id
 * @property int $rencana_detail_rencana_id
 * @property int $rencana_detail_objek_id
 * @property int $rencana_detail_peserta
 * @property float $rencana_detail_biaya
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Objek $objek
 * @property \App\Models\Rencana $rencana
 *
 * @package App\Models
 */
class RencanaDetail extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'rencana_detail';
	protected $primaryKey = 'rencana_detail_id';
	public $incrementing = false;

	protected $casts = [
		'rencana_detail_id' => 'int',
		'rencana_detail_rencana_id' => 'int',
		'rencana_detail_objek_id' => 'int',
		'rencana_detail_peserta' => 'int',
		'rencana_detail_biaya' => 'float'
	];

	protected $fillable = [
		'rencana_detail_id',
		'rencana_detail_rencana_id',
		'rencana_detail_objek_id',
		'rencana_detail_peserta',
		'rencana_detail_biaya'
	];

	public function objek()
	{
		return $this->belongsTo(\App\Models\Objek::class, 'rencana_detail_objek_id');
	}

	public function rencana()
	{
		return $this->belongsTo(\App\Models\Rencana::class, 'rencana_detail_rencana_id');
	}
}
