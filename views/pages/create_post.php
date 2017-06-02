
<?php session_start(); ?>

<?php 

if (isset($_SESSION['user_name'])) {
    $user_name=$_SESSION['user_name'];
}

if (isset($_POST['publish'])) {
     if (trim($_POST['title'])=='' || trim($_POST['content'])=='' || trim($_POST['description'])=='') {
                                $message = "Please fill all the fields with valid data.";
                            } 

                              else {
                                $title = trim($_POST['title']);
                                $content = trim($_POST['content']);
                                $description = trim($_POST['description']);

                                  if (Model::checkForExistingPost($title,$content)) {
                                    $_SESSION['post_error'] = "<span class='error'>The provided post is already declared. Create different post.</span>";
                                      header("Location: ?controller=pages&action=create_post");
                                }

                                 else {
                                     $userid=Model::getUserIdByUserName($user_name);
                                     
                                    if (Model::CreateNewPost($userid,$title,$content, $description)) {
                                        
                                            header('Location: ?controller=posts&action=index');

                                    }

                                    else {
              $_SESSION['post_error'] = "<span class='error'>Unknown problem occured. Try again.</span>";
              header("Location: ?controller=pages&action=create_post");
            }
                                } 

                            }

}


 ?>

<div class="container">
	<?php include 'header.php'; ?>
    
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Add New Post</h2>
                            
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">

    <div class="form-group">
        <input required="required" value="" placeholder="Enter title here" type="text" name ="title" class="form-control" />
    </div>
     <div class="form-group">
        <input required="required" value="" placeholder="Enter content here" type="text" name ="content" class="form-control" style="height: 50px;"/>
    </div>
    <div class="form-group">
        <textarea class="tinymce" id="texteditor" name="description" "></textarea>
    </div>
    <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
    <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
</form>
                        </div>
                    </div>
                </div>
</div>
