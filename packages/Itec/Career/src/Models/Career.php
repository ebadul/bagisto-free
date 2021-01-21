<?php

namespace Itec\Career\Models;

use Illuminate\Database\Eloquent\Model;
use Itec\Career\Contracts\Career as CareerContract;

class Career extends Model implements CareerContract
{
	protected $table = 'careers';
    protected $fillable = ['position', 'vacancy', 'responsibility', 'employment_status', 'skill_type', 'educational_requirement', 'aditional_requirement', 'job_location', 'salary', 'compensation', 'deadline','email', 'job_status']; 

}