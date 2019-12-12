<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Rencana
 * 
 * @property int $rencana_id
 * @property string $rencana_nama
 * @property \Carbon\Carbon $rencana_pelaksanaan
 * @property string $rencana_jenis
 * @property int $rencana_peserta
 * @property int $rencana_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\RencanaDetail[] $rencana_details
 *
 * @package App\Models
 */
class Rencana extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'rencana';
	protected $primaryKey = 'rencana_id';
	public $incrementing = false;

	protected $casts = [
		'rencana_id' => 'int',
		'rencana_peserta' => 'int',
		'rencana_by' => 'int'
	];

	protected $dates = [
		'rencana_pelaksanaan'
	];

	protected $fillable = [
		'rencana_id',
		'rencana_nama',
		'rencana_pelaksanaan',
		'rencana_jenis',
		'rencana_peserta',
		'rencana_by'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'rencana_by');
	}

	public function rencana_details()
	{
		return $this->hasMany(\App\Models\RencanaDetail::class, 'rencana_detail_rencana_id');
	}
}
