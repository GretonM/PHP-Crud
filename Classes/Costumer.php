<?php

namespace Classes;

require('DB.php');

class Costumer extends DB
{
    private $id;
    private $name;
    private $surname;
    private $address;
    private $number;

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getName(){
    return $this->name;
}

public function setName($name){
    $this->name = $name;
}

public function getSurname(){
    return $this->surname;
}

public function setSurname($surname){
    $this->surname = $surname;
}

public function getAddress(){
    return $this->address;
}

public function setAddress($address){
    $this->address = $address;
}

public function getNumber(){
    return $this->number;
}

public function setNumber($number){
    $this->number = $number;
}

    public function insert()
    {
        $query = "insert into costumer(name,surname,address,number) 
        values(
        '".$this->getName()."',
        '".$this->getSurname()."',
        '".$this->getAddress()."',
        '".$this->getNumber()."'
        )";
        return mysqli_query($this->db, $query);
    }

    public function edit($id)
    {
        $query = "update costumer set
        name = '".$this->getName()."',
        surname = '".$this->getSurname()."',
        address = '".$this->getAddress()."',
        number = '".$this->getNumber()."'
        
        where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){
        $query = "delete from costumer where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from costumer';
        $result = mysqli_query($this->db, $query);
        $costumers = [];
        if (mysqli_num_rows($result) > 0) {
            while ($costumer = mysqli_fetch_assoc($result)) {
                $thisCostumer = new self();
                $thisCostumer->setId($costumer['id']);
                $thisCostumer->setName($costumer['name']);
                $thisCostumer->setSurname($costumer['surname']);
                $thisCostumer->setAddress($costumer['address']);
                $thisCostumer->setNumber($costumer['number']);
                $costumers[] = $thisCostumer;
            }
        }
        return $costumers;
    }

    public function getById($id){
        $query = "select * from costumer where id='$id'";
        $result = mysqli_query($this->db, $query);
        $costumer = new self;
        if(mysqli_num_rows($result) > 0){
            while($bool = mysqli_fetch_assoc($result)){
                $costumer->setId($bool['id']);
                $costumer->setName($bool['name']);
                $costumer->setSurname($bool['surname']);
                $costumer->setAddress($bool['address']);
                $costumer->setNumber($bool['number']);
            }
        }
        return $costumer;
    }
}