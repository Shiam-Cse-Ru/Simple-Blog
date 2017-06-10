<?php session_start(); ?>
<?php include 'header.php'; ?>
<div class="container">

<div class="row">
<div class="col-md-10 col-md-offset-1">
<?php if (isset($_SESSION['user_name'])) {
  echo " <div class='alert alert-success'>
              <a href='' class='close' data-dismiss='alert'>×</a>
                <p>Login Successfull.</p>
            </div>";
} ?>


<div class="panel panel-info">
  <div class="panel-heading">
    <h3>Latest Posts</h3>
  </div>
  <div class="panel-body">
 <div class="">

 <?php 
$_SESSION['allposts']=$posts;
 if (isset($_SESSION['allposts'])) {

  while($post=mysqli_fetch_array($posts)) { 
    $userid=$post['user_id'];
    $Getusername=Model::GetuserNameByPostUserId($userid);
    ?>

    <div class="list-group">
    <div class="list-group-item">
      <h3><a href="?controller=posts&action=show&id=<?php echo $post['id']; ?>">  <h3><?php echo $post['title']; ?></h3></a>
              </h3>
      <p><?php echo $post['created_date']; ?> By <a href="#"><?php echo $Getusername[0]; ?></a></p>
      
    </div>
    <div class="list-group-item">
      <article>
        <p><?php echo $post['content']; ?></p>
   <p> <a href='?controller=posts&action=show&id=<?php echo $post['id']; ?>' class="btn btn-primary">Read More</a></p>
      </article>
    </div>
  </div>
<?php } }

else{

 echo "<div class='alert alert-info'>
  <strong>Opps!</strong> There is no post available.
</div>";

}


?>
    
    
</div>
  </div>
</div>

</div>
</div>

</div><!-- end container -->
  
<?php include 'footer.php'; ?>