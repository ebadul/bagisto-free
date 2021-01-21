<?php

namespace Itec\Category\Models;

use Webkul\Core\Eloquent\TranslatableModel;
use Webkul\Category\Models\Category as CategoryBaseModel;

class Category extends CategoryBaseModel
{
    protected $fillable = ['position', 'status', 'display_mode', 'parent_id', 'type_code'];
}