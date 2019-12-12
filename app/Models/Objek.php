<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Objek
 * 
 * @property int $objek_id
 * @property int $objek_desa_id
 * @property string $objek_nama
 * @property string $objek_alamat
 * @property string $objek_letak_diskripsi
 * @property float $objek_biaya
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Desa $desa
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Layanan[] $layanans
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ObjekGaleri[] $objek_galeris
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\PaketDetail[] $paket_details
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\RencanaDetail[] $rencana_details
 *
 * @package App\Models
 */
class Objek extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'objek';
	protected $primaryKey = 'objek_id';

	protected $casts = [
		'objek_desa_id' => 'int',
		'objek_biaya' => 'float'
	];

	protected $fillable = [
		'objek_desa_id',
		'objek_nama',
		'objek_alamat',
		'objek_letak_diskripsi',
		'objek_biaya'
	];

	public function desa()
	{
		return $this->belongsTo(\App\Models\Desa::class, 'objek_desa_id');
	}

	public function layanans()
	{
		return $this->hasMany(\App\Models\Layanan::class, 'layanan_objek_id');
	}

	public function objek_galeris()
	{
		return $this->hasMany(\App\Models\ObjekGaleri::class, 'objek_galeri_objek_id');
	}

	public function paket_details()
	{
		return $this->hasMany(\App\Models\PaketDetail::class, 'paket_detail_objek_id');
	}

	public function rencana_details()
	{
		return $this->hasMany(\App\Models\RencanaDetail::class, 'rencana_detail_objek_id');
	}
}
