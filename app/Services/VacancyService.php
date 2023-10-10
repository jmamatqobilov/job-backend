<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Application;
use App\Models\Vacancy;


class VacancyService extends BaseService
{
    public function __construct(Vacancy $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }


    public function apply($id){
        $vacancy = Vacancy::find($id);
        $application = Application::create();
        
    }
}