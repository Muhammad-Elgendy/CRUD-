 <?php
   include_once "./env/database.php";

   //  ADD
   if (isset($_POST['add'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      $insert = "INSERT INTO users VALUES (null,' $name', '$email ', '$phone' , '$address' )";
      mysqli_query($connect, $insert);
      header("location: index.php");
      exit;
   }


   // UPDATE

   if (isset($_POST['update'])) {
      $id = $_GET['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      $update = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', address = '$address' WHERE id=$id";
      mysqli_query($connect, $update);
      header("location: index.php");
      exit;
   }


   //  DELETE 

   if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $delete = "DELETE FROM users WHERE id=$id";
      mysqli_query($connect, $delete);
      header("location: index.php");
      exit;
   }
