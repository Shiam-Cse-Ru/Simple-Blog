
<?php session_start(); ?>
<?php 

if (isset($_SESSION['user_name'])) {
	$user_name=$_SESSION['user_name'];
  
}
$id=$_GET['id'];
if (isset($_POST['post'])) {
	 if (trim($_POST['comment'])=='') {
         $errmsg = "Please fill all the fields with valid data.";
         } 

         else {
             $comment = trim($_POST['comment']);
             $post_id=$_GET['id'];
             $date=date("Y-m-d h:i:sa");
             $user_id=Model::getUserIdByUserName($user_name);   
              if (Model::CreateComment($post_id, $user_id, $comment,$date)) {
                    //$user_id = getUserIdByUserName($name);
                   //$_SESSION['post'] =true;

                    // header('Location: ?controller=posts&action=show&id='.$id);
                    $successmsg="Comments create successful.";
                    }

               else {
              $errmsg="Something Wrong";
            }
                   



             }
}

 ?>
 <?php 
  $show_comment=Model::Show_Comment($_GET['id']);
  $_SESSION['post_success']=$show_comment;

  ?>
<!-- <?php 

$on_comment_user_id=Model::GetUserIdByPostId($_GET['id']);

						  while ($id=mysqli_fetch_array($on_comment_user_id)) {
	                         $data[$i++]=$id['user_id'];

                           echo $i."<br>";
                       }
						
 ?> -->

<div class="container">
<?php include 'header.php'; ?>

<div class="row">
<div class="col-md-10 col-md-offset-1">

<div class="panel panel-info">
  <div class="panel-heading">
    <h3><p><?php echo $post['title'];?></p></h3>
  </div>
  <div class="panel-body">
<p><?php echo $post['description']; ?></p>
  </div>
</div>

<hr>

       <?php echo !empty($successmsg)?'<div class="flash alert-success">
      <p class="panel-body">'.$successmsg.'</p>
      </div>':''; ?>

<?php if (isset($_SESSION['user_name'])) {
	
 ?>

<div class="well">
      <h4>Leave a Comment:</h4>
       <form role="form" method="post" action="?controller=posts&action=show&id=<?php echo $_GET['id']; ?>" >
        <div class="form-group">
          <textarea class="form-control" rows="3" name="comment" required=""></textarea>
       </div>
        <input type="submit" name="post" value="Post" class="btn btn-primary"></input>
        </form>
        </div>
        <?php } ?>
     <h3 style="padding-left: 20px; padding-top: 25px;"><b>All Comments</b></h3>
         <?php if (isset($_SESSION['post_success'])) {
         
         
         while($show_comments=mysqli_fetch_array($show_comment)) { 
           
           $userid=$show_comments['user_id'];
          $getusername=Model::getUserNameByUserId($userid);

          ?>
        <div class="panel-body">
					<div class="list-group">
						<div class="list-group-item">
						  
						
							 
							<p>On <strong><?php echo $show_comments['created_date']; ?></strong> By <a href=""><?php echo $getusername[0]; ?></a></p>
						</div>

						<div class="list-group-item">
							<p><?php echo $show_comments['body']; ?></p>
						</div>
					</div>
				</div>
				<?php } } ?>
</div>
</div>


 
 <footer>
  <nav class="navbar navbar-default navbar-inverse" style="background-color: #4B77BE;" role="navigation">

      <p class="text-center"><b>Copyright@Abdullah Al Shiam</b></p>

    </nav>
    </footer>
</div><!-- end container -->
  
