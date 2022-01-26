<?php include("./admin-partials/admin-nav.php");
?>
<p style="font-size: 22px;font-weight: 400px;margin-left: 50px;">logged in as, <span style="font-weight:700"><?php
                                                                                                              if (isset($_SESSION['user'])) {
                                                                                                                echo $_SESSION['user'];
                                                                                                              }
                                                                                                              ?></span></p>
<!-- contnet -->
<section class="admin-pannel-home-page-content">
  <div class="admin-pannel-total-number">
    <p class="admin-pannel-total-number-menu-name">Total Admins</p>
    <?php
    $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
    $sql = "SELECT * FROM admin";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {

    ?>
      <h1 class="admin-pannel-total-number-count"><?php echo $count ?></h1>

    <?php
    } else {
    ?>
      <h1 class="admin-pannel-total-number-count">0</h1>
    <?php
    }
    ?>
  </div>
  <div class="admin-pannel-total-number">
    <p class="admin-pannel-total-number-menu-name">Total Videos</p>
    <?php
    $sql = "SELECT * FROM videos";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
    ?>
      <h1 class="admin-pannel-total-number-count"><?php echo $count; ?></h1>
    <?php
    } else {
    ?>
      <h1 class="admin-pannel-total-number-count">0</h1>
    <?php
    }
    ?>
  </div>
  <div class="admin-pannel-total-number">
    <p class="admin-pannel-total-number-menu-name">Active Videos</p>
    <?php
    $sql = "SELECT * FROM videos WHERE active='Yes'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
    ?>
      <h1 class="admin-pannel-total-number-count"><?php echo $count; ?></h1>
    <?php
    } else {
    ?>
      <h1 class="admin-pannel-total-number-count">0</h1>
    <?php
    }
    ?>
  </div>

  <div class="admin-pannel-total-number">
    <p class="admin-pannel-total-number-menu-name">Non Active Videos</p>
    <?php
    $sql = "SELECT * FROM videos WHERE active='No'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
    ?>
      <h1 class="admin-pannel-total-number-count"><?php echo $count; ?></h1>
    <?php
    } else {
    ?>
      <h1 class="admin-pannel-total-number-count">0</h1>
    <?php
    }
    ?>
  </div>
</section>
<?php include("./admin-partials/admin-1-footer.php"); ?>