<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class TiketRespon
 * 
 * @property int $tiket_respon_id
 * @property int $tiket_respon_tiket_id
 * @property float $tiket_respon_persentase
 * @property string $tiket_respon_alias
 * @property string $tiket_respon_letak_respon
 * @property int $tiket_respon_objek_galeri_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\ObjekGaleri $objek_galeri
 * @property \App\Models\Tiket $tiket
 *
 * @package App\Models
 */
class TiketRespon extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'tiket_respon';
	protected $primaryKey = 'tiket_respon_id';

	protected $casts = [
		'tiket_respon_tiket_id' => 'int',
		'tiket_respon_persentase' => 'float',
		'tiket_respon_objek_galeri_id' => 'int'
	];

	protected $fillable = [
		'tiket_respon_tiket_id',
		'tiket_respon_persentase',
		'tiket_respon_alias',
		'tiket_respon_letak_respon',
		'tiket_respon_objek_galeri_id'
	];

	public function objek_galeri()
	{
		return $this->belongsTo(\App\Models\ObjekGaleri::class, 'tiket_respon_objek_galeri_id');
	}

	public function tiket()
	{
		return $this->belongsTo(\App\Models\Tiket::class, 'tiket_respon_tiket_id');
	}
}
