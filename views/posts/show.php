
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
              $date=date("Y-m-d h:i:s",strtotime('+4 hour'));
             $user_id=Model::getUserIdByUserName($user_name);   
              if (Model::CreateComment($post_id, $user_id, $comment,$date)) {
                 
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




<?php include 'header.php'; ?>
<div class="container">

<div class="row">
<div class="col-md-10 col-md-offset-1 d-inline bg-default">
<div class="panel panel-body panel-default">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3><p><?php echo $post['title'];?></p></h3>
  </div>
  <div class="panel-body">
<p><?php echo $post['description']; ?></p>
  </div>
</div>

<hr>

       <?php if (isset($successmsg)) {
 echo "<div class='alert alert-success'>
   <a href='' class='close' data-dismiss='alert'>×</a>
        <p>"
         .$successmsg.
        "</p>
      </div>";
      
}  ?>

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
        <?php if (isset($_SESSION['delete_success'])) {
          echo "<div class='alert alert-success'>
              <a href='' class='close' data-dismiss='alert'>×</a>
                <p>Comments successfully delete.</p>
            </div>";
        } ?>


          <?php if (isset($_SESSION['delete_error'])) {
          echo "<div class='alert alert-warning'>
              <a href='' class='close' data-dismiss='alert'>×</a>
                <p>Can not delete comments.</p>
            </div>";
        } ?>
        <div class="well">
     <h3 style="padding-left: 20px; padding-top: 25px;"><b>Comments</b></h3>
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
							<p><?php echo $show_comments['body'];?> 
               <?php 
               if (isset($_SESSION['user_name'])) {
                    $user_name=$_SESSION['user_name'];
  
                
               $user_id=Model::getUserIdByUserName($user_name);  
               $DeleteComment=Model::DeleteShowByUserId($user_id,$_GET['id']); 
               if ($DeleteComment) {
                 
               
               ?>
              <a href="?controller=pages&action=delete_comment&id=<?php echo $show_comments['id']; ?>"" class="btn btn-danger btn-sm pull-right">Delete</a>
<?php } }?>
              </p>
						</div>
					</div>
				</div>
				<?php } } else{?>
       <div class="alert alert-info">
              <a href="" class="close" data-dismiss="alert">×</a>
                 <?php echo "<p>Opps no comments are available.</p>"; }?>
            </div>
            </div>
        
</div>
</div>
</div>

</div><!-- end container -->
  
<?php include 'footer.php'; ?>