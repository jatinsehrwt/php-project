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
        <a class="nav-link " href="#dev">Devs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="signup.php">Sign Up</a>
      </li>
      <a class="btn btn-outline-info my-2 btn-sm" href="login.php">Log-in</a>
    </ul>
  </div>
</nav>
<!-- End Navigation -->