<?php
require("../Classes/Shop.php");
$id = $_REQUEST['id'];
$shop = (new Classes\Shop())->getById($id);
$shopAssistants = (new Classes\Shop())->getAllShopAssistants();

?>
<html>
<head>
    <title>Edit Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>Edit Shop</h1>
        <a href="listShop.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="editShop.php?id=<?php echo $shop->getId(); ?>" class="form" role="form" method="post">
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" required value="<?php echo $shop->getCity(); ?>" class="form-control" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="FK_shop_assistantId">Shop Assistant</label>
                <select name="FK_shop_assistantId" id="FK_shop_assistantId">
                    <?php foreach ($shopAssistants as $shopAssistant): ?>
                        <option value="<?php echo $shopAssistant->getId()?>">
                           <?php echo $shopAssistant->getId()." ".$shopAssistant->getName();?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>
    </div>
</div>
</body>
</html>