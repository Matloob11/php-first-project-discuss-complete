<?php
session_start();
include('../common/db.php');
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
  $user=$conn->prepare("insert into `users`(`id`,`username`,`email`,`password`,`address`)values(NULL,'$username','$email','$password','$address')");
  $result=$user->execute();
  $user->insert_id;
  if($result){
    $_SESSION["user"]=["username"=>$username,"email"=>$email,"user_id"=>$user->insert_id];
    header("location: /php project");
  }else{
    echo "connection not found";
  }
}else if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $username="";
  $user_id=0;
  $query="select * FROM users WHERE email='$email' && password='$password'";
  $result=$conn->query($query);
  if($result->num_rows==1){
    foreach($result as $row){
      $username=$row["username"];
      $user_id=$row['id'];
    }
  $_SESSION["user"]=["username"=>$username,"email"=>$email,"user_id"=>$user_id];
  header("location: /php project");
  }else{
    echo "connection not found";
  }
}else if(isset($_GET['logout'])){
session_unset();
header("location: /php project");
}else if(isset($_POST['ask'])){
    $title=$_POST['title'];
    $description=$_POST['discription'];
    $category_id=$_POST['category'];
    $user_id=$_SESSION['user']['user_id'];
  $question=$conn->prepare("insert into `questions`(`id`,`title`,`description`,`category_id`,`user_id`)values(NULL,'$title','$description','$category_id','$user_id')");
  $result=$question->execute();
  $question->insert_id;
  if($result){
    header("location: /php project");
  }else{
    echo "question is not added to website";
  }
}else if(isset($_POST["answer"])){
  $answer=$_POST['answer'];
    $question_id=$_POST['question_id'];
    $user_id=$_SESSION['user']['user_id'];
  $query=$conn->prepare("insert into `answers`(`id`,`answer`,`question_id`,`user_id`)values(NULL,'$answer','$question_id','$user_id')");
  $result=$query->execute();
  if($result){
    header("location: /php project?q-id=$question_id");
  }else{
    echo "question is not submited";
  }
}else if(isset($_GET["delete"])){
  $qid=$_GET["delete"];
  $query = $conn->prepare("DELETE FROM questions WHERE id = ?");
  $query->bind_param("i", $qid);
  $result = $query->execute();
  if($result){
    header("location:/php project");
    exit();
  }else {
    echo "Question not deleted";
  }
}
?>