<?php include("admin-action/session-start.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ORL-Admin</title>
</head>

<body>
  <section>
    <nav class="admin-login-navbar">
      <div class="logo">
        ORL<span style="color: rgb(238, 189, 124)">|</span><span class="admin-page-navbar-logo2">Admin Log-in</span>
      </div>
      <div class="admin-page-navbar-menus">
        <ul>
          <li>
            <a href="../index.php"><span style="padding: 2%; margin-right: 10px"><strong>&#8592;</strong></span>Back</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <section>
    <form action="#" method="POST" autocomplete="off">
      <h1>Log-in</h1>
      <div>
        <label>Username</label>
        <input type="text" name="username" placeholder="username" autocomplete="off" />
        <label>password </label>
        <input type="password" name="password" placeholder="password" autocomplete="off" /><br />
        <button type="submit" name="submit">Login</button>
      </div>
      <p>
        NOTE: in case you forgot your admin username and password contact
        other admin
      </p>
    </form>
  </section>
</body>

</html>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200&display=swap");
  @import url("https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200&family=Scheherazade+New&display=swap");

  /* font-family: "Gemunu Libre", sans-serif;
  font-family: "Scheherazade New", serif; */

  /* CSS FOR ALL */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: url("../Images/background-admin.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-family: "Gemunu Libre", sans-serif;
    scroll-behavior: smooth;
  }

  .admin-login-navbar {
    display: flex;
    justify-content: space-between;
  }

  .logo {
    font-size: 55px;
    font-weight: 700;
    margin-left: 4%;
  }

  .logo a {
    text-decoration: none;
    color: black;
  }

  .admin-page-navbar-logo2 {
    font-size: 25px;
    letter-spacing: 1px;
  }

  .admin-page-navbar-menus {
    margin-right: 7%;
  }

  .admin-page-navbar-menus ul {
    display: flex;
    justify-content: center;
    list-style: none;
  }

  .admin-page-navbar-menus ul li {
    margin-left: -2%;
    font-size: 22px;
    padding: 15px;
  }

  .admin-page-navbar-menus ul li a {
    font-weight: bold;
    text-decoration: none;
    color: black;
  }

  .admin-page-navbar-menus ul li a:hover {
    color: #28a728;
  }

  form {
    padding: 1%;
    width: 50%;
    margin: 8% 0 0 25%;
    background: rgba(212, 206, 206, 0.8);
    border-radius: 10px;
  }

  form h1 {
    font-size: 35px;
    font-weight: 700;
    letter-spacing: 2px;
    text-align: center;
  }

  form label {
    font-size: 25px;
    padding: 1px;
    font-weight: 700;
    margin: 1% 0 2px -47%;
  }

  form input {
    padding: 2%;
    border: 1px solid black;
    border-radius: 12px;
    outline: none;
    width: 60%;
    margin: 0 0 0 0;
  }

  form button {
    padding: 1%;
    width: 20%;
    margin: 2% 0 0 10%;
    border-radius: 10px;
    margin: 0 0 0 -1%;
  }

  form p {
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    padding: 5px;
    color: red;
  }

  form div {
    padding: 1%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
    background: rgba(255, 243, 243, 0.8);
    border-radius: 10px;
    margin: 1%;
  }
</style>

<?php

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);

  if ($count == 1) {
    $_SESSION['login'] = "Login successfull";
    $_SESSION['user'] = $username;
    header('location:http://localhost/ORL/admin/');
  } else {
    $_SESSION['login'] = "Login Failed.";
    header('location:http://localhost/ORL/admin/admin-partials/not-admin.html');
  }
}

?>