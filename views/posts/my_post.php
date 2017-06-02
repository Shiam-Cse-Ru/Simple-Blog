<?php session_start(); ?>
<?php 

if (isset($_SESSION['user_name'])) {
	$user_name=$_SESSION['user_name'];

}

       $user_id=Model::getUserIdByUserName($user_name);
       $posts = Model::my_post($user_id);
      
 ?>

 <div class="container">
<?php include 'header.php'; ?>


<div class="row">
<div class="col-md-10 col-md-offset-1">
 <?php while($post=mysqli_fetch_array($posts)) { ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3><?php echo $post['title']; ?></h3>
  </div>
  <div class="panel-body">
  <p><?php echo $post['content']; ?></p>
   <p> <a href='?controller=posts&action=show&id=<?php echo $post['id']; ?>' class="btn btn-primary">Read More</a></p>
  </div>
</div>
<?php } ?>
</div>
</div>
 <footer>
  <nav class="navbar navbar-default navbar-inverse" style="background-color: #4B77BE;"  role="navigation">
   

      <p class="text-center"><b>Copyright@Abdullah Al Shiam</b></p>

    </nav>
    </footer>
</div><!-- end container -->
  



  
