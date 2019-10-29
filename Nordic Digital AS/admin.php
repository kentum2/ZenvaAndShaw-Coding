<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class= "navbar-brand" href="index.php">Home</a>
          <a class= "navbar-brand" href="admin.php">Admin panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div>
      </div>
    </nav>
    <div class="container">
    <h1>Products</h1>
    <form action="insert.php" method="POST">
      <div class="form-group">
          <label for="name">Product Name</label>
          <input class ="form-control" id ="name" type="text" name="name">
      </div>
      <div class="form-group">
          <label for="price">Price</label>
          <input class ="form-control" id ="price" type="text" name="price">
      </div>
      <div class="form-group">
          <label for="description">Description</label>
          <input class ="form-control" id ="description" type="text" name="description">
      </div>
          <button class= "btn btn-success" type="submit" name="button">Add Product</button>

    </form>
   </div>
  </body>
</html>
