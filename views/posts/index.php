<?php session_start(); ?>

<div class="container">
  <div class="row">

  <div class="navbar navbar-default navbar-inverse"  role="navigation">
  
  <div class="container">
    <div class="nav-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>

      </button>
  
      <a href="#" class="navbar-brand">Blog</a>

    </div>
  
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
              <li ><a href='?controller=pages&action=home'>Home</a></li>
            <li class="active "><a href='?controller=posts&action=index'>Blog</a></li>
           <li><a href='?controller=pages&action=register'>Register</a></li>

           <li><a href='?controller=pages&action=login'>Login</a></li>


         <li class="dropdown"> 

          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if (isset($_SESSION['user_name'])) {
          echo $_SESSION['user_name'];
          } ?><b class="caret"></b></a>

        <ul class="dropdown-menu">
        
          <li ><a href="dog.html">Dogs</a></li>
          <li><a href="cat.html">Cats</a></li>
          <li><a href="other.html">Other animals</a></li>
          

        </ul>



            </li>
        </ul>
  

        <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="     Search">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>




      </div>


  </div>

</div>
  </div>


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
  
