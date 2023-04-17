<?php

namespace Classes;

require('DB.php');

class ShopAssistant extends DB
{
    private $id;
    private $name;

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

    public function insert()
    {
        $query = "insert into shop_assistant(name) values('".$this->getName()."')";
        return mysqli_query($this->db, $query);
    }

    public function edit($id)
    {
        $query = "update shop_assistant set name = '".$this->getName()."'
        
        where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){
        $query = "delete from shop_assistant where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from shop_assistant';
        $result = mysqli_query($this->db, $query);
        $shopAssistants = [];
        if (mysqli_num_rows($result) > 0) {
            while ($assistant = mysqli_fetch_assoc($result)) {
                $thisAssistant = new self();
                $thisAssistant->setId($assistant['id']);
                $thisAssistant->setName($assistant['name']);
                $shopAssistants[] = $thisAssistant;
            }
        }
        return $shopAssistants;
    }

    public function getById($id){
        $query = "select * from shop_assistant where id='$id'";
        $result = mysqli_query($this->db, $query);
        $shopAssistant = new self;
        if(mysqli_num_rows($result) > 0){
            while($bool = mysqli_fetch_assoc($result)){
                $shopAssistant->setId($bool['id']);
                $shopAssistant->setName($bool['name']);
            }
        }
        return $shopAssistant;
    }

}