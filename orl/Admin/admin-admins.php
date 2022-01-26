<?php
include("./admin-partials/admin-nav.php");
?>
<!-- contnet -->

<section class="xyz" style="overflow: auto;height:83vh;">
  <div class=" add-admin-button">
    <h1>Manage Admins</h1>
    <a href="admin-action/add-admin.php">Add New Admin</a>
    <h3 style="margin: 1% 0 0 1%;font-size:22px;font-weight:700;letter-spacing:1px">
      <?php
      if (isset($_SESSION['delete-admin'])) {
        echo $_SESSION['delete-admin'];
        unset($_SESSION['delete-admin']);
      }
      if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }
      if (isset($_SESSION['failed'])) {
        echo $_SESSION['failed'];
        unset($_SESSION['failed']);
      }
      if (isset($_SESSION['updated'])) {
        echo $_SESSION['updated'];
        unset($_SESSION['updated']);
      }
      ?>
    </h3>
  </div>
  <div class="display-admins">
    <div class="display-admin-header">
      <h3>Sr No.</h3>
      <h3>Admin Name</h3>
      <h3>Admin Username</h3>
      <h3>Actions</h3>
    </div>
    <div class="display-admin-data-container">

      <?php
      $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
      $sql = "SELECT * FROM admin";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);
      $sr = 0;
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['id'];
          $name = $row['name'];
          $username = $row['username'];

      ?>
          <div class="display-admin-data" style="letter-spacing:1px;overflow:auto;">
            <h3><?php echo ++$sr; ?></h3>
            <h3><?php echo $name; ?></h3>
            <h3><?php echo $username; ?></h3>
            <h3>
              <a href="admin-action/update-admin.php?id=<?php echo $id; ?>" style="background-color: #255725">Update</a>
              <a href="admin-action/delete-admin.php?id=<?php echo $id; ?>" style="background-color: rgb(114, 54, 54)">Delete</a>
            </h3>
          </div>
        <?php
        }
      } else {
        ?>
        <h1 style="font-size:35px; text-align:center; margin:5%;color:black;"> information currently unavailable <br>Sorry for the inconvenience :(</h1>
      <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- footer -->
<?php include("./admin-partials/admin-footer.php"); ?>