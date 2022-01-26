<?php include("./partials/navbar.php"); ?>


<!-- search bar section -->
<section>
  <div class="search-bar-courses">
    <form action="partials/search.php" method="POST">
      <input type="text" name="search" placeholder="Search" style="color: black;" />
      <button type="submit" name="submit">Search</button>
    </form>
    <a href="https://books.goalkicker.com/" target="_blank">
      <h1>Get Your Free E-Books Here!!</h1>
    </a>
  </div>
</section>

<!-- getting data from data base and putting it on page -->

<!-- videos section -->
<section>
  <h1 class="videos-div-course-page-title">
    Videos / Toturial's
  </h1>
  <div class="videos-div-course-page">
    <?php
    $conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
    $sql = "SELECT * FROM videos WHERE active='Yes'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $videoid = $row['videoid'];
        $videoname = $row['videoname'];

    ?>
        <div class="videos-course-page">
          <p style="display: none;"><?php echo $id ?></p>
          <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $videoid ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
          <label><?php echo $videoname ?></label>
        </div>

      <?php
      }
    } else {
      ?>
      <h1 style="font-size:35px; text-align:center; margin-left:50%;color:red;"> videos are currently unavailable <br>Sorry for the inconvenience :(</h1>
    <?php
    }
    ?>

  </div>
</section>
<?php include("./partials/footer.php"); ?>