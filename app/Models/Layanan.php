<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Layanan
 * 
 * @property int $layanan_id
 * @property int $layanan_objek_id
 * @property string $layanan_nama
 * @property string $layanan_deskripsi
 * @property float $layanan_biaya
 * @property string $layanan_souvenir
 * @property string $layanan_pemandu
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Objek $objek
 *
 * @package App\Models
 */
class Layanan extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'layanan';
	protected $primaryKey = 'layanan_id';
	public $incrementing = false;

	protected $casts = [
		'layanan_id' => 'int',
		'layanan_objek_id' => 'int',
		'layanan_biaya' => 'float'
	];

	protected $fillable = [
		'layanan_id',
		'layanan_objek_id',
		'layanan_nama',
		'layanan_deskripsi',
		'layanan_biaya',
		'layanan_souvenir',
		'layanan_pemandu'
	];

	public function objek()
	{
		return $this->belongsTo(\App\Models\Objek::class, 'layanan_objek_id');
	}
}
