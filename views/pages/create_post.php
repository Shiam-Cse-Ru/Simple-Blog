
<?php session_start(); ?>

<?php 

if (isset($_SESSION['user_name'])) {
    $user_name=$_SESSION['user_name'];
}

if (isset($_POST['publish'])) {
     if (trim($_POST['title'])=='' || trim($_POST['content'])=='' || trim($_POST['description'])=='') {
                                $errmsg = "Please fill all the fields with valid data.";
                            } 

                              else {
                                $title =$_POST['title'];
                                $content = $_POST['content'];
                                $description =$_POST['description'];
                                $date=date("Y-m-d h:i:s",strtotime('+4 hour'));

                          

                                     $userid=Model::getUserIdByUserName($user_name);
                                     
                                    if (Model::CreateNewPost($userid,$title,$content,$description,$date)) {
                                        
                                      $successmsg="Post Create Sucessfull";

                                    }

                                    else {
                                       $errmsg="Unknown problem occured.";
                                     }
                                 

                            }

}

if (isset($_POST['save'])) {
     if (trim($_POST['title'])=='' || trim($_POST['content'])=='' || trim($_POST['description'])=='') {
                                $errmsg = "Please fill all the fields with valid data.";
                            } 

                              else {
                                $title = trim($_POST['title']);
                                $content = trim($_POST['content']);
                                $description = trim($_POST['description']);
                                $date=date("Y-m-d h:i:sa");
                               

                              
                              $userid=Model::getUserIdByUserName($user_name);
                                     
                              if (Model::SaveAsDraft($userid,$title,$content, $description,$date)) {
                                     $successmsg="Post sucessfully saved in Draft";


                                    }

                                    else {
                                        $errmsg="Unknown problem occured.";
                                       }
                              

                            }

}


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
    <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
</form>
                        </div>
                    </div>
                </div>
</div>
</div>
<?php include 'footer.php'; ?>