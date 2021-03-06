
<?php session_start(); ?>

<?php 

if (isset($_SESSION['user_name'])) {
    $user_name=$_SESSION['user_name'];
}

if (isset($_POST['update'])) {
     if (trim($_POST['title'])=='' || trim($_POST['content'])=='' || trim($_POST['description'])=='') {
                                $message = "Please fill all the fields with valid data.";
                            } 

                              else {
                                $title = trim($_POST['title']);
                                $content = trim($_POST['content']);
                                $description = trim($_POST['description']);
                                $PostId=$_GET['id'];
                      
                                  // $userid=Model::getUserIdByUserName($user_name);
                                     
                                    if (Model::UpdatePostPublish($PostId,$title,$content, $description)) {
                                        
                                    $successmsg="Post update successfully.";


                                    }

                                    else {
                                    $errmsg="Unknown problem occured.";

                                    }
                             

                            }

}


if (isset($_POST['save'])) {
     if (trim($_POST['title'])=='' || trim($_POST['content'])=='' || trim($_POST['description'])=='') {
                                $message = "Please fill all the fields with valid data.";
                            } 

                              else {
                                $title = trim($_POST['title']);
                                $content = trim($_POST['content']);
                                $description = trim($_POST['description']);
                                $PostId=$_GET['id'];
                      
                                  // $userid=Model::getUserIdByUserName($user_name);
                                     
                                    if (Model::UpdatePostDraft($PostId,$title,$content, $description)) {
                                        
                                      $successmsg="Post update and successfully saved in draft.";

                                    }

                                    else {
                                        $errmsg="Unknown problem occured.";
                                  }
                             

                            }

}

if (isset($_POST['delete'])) {
  $PostId=$_GET['id'];
  if (Model::DeletePost($PostId)) {
 $_SESSION['delete_success'] =true;

     header("Location: ?controller=posts&action=my_post");
  }
  else{
       $_SESSION['delete_error'] =true;
       header("Location: ?controller=posts&action=my_post");
  }
}

 ?>

 <?php 

$post=Model::find($_GET['id']);
  ?>
  <?php include 'header.php'; ?>
<div class="container">

    
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
       <?php echo !empty($successmsg)?'<div class="alert alert-success">

      <p class="panel-body">'.$successmsg.'</p>
      </div>':''; ?>
       <?php echo !empty($errmsg)?'<div class="alert alert-danger">

      <p class="panel-body">'.$errmsg.'</p>
      </div>':''; ?>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Edit Post</h2>
                            
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">

    <div class="form-group">
        <input required="required" value="<?php echo $post['title']; ?>" placeholder="Enter title here" type="text" name ="title" class="form-control" />
    </div>
     <div class="form-group">
        <input required="required" value="<?php echo $post['content']; ?>" placeholder="Enter content here" type="text" name ="content" class="form-control" style="height: 50px;"/>
    </div>
    <div class="form-group">
        <textarea class="tinymce" id="texteditor" name="description"><?php echo $post['description']; ?></textarea>
    </div>
    <input type="submit" name='update' class="btn btn-success" value = "Publish"/>
    <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
    <input type="submit" name='delete' class="btn btn-danger" value = "Delete" />
</form>
                        </div>
                    </div>
                </div>
</div>
</div>
<?php include 'footer.php'; ?>