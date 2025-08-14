<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="heading">Signup</h1>
    <form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="ENTER USER NAME">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="ENTER Email">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="ENTER Password">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="ENTER Address">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" class="btn btn-primary" name="signup">Signup</button>
  </div>
</form>  
</div>

</body>
</html>