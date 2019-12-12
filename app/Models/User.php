<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $provider
 * @property string $provider_id
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Rencana[] $rencanas
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Tiket[] $tikets
 *
 * @package App\Models
 */
class User extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'id',
		'name',
		'email',
		'email_verified_at',
		'password',
		'provider',
		'provider_id',
		'remember_token'
	];

	public function rencanas()
	{
		return $this->hasMany(\App\Models\Rencana::class, 'rencana_by');
	}

	public function tikets()
	{
		return $this->hasMany(\App\Models\Tiket::class, 'tiket_by');
	}
}
