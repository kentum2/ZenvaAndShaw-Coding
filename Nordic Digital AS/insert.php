<?php

  //Database (DB) Information here
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e-commerce";

  //Create and Check DB connection
  $conn = new mysqli ($servername, $username, $password, $dbname);
   if (!$conn->connect_error) {
     echo "Connection was successful!...";
  }
  if ($conn->connect_error) {
      die("connection failed:" . $conn ->connect_error);
  }

  //Create variables for each piece of information to be added to the DB table
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    //Create SQL string
    $sql = "INSERT INTO products (name, price, description)
      VALUES ('$name', '$price', '$description')";

      //Send query and check to ensure there are no errors;
      if ($conn->query($sql) ===TRUE) {
          echo "New record created successfully";
      } else {
        "Error: " . $sql . "<br>" . $conn->error;
      }

      //Close DB connection
      $conn->close();
?>
