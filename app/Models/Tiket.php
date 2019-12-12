<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Tiket
 * 
 * @property int $tiket_id
 * @property \Carbon\Carbon $tiket_pesan
 * @property float $tiket_biaya
 * @property int $tiket_jumlah
 * @property float $tiket_diskon
 * @property int $tiket_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TiketPembayaran[] $tiket_pembayarans
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TiketRespon[] $tiket_respons
 *
 * @package App\Models
 */
class Tiket extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'tiket';
	protected $primaryKey = 'tiket_id';

	protected $casts = [
		'tiket_biaya' => 'float',
		'tiket_jumlah' => 'int',
		'tiket_diskon' => 'float',
		'tiket_by' => 'int'
	];

	protected $dates = [
		'tiket_pesan'
	];

	protected $fillable = [
		'tiket_pesan',
		'tiket_biaya',
		'tiket_jumlah',
		'tiket_diskon',
		'tiket_by'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'tiket_by');
	}

	public function tiket_pembayarans()
	{
		return $this->hasMany(\App\Models\TiketPembayaran::class, 'tiket_pembayaran_tiket_id');
	}

	public function tiket_respons()
	{
		return $this->hasMany(\App\Models\TiketRespon::class, 'tiket_respon_tiket_id');
	}
}
