<?php
require("../Classes/Service.php");

$id = $_REQUEST['id'];

$service = new \Classes\Service();

if($service->delete($id)){
    header('location:listService.php');
}