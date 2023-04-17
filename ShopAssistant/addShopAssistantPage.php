<html>
<head>
    <title>Add Shop Assistant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Add Shop Assistant</h1>
        <a href="listShopAssistant.php" class="btn btn-primary align-self-end ml-5 mb-2">List</a>
        <form action="addShopAssistant.php" class="form" role="form" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" required class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button> 
            </div>
        </form>
    </div>
</div>
</body>
</html>
