<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class ObjekGaleri
 * 
 * @property int $objek_galeri_id
 * @property int $objek_galeri_objek_id
 * @property string $objek_galeri_letak
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Objek $objek
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TiketRespon[] $tiket_respons
 *
 * @package App\Models
 */
class ObjekGaleri extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'objek_galeri';
	protected $primaryKey = 'objek_galeri_id';
	public $incrementing = false;

	protected $casts = [
		'objek_galeri_id' => 'int',
		'objek_galeri_objek_id' => 'int'
	];

	protected $fillable = [
		'objek_galeri_id',
		'objek_galeri_objek_id',
		'objek_galeri_letak'
	];

	public function objek()
	{
		return $this->belongsTo(\App\Models\Objek::class, 'objek_galeri_objek_id');
	}

	public function tiket_respons()
	{
		return $this->hasMany(\App\Models\TiketRespon::class, 'tiket_respon_objek_galeri_id');
	}
}
