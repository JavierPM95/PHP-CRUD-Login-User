<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="#">First PHP Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_GET["action"])): ?>
        <?php if (isset($_GET["action"])): ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        <?php else: ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php endif ?>
        <?php if($_GET["action"] == "signUp"): ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php?action=signUp">Sign Up</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=signUp">Sign Up</a>
          </li>
        <?php endif ?>
        <?php if($_GET["action"] == "logIn"): ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php?action=logIn">Log In</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=logIn">Log In</a>
          </li>
        <?php endif ?>
        <?php if($_GET["action"] == "userList"): ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php?action=userList">User List</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=userList">User List</a>
          </li>
        <?php endif ?>
        <?php if($_GET["action"] == "logOut"): ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php?action=logOut">Log Out</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=logOut">Log Out</a>
          </li>
        <?php endif ?>
        <?php else: ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=signUp">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=logIn">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=userList">User List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=logOut">Log Out</a>
          </li>
      <?php endif ?>
    </ul>
  </div>
  </div>
</nav>