<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;

class ContactService extends BaseService
{
    public function __construct(Contact $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }
}