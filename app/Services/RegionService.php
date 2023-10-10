<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\Region;
use Illuminate\Database\Eloquent\Model;

class RegionService extends BaseService
{
    public function __construct(Region $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}