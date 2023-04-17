<?php
require("../Classes/Service.php");
$id = $_REQUEST['id'];
$service = (new Classes\Service())->getById($id);

?>
<html>
<head>
    <title>Edit Service</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>Edit Service</h1>
        <a href="listService.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="editService.php?id=<?php echo $service->getId(); ?>" class="form" role="form" method="post">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" required value="<?php echo $service->getDescription(); ?>" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="validity">Price</label>
                <input type="text" required value="<?php echo $service->getPrice(); ?>" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="state">Active</label>
                <input type="text" required value="<?php echo $service->getActive(); ?>" class="form-control" id="active" name="active">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>

    </div>
</div>
</body>
</html>