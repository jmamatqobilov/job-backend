<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class CompanyService extends BaseService
{
    public function __construct(Company $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}