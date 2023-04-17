<?php
require("../Classes/ShopAssistant.php");
$id = $_REQUEST['id'];
$shop = (new Classes\ShopAssistant())->getById($id);

?>
<html>
<head>
    <title>Edit Shop Assistant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>Edit Shop Assistant</h1>
        <a href="listShopAssistant.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="editShopAssistant.php?id=<?php echo $shop->getId(); ?>" class="form" role="form" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" required value="<?php echo $shop->getName(); ?>" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>

    </div>
</div>
</body>
</html>