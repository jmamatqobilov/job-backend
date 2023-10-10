<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(protected UserService $service){

    }


    public function allUsers(){
        $allusers = User::select()->get();
        // dd($allusers);
        return $allusers;
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
