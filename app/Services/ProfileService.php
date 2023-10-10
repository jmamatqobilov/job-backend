<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Profile;

class ProfileService extends BaseService
{
    public function __construct(Profile $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }

    
}