<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="heading">ASK A QUESTION</h1>
    <form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="ENTER question">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="discription" class="form-label">Discription</label>
    <textarea name="discription" class="form-control" id="discription" placeholder="ENTER question"></textarea>
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="category" class="form-label">Category</label>
    <?php
    include("category.php");
    ?>
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
  </div>
</form>  
</div>
</body>
</html>