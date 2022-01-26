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
            <a href="../admin-videos.php"><span style="padding: 2%; margin-right: 10px"><strong>&#8592;</strong></span>Back</a>
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
        Add New Video
      </h3>
      <?php
      $id = $_GET['id'];
      $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
      $sql = "SELECT * FROM videos WHERE id =$id";
      $res = mysqli_query($conn, $sql);

      if ($res == TRUE) {
        $count = mysqli_num_rows($res);

        if ($count == 1) {
          $row = mysqli_fetch_assoc($res);

          $videoid = $row['videoid'];
          $videoname = $row['videoname'];
          $active = $row['active'];
        } else {
          $_SESSION['failed'] = 'Failed To Fetch The data From Database.';
          header('location:http://localhost/ORL/admin/admin-videos.php');
        }
      }


      ?>
      <form method="POST">
        <label>Video ID</label><br />
        <input class="in" type="text" name="videoid" value="<?php echo $videoid ?>" /><br />
        <label>Video Name</label><br />
        <input type="text" name="videoname" value="<?php echo $videoname ?>" class="in" /><br />
        <label>Active</label>
        <input type="radio" name="active" class="a" value="Yes" <?php if ($active == "Yes") {
                                                                  echo "checked";
                                                                } ?> /><span>Yes</span>
        <input type="radio" name="active" class="a" value="No" <?php if ($active == "No") {
                                                                  echo "checked";
                                                                } ?> /><span>No</span>
        <br />
        <button type="submit" name="submit">Update</button>
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

  form .in {
    width: 70%;
    padding: 13px;
    border-radius: 10px;
    outline: none;
    margin: 1% 0 1% 14%;
  }

  form .a {
    margin: 4% 0 0 10%;
    font-size: 22px;
    padding: 10px;
    width: 4%;
  }

  form span {
    font-size: 22px;
    font-weight: 700;
  }

  form button {
    padding: 1%;
    width: 20%;
    border: 2px solid black;
    border-radius: 10px;
    margin: 4% 0 0 40%;
    font-size: 20px;
    font-weight: 700;
  }
</style>
<?php

if (isset($_POST['submit'])) {

  $videoid = $_POST['videoid'];
  $videoname = $_POST['videoname'];
  if (isset($_POST['active'])) {
    $active = $_POST['active'];
  } else {
    $active = "No";
  }
  $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
  $sql = "UPDATE videos SET
            videoid='$videoid',
            videoname ='$videoname',
            active='$active'
            WHERE id='$id'";

  $res = mysqli_query($conn, $sql);

  if ($res) {
    $_SESSION['updated'] = "Video Updated Successfully.";
    header('location:http://localhost/ORL/admin/admin-videos.php');
  } else {
    $_SESSION['updated'] = "Failed To Update Video.";
    header('location:http://localhost/ORL/admin/admin-videos.php');
  }
}


?>