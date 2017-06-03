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

 ?>
<div class="container">
<?php include 'header.php'; ?>


<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
            <div class="panel-heading">
              <h2><?php echo $user_name; ?>
            </h2>
                          </div>
            <div class="panel-body">
              <div>
  <ul class="list-group">
    <li class="list-group-item">
      Joined on Jun 02,2017 at 10:52 am
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
      <td>Total Comments</td> 
      <td> <?php echo $TotalComments; ?></td>
    </li>
  </ul>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><h3>Latest Posts</h3></div>
  <div class="panel-body">
              <p>
        <strong><a href="http://localhost/blog-master/public/sdgdgd">Under Construct</a></strong>
        <span class="well-sm">On Jun 02,2017 at 01:57 pm</span>
      </p>
          <p>
        <strong><a href="http://localhost/blog-master/public/sadfsdfsddfsddgf">Under Construct</a></strong>
        <span class="well-sm">On Jun 02,2017 at 01:59 pm</span>
      </p>
          </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><h3>Latest Comments</h3></div>
  <div class="list-group">
              <div class="list-group-item">
        <p>Under Construct</p>
        <p>On Jun 02,2017 at 06:01 pm</p>
        <p>On post <a href="http://localhost/blog-master/public/sadfsdfsddfsddgf">Under Construct</a></p>
      </div>
          <div class="list-group-item">
        <p>Under Construct</p>
        <p>On Jun 02,2017 at 06:05 pm</p>
        <p>On post <a href="http://localhost/blog-master/public/wikipedia">Under Construct</a></p>
      </div>
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
  



  
