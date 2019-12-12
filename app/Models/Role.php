<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ModelHasRole[] $model_has_roles
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\RoleHasPermission[] $role_has_permissions
 *
 * @package App\Models
 */
class Role extends \Illuminate\Database\Eloquent\Model
{
	protected $fillable = [
		'name',
		'guard_name'
	];

	public function model_has_roles()
	{
		return $this->hasMany(\App\Models\ModelHasRole::class);
	}

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'role_has_permissions');
	}

	public function role_has_permissions()
	{
		return $this->hasMany(\App\Models\RoleHasPermission::class);
	}
}
