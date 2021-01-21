<?php

namespace Buynoir\Feedback\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
 


class FeedbackRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

  
    public function model()
    {
        return 'Buynoir\Feedback\Contracts\Feedback';
    }

    


}