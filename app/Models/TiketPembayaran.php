<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class TiketPembayaran
 * 
 * @property int $tiket_pembayaran_id
 * @property int $tiket_pembayaran_tiket_id
 * @property \Carbon\Carbon $tiket_pembayaran_tanggal
 * @property string $tiket_pembayaran_metode
 * @property string $tiket_pembayaran_status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Tiket $tiket
 *
 * @package App\Models
 */
class TiketPembayaran extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'tiket_pembayaran';
	protected $primaryKey = 'tiket_pembayaran_id';
	public $incrementing = false;

	protected $casts = [
		'tiket_pembayaran_id' => 'int',
		'tiket_pembayaran_tiket_id' => 'int'
	];

	protected $dates = [
		'tiket_pembayaran_tanggal'
	];

	protected $fillable = [
		'tiket_pembayaran_id',
		'tiket_pembayaran_tiket_id',
		'tiket_pembayaran_tanggal',
		'tiket_pembayaran_metode',
		'tiket_pembayaran_status'
	];

	public function tiket()
	{
		return $this->belongsTo(\App\Models\Tiket::class, 'tiket_pembayaran_tiket_id');
	}
}
