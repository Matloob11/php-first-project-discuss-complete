<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./clint/commonfiles.php') ?>
</head>

<body>
    <?php
    session_start();
    include('./clint/header.php');

    if(isset($_GET['signup']) && (!isset($_SESSION['user']['username']))){
        include('./clint/signup.php');
    }else if(isset($_GET['login']) && (!isset($_SESSION['user']['username']))){
        include('./clint/login.php');
    }else if(isset($_GET['ask'])){
        include('./clint/ask.php');
    }else if(isset($_GET['q-id'])){
        $qid=$_GET['q-id'];
        include('./clint/question-details.php');
    }else if(isset($_GET['c-id'])){
        $cid=$_GET['c-id'];
        include('./clint/questions.php');
    }else if(isset($_GET['u-id'])){
        $uid=$_GET['u-id'];
        include('./clint/questions.php');
    }else if(isset($_GET['latest'])){
        include('./clint/questions.php');
    }else if(isset($_GET['search'])){
        $search=$_GET['search'];
        include('./clint/questions.php');
    }else{
        include('./clint/questions.php');
    }
    ?>
</body>

</html>