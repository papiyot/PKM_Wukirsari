<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class ModelHasPermission
 * 
 * @property int $permission_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property \App\Models\Permission $permission
 *
 * @package App\Models
 */
class ModelHasPermission extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'model_id' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'model_type',
		'model_id'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class);
	}
}
