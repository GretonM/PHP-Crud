<?php

namespace Classes;

require('DB.php');
class Sale extends DB
{
    private $id;
    private $shopId;
    private $costumerId;
    private $productId;
    private $price;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getShopId()
    {
        return $this->shopId;
    }
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }
    public function getCostumerId()
    {
        return $this->costumerId;
    }
    public function setCostumerId($costumerId)
    {
        $this->costumerId = $costumerId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function insert()
    {
        $query = "insert into sales(shopId,costumerId,productId,price) 
        values(
            '".$this->getShopId()."',
            '".$this->getCostumerId()."',
            '".$this->getProductId()."',
            '".$this->getPrice()."'
            )";
        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from sales';
        $result = mysqli_query($this->db, $query);
        $sales = [];
        if (mysqli_num_rows($result) > 0) {
            while ($sale = mysqli_fetch_assoc($result)) {
                $thisSale = new self();
                $thisSale->setId($sale['id']);
                $thisSale->setShopId($sale['shopId']);
                $thisSale->setCostumerId($sale['costumerId']);
                $thisSale->setProductId($sale['productId']);
                $thisSale->setPrice($sale['price']);
                $sales[] = $thisSale;
            }
        }
        return $sales;
    }

    public function getAllShopIds()
    {
        $sql = "SELECT id FROM `shop`";
        $result = mysqli_query($this->db, $sql);
        $shops = [];
        if (mysqli_num_rows($result) > 0) {
            while ($shop = mysqli_fetch_assoc($result)) {
                $shopId = $shop['id'];
                $shops[] = $shopId;
            }
        }
        return $shops;
    }
    
    public function getAllCostumerIds()
    {
        $sql = "SELECT id FROM `costumer`";
        $result = mysqli_query($this->db, $sql);
        $costumers = [];
        if (mysqli_num_rows($result) > 0) {
            while ($costumer = mysqli_fetch_assoc($result)) {
                $costumerId = $costumer['id'];
                $costumers[] = $costumerId;
            }
        }
        return $costumers;
    }

    public function getMostSoldProduct()
    {
        $sql = "SELECT productId, SUM(price) FROM sales GROUP BY productId ORDER BY SUM(price) DESC";
        $result = mysqli_query($this->db, $sql);
        $allProducts = [];
        if (mysqli_num_rows($result) > 0) {
            while ($sale = mysqli_fetch_assoc($result)) {
                $productId = $sale['productId'];
                $price = $sale['SUM(price)'];
                $product = array("id" => $productId, "price" => $price);
                $allProducts[] = $product;
            }
        }
        return $allProducts;
    }

    public function showShopSales()
    {
        $sql = "SELECT shopId, SUM(price) FROM sales GROUP BY shopId ORDER BY SUM(price) DESC";
        $result = mysqli_query($this->db, $sql);
        $allShops = [];
        if (mysqli_num_rows($result) > 0) {
            while ($sale = mysqli_fetch_assoc($result)) {
                $shopId = $sale['shopId'];
                $price = $sale['SUM(price)'];
                $shop = array("id" => $shopId, "price" => $price);
                $allShops[] = $shop;
            }
        }
        return $allShops;
    }
}