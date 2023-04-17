<?php

namespace Classes;

require('../Classes/ShopAssistant.php');

class Shop extends DB
{
    private $id;
    private $city;
    private $shopAssistantId;

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getCity(){
    return $this->city;
}

public function setCity($city){
    $this->city = $city;
}
public function getShopAssistantId(){
    return $this->shopAssistantId;
}

public function setShopAssistantId($shopAssistantId){
    $this->shopAssistantId = $shopAssistantId;
}

    public function insert()
    {
        $query = "insert into shop(city,FK_shop_assistantId)
         values(
            '".$this->getCity()."',
            '".$this->getShopAssistantId()."'
            )";
        return mysqli_query($this->db, $query);
    }

    public function edit($id)
    {
        $query = "update shop set 
        city = '".$this->getCity()."',
        FK_shop_assistantId = '".$this->getShopAssistantId()."'

        
        where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){
        $query = "delete from shop where id='$id'";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from shop';
        $result = mysqli_query($this->db, $query);
        $shops = [];
        if (mysqli_num_rows($result) > 0) {
            while ($shop = mysqli_fetch_assoc($result)) {
                $thisShop = new self();
                $thisShop->setId($shop['id']);
                $thisShop->setCity($shop['city']);
                $thisShop->setShopAssistantId($shop['FK_shop_assistantId']);
                $shops[] = $thisShop;
            }
        }
        return $shops;
    }

    public function getById($id){
        $query = "select * from shop where id='$id'";
        $result = mysqli_query($this->db, $query);
        $shop = new self;
        if(mysqli_num_rows($result) > 0){
            while($bool = mysqli_fetch_assoc($result)){
                $shop->setId($bool['id']);
                $shop->setCity($bool['city']);
                $shop->setShopAssistantId($bool['FK_shop_assistantId']);
            }
        }
        return $shop;
    }

    public function getAllShopAssistants()
    {
        $query = "select * from shop_assistant";
        $result = mysqli_query($this->db, $query);
        $shopAssistants[] = new ShopAssistant();
        if (mysqli_num_rows($result) > 0) {
            while ($assistant = mysqli_fetch_assoc($result)) {
                $thisAssistant = new ShopAssistant();
                $thisAssistant->setId($assistant['id']);
                $thisAssistant->setName($assistant['name']);
                $shopAssistants[] = $thisAssistant;
            }
        }
        return $shopAssistants;
    }
}