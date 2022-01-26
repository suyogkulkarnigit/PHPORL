<?php include("./partials/navbar.php") ?>
<!-- .......................................................................................................................... -->
<section class="search-section">
  <form method="POST" class="search-form">
    <input type="text" placeholder="Search" name="search" />
    <button type="submit" name="submit">Search</button>
  </form>

</section>
<?php
$search = $_POST['search'] ?? NULL;

if (isset($_POST['submit'])) {
  if ($search == "") { ?>
    <script>
      alert("searchbox cant be empty.")
    </script>
    <h1 class="header-tutorials">Tutorials</h1>
    <section class="video-section">
      <div class="videos">
        <?php

        $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
        $sql = "SELECT * FROM videos WHERE active='Yes'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
          while ($row = mysqli_fetch_assoc($res)) {
            $vid = $row['videoid'];
            $vname = $row['videoname'];
        ?>
            <div>
              <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $vid; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h3><?php echo $vname; ?></h3>
            </div>
          <?php


          }
        } else {
          ?>
          <h1 style="font-size:50px;margin-top:6%;background-color: rgba(204, 200, 200, 0.8);padding:5%;border-radius:20px;
      text-align:center;color:red;">Currently Unavailable Sorry For The Inconvenience :(</h1>
        <?php
        }
        ?>

      </div>
      <?php
      if ($count > 0) {
      ?>
        <div class="content-video">
          <h1>Note</h1>
          <a href="https://books.goalkicker.com/" target="_blank">
            <h3>Click Here For Free Ebooks !!</h3>
          </a>
          <a href="#">
            <h3>Comming soon !!</h3>
          </a>
        </div>
      <?php
      }
      ?>

    </section>
  <?php
  } else {
  ?>
    <h1 class="header-tutorials"><?php echo "Results For " . $search; ?></h1>
    <section class="video-section">
      <div class="videos">
        <?php

        $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
        $sql = "SELECT * FROM videos WHERE videoname LIKE '%$search%' OR videoid LIKE '%$search%' AND active='Yes'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count > 0) {
          while ($row = mysqli_fetch_assoc($res)) {
            $vid = $row['videoid'];
            $vname = $row['videoname'];
        ?>
            <div>
              <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $vid; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h3><?php echo $vname; ?></h3>
            </div>
          <?php


          }
        } else {
          ?>
          <h1 style="font-size:50px;margin-top:6%;background-color: rgba(204, 200, 200, 0.8);padding:5%;border-radius:20px;
      text-align:center;color:red;">Could Not Found Anything Related To Your Search :(</h1>
        <?php
        }
        ?>

      </div>
      <?php
      if ($count > 0) {
      ?>
        <div class="content-video">
          <h1>Note</h1>
          <a href="https://books.goalkicker.com/" target="_blank">
            <h3>Click Here For Free Ebooks !!</h3>
          </a>
          <a href="#">
            <h3>Comming soon !!</h3>
          </a>
        </div>
      <?php
      }
      ?>

    </section>
  <?php
  }
} else {
  ?>
  <h1 class="header-tutorials">Tutorials</h1>
  <section class="video-section">
    <div class="videos">
      <?php

      $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
      $sql = "SELECT * FROM videos WHERE active='Yes'";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);

      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
          $vid = $row['videoid'];
          $vname = $row['videoname'];
      ?>
          <div>
            <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $vid; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h3><?php echo $vname; ?></h3>
          </div>
        <?php


        }
      } else {
        ?>
        <h1 style="font-size:50px;margin-top:6%;background-color: rgba(204, 200, 200, 0.8);padding:5%;border-radius:20px;
      text-align:center;color:red;">Currently Unavailable Sorry For The Inconvenience :(</h1>
      <?php
      }
      ?>

    </div>
    <?php
    if ($count > 0) {
    ?>
      <div class="content-video">
        <h1>Note</h1>
        <a href="https://books.goalkicker.com/" target="_blank">
          <h3>Click Here For Free Ebooks</h3>
        </a>
        <a href="./test/index.html" target="_blank">
          <h3 class="blink-test">Click Here For Practise Tests</h3>
        </a>
      </div>
    <?php
    }
    ?>

  </section>

<?php
}
?>
<!-- .......................................................................................................................... -->
<?php include("./partials/footer.php") ?>