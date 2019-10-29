<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-text">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class= "navbar-brand" href="index.php">Home</a>
          <a class= "navbar-brand" href="admin.php">Admin Panel</a>

        </div>
      </div>
    </nav>
      <div class="container">
        <div class="jumbotron">
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
    </div>
      <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "e-commerce";

          //Create and Check DB connection
          $conn = new mysqli ($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
              die("connection failed:" . $conn ->connect_error);
          }

          $sql="SELECT name,price,description FROM products";

          $result = $conn->query($sql);
          if ($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
              echo
                "<div class='col-md-3 col-sm-6 hero feature'>
                  <div class='img-fluid figure'><img src='http://placehold.it/400x200' alt='' >
                    <div class='caption'>
                      <h3>" . $row['name'] . "</h3>
                      <p>" . $row['price'] . $row['description'] . "</p>
                      <p>
                        <a href='#' class='btn btn-success'>Buy now!</a>
                        <a href='#' class='btn btn-info'>More Info!</a>
                      </p>
                    </div>
                  </div>
                </div>";
            }
          }
            else {
              echo "<p>No Products to Show</p>";
            }
            $conn->close();

       ?>


  </body>
</html>
