<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct(protected ProfileService $service){

    }



    public function list(){
        return $this->service->getAll();
    }

    public function create(Request $request){
        return $this->service->create($request->all());
    }
    public function show($id){
        
        return $this->service->getById($id);
    }

    public function update($id,Request $request){
        
        return $this->service->update($id,$request->all());
    }

    public function remove($id){
        
        return $this->service->delete($id);
    }
}

