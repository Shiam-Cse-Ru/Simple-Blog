<?php session_start(); ?>

<div class="container">
<?php include 'header.php'; ?>


<div class="row">
<div class="col-sm-6">
 <?php while($post=mysqli_fetch_array($posts)) { ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $post['title']; ?></h3>
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
  
