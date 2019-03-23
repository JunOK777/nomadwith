<?php

namespace App\Repositories\Eloquent;

use App\Models\Profile;

class ProfileRepository implements ProfileRepositoryInterface
{
    protected $profile;

    /**
    * @param object $profile
    */
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getAllProfile()
    {
      return $this->profile->all();
    }

}