<?php
$message="";
  class Model {
    

    public static function all() {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,'SELECT * FROM posts');
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

    return $result;
    
      }
        
    }
      
    

    public static function find($id) {
     
      $db = mysqli_connect("localhost", "root", "", "simple_blog");
      
       $result =mysqli_query($db,"SELECT * FROM posts WHERE id='$id' ");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {


       $row = mysqli_fetch_assoc($result);
      return $row;
     
   
   
    
      }
    }

 public static function checkForExistingUserName($name)
  {
    // if ($name === "admin") {
    //   return true;
    // }
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `user` WHERE `user_name`='{$name}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 1) {
      mysqli_close($db);
      return true;
    } else {
      mysqli_close($db);
      return false;
    }
  }

  public static function CreateNewuser($name, $email,$password)
  {

    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "INSERT INTO `user` (`user_name`,`email`,`password`) VALUES ('{$name}','{$email}','{$password}')";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }


  public static  function getUserIdByUserName($name)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `user` WHERE `user_name`='{$name}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 1) {
      mysqli_close($db);
      $row = mysqli_fetch_row($result);
      return $row[0];
    } else {
      mysqli_close($db);
      return 0;
    }
  }


  public static function checkForUser($email, $password)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT * FROM `user` WHERE `email`='{$email}' AND `password`='{$password}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 1) {
      mysqli_close($db);
      return true;
    } else {
      mysqli_close($db);
      return false;
    }
  }

  
  }
?>