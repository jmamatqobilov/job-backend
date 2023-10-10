<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Nationality;

class NationalityService extends BaseService
{
    public function __construct(Nationality $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}