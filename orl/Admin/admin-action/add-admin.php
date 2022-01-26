<?php include("session-start.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ORL-ADMIN</title>
  <link rel="stylesheet" href="../../css/admin-style.css" />
</head>

<body>
  <!-- navigation bar -->
  <section>
    <div class="admin-page-navbar">
      <div class="admin-page-navbar-logo">
        <a href="index.php">ORL<span style="color: rgb(238, 189, 124)">|</span><span class="admin-page-navbar-logo2">Admin Pannel</span></a>
      </div>
      <div class="admin-page-navbar-menus">
        <ul>
          <li>
            <a href="../admin-admins.php"><span style="padding: 2%; margin-right: 10px"><strong>&#8592;</strong></span>Back</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="height">
    <div class="add-admin-form">
      <h3 style="
            text-align: center;
            font-size: 35px;
            letter-spacing: 1px;
            font-weight: 700;
            padding: 5px;
          ">
        Add New Admin
      </h3>

      <form method="POST">
        <label>Name</label><br />
        <input type="text" name="name" placeholder="eg.suyog kulkarni" /><br />
        <label>UserName</label><br />
        <input type="text" name="username" placeholder="eg.KRAK#N" /><br />
        <label>Password</label><br />
        <input type="password" name="pass" placeholder="password" /><br />
        <button type="submit" name="submit">Add Admin</button>
      </form>
    </div>
  </section>
  <section class="admin-page-footer">
    <span>
      <img src="https://img.icons8.com/material-outlined/20/000000/copyright.png" /></span>
    <h3 style="color: black; padding: 4px; margin-top: 9px; letter-spacing: 1px">
      All Rights Reserved 2021-2022- Suyog kulkarni
    </h3>
  </section>
</body>

</html>
<style>
  .height {
    height: 80vh;
  }

  .add-admin-form {
    margin: 1% 0 0 0;
    background: rgba(255, 255, 255, 0.3);
  }

  .add-admin-form {
    padding: 5%;
  }

  form {
    padding: 1%;
    margin: 0 0 0 25%;
    width: 50%;
    border-radius: 10px;
    background: rgba(153, 153, 153, 0.8);
  }

  form label {
    margin: 0 0 0 15%;
    font-size: 22px;
    font-weight: 700;
  }

  form input {
    width: 70%;
    padding: 13px;
    border-radius: 10px;
    outline: none;
    margin: 1% 0 1% 14%;
  }

  form button {
    padding: 1%;
    width: 20%;
    border: 2px solid black;
    border-radius: 10px;
    margin: 0 0 0 40%;
    font-size: 20px;
    font-weight: 700;
  }
</style>
<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = md5($_POST['pass']);

  $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
  $sql = "INSERT INTO admin SET
            name='$name',
            username ='$username',
            password ='$password'";

  $res = mysqli_query($conn, $sql);

  if ($res) {
    $_SESSION['add'] = "Admin Added Successfully.";
    header('location:http://localhost/ORL/admin/admin-admins.php');
  } else {
    $_SESSION['add'] = "Failed To Add Admin.";
    header('location:http://localhost/ORL/admin/admin-admins.php');
  }
}


?>