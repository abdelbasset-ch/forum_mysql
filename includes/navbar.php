
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= $_SERVER['HTTPS'].'/forum_mysql/index.php'?>">Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">New question</a>
      </li>
    </ul>
  </div>
    <div>
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
    </div>
    <div>
    <a href="users_space/signup.php"><button type="button" class="btn btn-warning">Sign up</button></a>
    <a href="users_space/login.php"><button type="button" class="btn btn-primary">Sign in</button></a>
    <button type="button" class="btn btn-outline-dark">Log out</button>
    </div>
</nav>