
<div class="container">
  <div class="row">
    <nav class="navbar navbar-default navbar-inverse" style="background-color: #89C4F4;" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href='?controller=pages&action=home'>Home</a></li>
            <li class="active"><a href='?controller=posts&action=index'>Posts</a></li>
            <li><a href='?controller=pages&action=register'>Register</a></li>
             <li><a href='?controller=pages&action=login'>Login</a></li>

          </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn  btn-primary">Submit</button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>





<div class="row">
<div class="col-sm-12">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><p><?php echo $post['title']; ?></p></h3>
  </div>
  <div class="panel-body">
<p><?php echo $post['description']; ?></p>
  </div>
</div>

</div>
</div>


 
 <footer>
  <nav class="navbar navbar-default navbar-inverse" style="background-color: #4B77BE;" role="navigation">

      <p class="text-center"><b>Copyright@Abdullah Al Shiam</b></p>

    </nav>
    </footer>
</div><!-- end container -->
  
