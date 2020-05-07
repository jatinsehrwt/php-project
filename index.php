<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'includes/head.php'; ?>
</head>

<body>
  <?php $page = 'home';
  include_once 'includes/navbar.php'; ?>
  <div id="home">
    <!-- Start Landing Page Section -->
    <div class="landing">
      <div class="home-wrap">
        <div class="home-inner"></div>
      </div>
    </div>

    <div class="caption text-center">
      <h1>Coral reefs</h1>
      <h3>Rainforests of the sea</h3>
      <a class="btn btn-info btn-lg" href="#intro">Get started</a>
    </div>
    <!-- End Landing Page Section -->
  </div>
  <!-- End Home Section -->

  <!-- Start content -->
  <!-- - Start Introduction -->
  <div id="intro">
    <div class="row">
      <div class="col-12 text-justify">
        <h1 class="text-center">Introduction to coral reefs</h1>
        <hr />
        <p class="lead text-justify">
          Coral reefs are the most diverse of all marine ecosystems. They
          teem with life, with perhaps one-quarter of all ocean species
          depending on reefs for food and shelter. This is a remarkable
          statistic when you consider that reefs cover just a tiny fraction
          (less than one percent) of the earth’s surface and less than two
          percent of the ocean bottom. Because they are so diverse, coral
          reefs are often called the rainforests of the sea.
          <br />
          Coral reefs are also very important to people. The value of coral
          reefs has been estimated at 30 billion U.S. dollars and perhaps as
          much as 172 billion U.S. dollars each year, providing food,
          protection of shorelines, jobs based on tourism, and even
          medicines.
          <br />
          Unfortunately, people also pose the greatest threat to coral
          reefs. Overfishing and destructive fishing, pollution, warming,
          changing ocean chemistry, and invasive species are all taking a
          huge toll. In some places, reefs have been entirely destroyed, and
          in many places reefs today are a pale shadow of what they once
          were.
        </p>
      </div>
    </div>
  </div>
  <!-- End Introduction -->
  <!-- End content -->
  <?php include_once 'includes/footer.php'; ?>
  <?php include_once 'includes/scripts.php'; ?>
</body>

</html>