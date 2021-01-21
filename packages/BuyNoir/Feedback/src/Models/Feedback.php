<?php

namespace Buynoir\Feedback\Models;

use Illuminate\Database\Eloquent\Model;
use Buynoir\Feedback\Contracts\Feedback as FeedbackContract;

class Feedback extends Model implements FeedbackContract
{
	protected $table = 'feedback';
    protected $fillable = ['title', 'description']; 

}