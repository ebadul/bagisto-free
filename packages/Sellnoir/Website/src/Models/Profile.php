<?php

namespace Sellnoir\Profile\Models;

use Illuminate\Database\Eloquent\Model;
use Sellnoir\Profile\Contracts\Profile as ProfileContract;

class Profile extends Model implements ProfileContract
{
	protected $table = 'profiles';
    protected $fillable = ['full_name', 'email', 'mobile',]; 

}