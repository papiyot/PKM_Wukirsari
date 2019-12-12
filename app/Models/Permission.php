<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Permission
 * 
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ModelHasPermission[] $model_has_permissions
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\RoleHasPermission[] $role_has_permissions
 *
 * @package App\Models
 */
class Permission extends \Illuminate\Database\Eloquent\Model
{
	protected $fillable = [
		'name',
		'guard_name'
	];

	public function model_has_permissions()
	{
		return $this->hasMany(\App\Models\ModelHasPermission::class);
	}

	public function roles()
	{
		return $this->belongsToMany(\App\Models\Role::class, 'role_has_permissions');
	}

	public function role_has_permissions()
	{
		return $this->hasMany(\App\Models\RoleHasPermission::class);
	}
}
