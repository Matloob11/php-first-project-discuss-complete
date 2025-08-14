<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./public/logo.png " alt=""></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php
        if(isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php echo ucfirst($_SESSION['user']['username'])?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
        </li>
        <?php } ?>
         <?php
        if(!isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
        <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
    </div>
    <form action="" class="d-flex">
        <input type="search" class="form-control me-2" name="search" placeholder="Search question">
        <button type="submit" class="btn btn-outline-success">Search</button>
      </form>
  </div>
</nav>
</body>
</html>