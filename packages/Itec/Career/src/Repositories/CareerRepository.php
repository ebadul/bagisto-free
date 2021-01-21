<?php

namespace Itec\Career\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
use Itec\Career\Models\Career;


class CareerRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

  
    public function model()
    {
        return 'Itec\Career\Contracts\Career';
    }

    public function update(array $data, $id, $attribute = "id")
    {
        $career = $this->find($id);
        $career->update($data);
        return $career;
    }


}