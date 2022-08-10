<?php
include('dbconfig.php');
session_start();
  extract($_POST);0
  if(isset($Login))
  {
  $query=mysqli_query($conn,"SELECT * from users where username='$username' AND password='$password' ");
      $results=mysqli_query($query,$conn);
      if(mysqli_num_rows($results) == 0){
         $_SESSION['username'] = $username;
         header('location:dashboard');
        }
  else
  {
  $err="<font color='orangered'>Wrong Email or Password !!!</font>";
  }
  }