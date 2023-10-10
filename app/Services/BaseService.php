<?php

namespace App\Services;

abstract class BaseService
{
    protected $response;
    protected $code;
    protected $model;
    protected $query;
    protected $resource;
    public array $conditions = [];
    public array $likableFilelds = [];

    public function __construct()
    {
        
    }


    protected function resourceWith($data, $isList = false){
        if($this->resource){
            if($isList) return $this->resource::collection($data);
            else return $this->resource::make($data);
        } else return $data;
    }
    protected function setQuery()
    {
        $this->query = $this->model->query();
    }

    public function getById($id)
    {
        $result = $this->model->where('id', $id)->first();
        return $this->resourceWith(data: $result, isList: false);
    }

    public function create($data){
        $result = $this->model->create($data);
        return $result;
    }

    public function getAll()
    {
        $data = $this->model->get();
        return $this->resourceWith(data: $data, isList: true);
    }  

    public function update($id,$data){
        $result = $this->model->find($id);
        $resultdata = $result->update($data);
        return $resultdata;
    }

    public function delete($id){
        $result = $this->model->find($id);
        if($result){
            $result->delete();
            return ['message'=>"Seecelcfuly delete"];
        }else{
            return ['message'=>"element not found"];
        }
        
    }
}