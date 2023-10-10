<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserService extends BaseService
{
    public function __construct(User $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}