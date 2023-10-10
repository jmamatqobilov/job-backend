<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Role;

class RoleService extends BaseService
{
    public function __construct(Role $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}