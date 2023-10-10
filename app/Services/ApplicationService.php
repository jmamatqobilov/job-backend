<?php

namespace App\Services;

use App\Http\Resources\CompanyResource;
use App\Models\Application;
use GuzzleHttp\Psr7\Message;

class ApplicationService extends BaseService
{
    public function __construct(Application $serviceModel)
    {
        $this->model = $serviceModel;
        $this->resource = CompanyResource::class;
        $this->likableFilelds = [];
                 
        parent::__construct();
    }


    

    public function unapply($id){
        $application  = Application::find($id);
        if($application){
            $application->delete();
            return [
                "message"=>"Appication unapplayed is succesfully"
            ];
        }else{
            return [
                "message"=>"you can unapplyeed"
            ];
        }
    }
}