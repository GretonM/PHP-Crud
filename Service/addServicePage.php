<html>
<head>
    <title>Add Service</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Add Service</h1>
        <a href="listService.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="addService.php" class="form" role="form" method="post">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" required class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="validity">Price</label>
                <input type="text" required class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="state">Active</label>
                <input type="text" required class="form-control" id="active" name="active">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button> 
            </div>
        </form>
    </div>
</div>
</body>
</html>
