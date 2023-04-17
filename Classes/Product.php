<?php

namespace Classes;

require('../Classes/Service.php');

class Product extends DB
{
    private $id;
    private $description;
    private $validity;
    private $state;
    private $price;
    private $serviceId;

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

public function getValidity(){
    return $this->validity;
}

public function setValidity($validity){
    $this->validity = $validity;
}

public function getState(){
    return $this->state;
}

public function setState($state){
    $this->state = $state;
}
public function getPrice()
{
    return $this->price;
}
public function setPrice($price)
{
    $this->price = $price;
}
public function getServiceId(){
    return $this->serviceId;
}

public function setServiceId($serviceId){
    $this->serviceId = $serviceId;
}

    public function insert()
    {
        $query = "insert into product(description,validity,state,price,FK_serviceId) 
        values(
        '".$this->getDescription()."',
        '".$this->getValidity()."',
        '".$this->getState()."',
        '".$this->getPrice()."',
        '".$this->getServiceId()."'

        )";
        return mysqli_query($this->db, $query);
    }

    public function edit($id)
    {
        $query = "update product set
        description = '".$this->getDescription()."',
        validity = '".$this->getValidity()."',
        state = '".$this->getState()."',
        price = '".$this->getPrice()."',
        FK_serviceId = '".$this->getServiceId()."'
        
        where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){
        $query = "delete from product where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from product';
        $result = mysqli_query($this->db, $query);
        $products = [];
        if (mysqli_num_rows($result) > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $thisProduct = new self();
                $thisProduct->setId($product['id']);
                $thisProduct->setDescription($product['description']);
                $thisProduct->setValidity($product['validity']);
                $thisProduct->setState($product['state']);
                $thisProduct->setPrice($product['price']);
                $thisProduct->setServiceId($product['FK_serviceId']);
                $products[] = $thisProduct;
            }
        }
        return $products;
    }

    public function getById($id){
        $query = "select * from product where id='$id'";
        $result = mysqli_query($this->db, $query);
        $product = new self;
        if(mysqli_num_rows($result) > 0){
            while($bool = mysqli_fetch_assoc($result)){
                $product->setId($bool['id']);
                $product->setDescription($bool['description']);
                $product->setValidity($bool['validity']);
                $product->setState($bool['state']);
                $product->setPrice($bool['price']);
                $product->setServiceId($bool['FK_serviceId']);
            }
        }
        return $product;
    }
    public function getAllServices()
    {
        $query = "select * from service";
        $result = mysqli_query($this->db, $query);
        $services[] = new Service();
        if (mysqli_num_rows($result) > 0) {
            while ($service = mysqli_fetch_assoc($result)) {
                $thisService = new Service();
                $thisService->setId($service['id']);
                $thisService->setDescription($service['description']);
                $thisService->setPrice($service['price']);
                $thisService->setActive($service['active']);
                $services[] = $thisService;
            }
        }
        return $services;
    }
}