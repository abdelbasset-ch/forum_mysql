
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/forum_mysql/index.php">Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if(isset($_SESSION['auth']) && $_SESSION['auth']==true):?>
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">New question</a>
      </li>
      <?php endif?>
    </ul>
  </div>
    <div>
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
    </div>
    <div>
    <?php if(isset($_SESSION['auth']) && $_SESSION['auth']==true):?>
    <a href="/forum_mysql/database/users_actions/logout_action.php"><button type="button" class="btn btn-outline-dark">Log out</button></a>
    <?php else:?>
    <a href="/forum_mysql/users_space/signup.php"><button type="button" class="btn btn-warning">Sign up</button></a>
    <a href="/forum_mysql/users_space/login.php"><button type="button" class="btn btn-primary">Sign in</button></a>
    <?php endif?>
    </div>
</nav>