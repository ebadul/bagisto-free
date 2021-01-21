<?php

namespace Sellnoir\Profile\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
use Sellnoir\Profile\Models\Profile;


class ProfileRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

  
    public function model()
    {
        return 'Sellnoir\Profile\Contracts\Profile';
    }

    public function update(array $data, $id, $attribute = "id")
    {
        $profile = $this->find($id);
        $profile->update($data);
        return $profile;
    }


}