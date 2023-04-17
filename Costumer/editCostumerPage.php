<?php
require("../Classes/Costumer.php");
$id = $_REQUEST['id'];
$costumer = (new Classes\Costumer())->getById($id);

?>
<html>
<head>
    <title>Edit Costumer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>Edit Costumer</h1>
        <a href="listCostumer.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="editCostumer.php?id=<?php echo $costumer->getId(); ?>" class="form" role="form" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" required value="<?php echo $costumer->getName(); ?>" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" required value="<?php echo $costumer->getSurname(); ?>" class="form-control" id="surname" name="surname">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" required value="<?php echo $costumer->getAddress(); ?>" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" required value="<?php echo $costumer->getNumber(); ?>" class="form-control" id="number" name="number">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>

    </div>
</div>
</body>
</html>