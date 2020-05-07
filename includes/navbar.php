<!-- Start navigation bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="assets/img/corall.png" alt="corall-logo" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'home') echo 'active'; ?>" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'what') echo 'active'; ?>" href="what.php">What are coral reefs?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'coral-to-reef') echo 'active'; ?>" href="coraltoreef.php">From coral to reefs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'where') echo 'active'; ?>" href="where.php">Where to find?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'eco') echo 'active'; ?>" href="ecosystem.php">Ecosystem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'conservation') echo 'active'; ?>" href="conservation.php">Conservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#dev">Devs</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navigation -->