<?php session_start(); ?>
<?php 

if (isset($_SESSION['user_name'])) {
  $user_name=$_SESSION['user_name'];

}
$user_id=Model::getUserIdByUserName($user_name);
$totalpost=Model::TotalPosts($user_id);
$TotalPublishPost=Model::TotalPublishPosts($user_id);
$PosInDraft=Model::TotalDraftPosts($user_id);
$TotalComments=Model::TotalComments($user_id);
$getyserjoineddate=Model::GetUserjoindate($user_name);
 ?>
<div class="container">
<?php include 'header.php'; ?>


<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-info">
            <div class="panel-heading">
              <h2><?php echo $user_name; ?>
            </h2>
             </div>
            <div class="panel-body">
              <div>
  <ul class="list-group">
    <li class="list-group-item">
      <strong>Joined on </strong> <td><?php echo $getyserjoineddate; ?></td>
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td{
            padding: 3px 8px;
          }
        </style>
        <tbody><tr>
          <td>Total Posts</td>
          <td><?php echo $totalpost; ?></td>
                    <td><a href="?controller=posts&action=my_post">Show All</a></td>
                  </tr>
        <tr>
          <td>Published Posts</td>
           <td><?php echo $TotalPublishPost; ?></td>
                    <td><a href="?controller=posts&action=index">Show All</a></td>
                  </tr>
        <tr>
          <td>Posts in Draft </td>
           <td><?php echo $PosInDraft; ?></td>
                    <td><a href="http://localhost/blog-master/public/my-drafts">Show All</a></td>
                  </tr>
      </tbody></table>
    </li>
    <li class="list-group-item">
      <td>Total Comments&nbsp</td> 
      <td> <?php echo $TotalComments; ?></td>
    </li>
  </ul>
</div>

<div class="panel panel-info">
  <div class="panel-heading"><h3>Latest Posts</h3></div>
  <div class="panel-body">
      <?php $LatesPosts=Model::GetLatestPostByUserId($user_id); 
       
        while($row=mysqli_fetch_array($LatesPosts)){
      ?>
              <p>
        <strong><a href="?controller=posts&action=show&id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></strong>
        <span class="well-sm">On <?php echo $row['created_date']; ?></span>
      </p>
        
      <?php } ?>
          </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading"><h3>Latest Comments</h3></div>
  <div class="list-group">
    <?php 
    $LatestComments=Model::GetLatestCommentByUserId($user_id); 

       if ($LatestComments) {
    
        while($comment=mysqli_fetch_array($LatestComments)){

          $postId=$comment['post_id'];
          $postname=Model::GetPostByPostId($postId);
      ?>
        <div class="list-group-item">
        <p><strong>Comment Description: </strong><?php echo $comment['body']; ?></p>
        <p>On <?php echo $comment['created_date']; ?></p>
        <p>On post <a href="?controller=posts&action=show&id=<?php echo $postId; ?>"><?php echo $postname[0] ; ?></a></p>
      </div>
        
  <?php } } else{?>

<?php echo "<h4>You have no Comments.</h4>"; }?>

   </div>
</div>
            </div>
          </div>
</div>
</div>
 <footer>
  <nav class="navbar navbar-default navbar-inverse" style="background-color: #4B77BE;"  role="navigation">
   

      <p class="text-center"><b>Copyright@Abdullah Al Shiam</b></p>

    </nav>
    </footer>
</div><!-- end container -->
  



  
