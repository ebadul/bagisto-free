<?php

namespace Itec\CategoryType\Models;

use Illuminate\Database\Eloquent\Model;
use Itec\CategoryType\Contracts\CategoryType as CategoryTypeContract;

class CategoryType extends Model implements CategoryTypeContract
{

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}