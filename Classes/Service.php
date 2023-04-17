<?php

namespace Classes;

require('DB.php');

class Service extends DB
{
    private $id;
    private $description;
    private $price;
    private $active;

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getDescription(){
    return $this->description;
}

public function setDescription($description){
    $this->description = $description;
}
public function getPrice(){
    return $this->price;
}

public function setPrice($price){
    $this->price = $price;
}
public function getActive(){
    return $this->active;
}

public function setActive($active){
    $this->active = $active;
}

    public function insert()
    {
        $query = "insert into service(description,price,active)
        values(
        '".$this->getDescription()."',
        '".$this->getPrice()."',
        '".$this->getActive()."'
        )";
        return mysqli_query($this->db, $query);
    }

    public function edit($id)
    {
        $query = "update service set
        description = '".$this->getDescription()."',
        price = '".$this->getPrice()."',
        active = '".$this->getActive()."'

        where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){
        $query = "delete from service where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from service';
        $result = mysqli_query($this->db, $query);
        $services = [];
        if (mysqli_num_rows($result) > 0) {
            while ($service = mysqli_fetch_assoc($result)) {
                $thisService = new self();
                $thisService->setId($service['id']);
                $thisService->setDescription($service['description']);
                $thisService->setPrice($service['price']);
                $thisService->setActive($service['active']);
                $services[] = $thisService;
            }
        }
        return $services;
    }

    public function getById($id){
        $query = "select * from service where id='$id'";
        $result = mysqli_query($this->db, $query);
        $service = new self;
        if(mysqli_num_rows($result) > 0){
            while($bool = mysqli_fetch_assoc($result)){
                $service->setId($bool['id']);
                $service->setDescription($bool['description']);
                $service->setPrice($bool['price']);
                $service->setActive($bool['active']);
            }
        }
        return $service;
    }
}