<?php
$message="";
  class Model {
    

    public static function all() {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,'SELECT * FROM posts WHERE active=1 ORDER BY `id` DESC');
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

   
    return $result;
    
      }
        
    }
      
    public static function my_post($user_id) {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,"SELECT * FROM posts WHERE user_id='$user_id' ");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

    return $result;
    
      }
        
    }


   public static function GetLatestPostByUserId($user_id) {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,"SELECT * FROM posts WHERE user_id='$user_id' ORDER BY `id` DESC LIMIT 2");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

   
    return $result;
    
      }
        
    }


      public static function GetLatestCommentByUserId($user_id) {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,"SELECT * FROM comments WHERE user_id='$user_id' ORDER BY `id` DESC LIMIT 2");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

   
    return $result;
    
      }
        
    }
      



    public static  function TotalPosts($user_id)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `posts` WHERE `user_id`='{$user_id}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == true) {
    
      $row = mysqli_num_rows($result);
      return $row;
    } else {
       
      return 0;
    }
  }


    public static  function TotalPublishPosts($user_id)
  {
    $i=1;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `posts` WHERE `user_id`='{$user_id}' AND `active`='{$i}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == true) {
    
      $row = mysqli_num_rows($result);
      return $row;
    } else {
       
      return 0;
    }
  }

    public static  function TotalDraftPosts($user_id)
  {
    $i=0;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `posts` WHERE `user_id`='{$user_id}' AND `active`='{$i}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == true) {
    
      $row = mysqli_num_rows($result);
      return $row;
    } else {
       
      return 0;
    }
  }
     public static  function TotalComments($user_id)
  {
    $i=0;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `comments` WHERE `user_id`='{$user_id}'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == true) {
    
      $row = mysqli_num_rows($result);
      return $row;
    } else {
       
      return 0;
    }
  }

 public static  function GetUserIdByPostId($id)
  {
  $db = mysqli_connect("localhost", "root", "", "simple_blog");
      
       $result =mysqli_query($db,"SELECT user_id FROM comments WHERE post_id='$id' ");
       mysqli_close($db);

    
     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

    return $result;
    
      }
  }

   public static  function GetUserNameByPostId($id)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
      
       $result =mysqli_query($db,"SELECT user_name FROM user WHERE user_id='$id' ");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {


       $row = mysqli_fetch_assoc($result);
      return $row;
     
   
   
    
      }
  }


  
       public static function GetuserNameByPostUserId($userid) {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,"SELECT user_name FROM user WHERE user_id='$userid'");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {
      $row=mysqli_fetch_array($result);

    return $row;
    
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



    public static function GetPostByPostId($post_id)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT title FROM `posts` WHERE `id`='{$post_id}'";
    $result = mysqli_query($db, $sql);
       if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {
     $row=mysqli_fetch_array($result);
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

  public static function CreateNewuser($name, $email,$password,$date)
  {

    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "INSERT INTO `user` (`user_name`,`email`,`password`,`created_date`) VALUES ('{$name}','{$email}','{$password}','{$date}')";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }


  public static  function getUserNameByUserEmail($email)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_name FROM `user` WHERE `email`='{$email}'";
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

   public static function checkForExistingPost($title,$content)
  {
  
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT title FROM `user` WHERE `title`='{$title}' AND `content`='{$content}' ";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 1) {
      mysqli_close($db);
      return true;
    } else {
      mysqli_close($db);
      return false;
    }
  }

  public static  function getUserIdByUserName($user_name)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_id FROM `user` WHERE `user_name`='{$user_name}'";
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

  public static  function GetUserjoindate($user_name)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT created_date FROM `user` WHERE `user_name`='{$user_name}'";
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
   public static function getUserNameByUserId($user_id)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "SELECT user_name FROM `user` WHERE `user_id`='{$user_id}'";
    $result = mysqli_query($db, $sql);
       if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {
     $row=mysqli_fetch_array($result);
    return $row;
    
      }
  }

  public static  function CreateNewPost($user_id, $title,$content,$description)
  {
    $i=1;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "INSERT INTO `posts` (`user_id`, `title`, `content`, `description`,`active`) VALUES ('{$user_id}', '{$title}', '{$content}', '{$description}', '{$i}')";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }

    public static  function SaveAsDraft($user_id, $title,$content,$description)
  {
    $i=0;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "INSERT INTO `posts` (`user_id`, `title`, `content`, `description`,`active`) VALUES ('{$user_id}', '{$title}', '{$content}', '{$description}', '{$i}')";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }


    public static function CreateComment($post_id, $user_id,$comment,$date)
  {

    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "INSERT INTO `comments` (`post_id`,`user_id`,`body`,`created_date`) VALUES ('{$post_id}','{$user_id}','{$comment}','{$date}')";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }

   public static function Show_Comment($id) {
     
       $db = mysqli_connect("localhost", "root", "", "simple_blog");
       $result =mysqli_query($db,"SELECT * FROM comments WHERE post_id='$id' ");
       mysqli_close($db);

     if (mysqli_num_rows($result) == 0) {
        $message="There is no posts available";
    } 
    else {

    return $result;
    
      }
        
    }

    public static function UpdatePostPublish($id,$title, $content,$description)
  {
    $i=1;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "UPDATE `posts` SET `title` = '{$title}',`content` = '{$content}',`description` = '{$description}',`active` = '{$i}' WHERE `id`='{$id}'";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }

   public static function UpdatePostDraft($id,$title, $content,$description)
  {
    $i=0;
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "UPDATE `posts` SET `title` = '{$title}',`content` = '{$content}',`description` = '{$description}',`active` = '{$i}' WHERE `id`='{$id}'";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }

  public static function DeletePost($id)
  {
    $db = mysqli_connect("localhost", "root", "", "simple_blog");
    $sql = "DELETE FROM posts WHERE id='$id'";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if($result) {
      return true;
    } else {
      return false;
    }
  }

  }
?>