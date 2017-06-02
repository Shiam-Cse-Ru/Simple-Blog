<?php session_start(); ?>
<?php 

 if (isset($_POST['submit'])) {
                            if (trim($_POST['email'])=='' || trim($_POST['password'])=='') {
                                $message = "Please fill all the fields with valid data.";
                            } else {
                                $email = trim($_POST['email']);
                                $password = trim($_POST['password']);
                                $password = md5($password);

                                $user = Model::checkForUser($email, $password);

                                if ($user == null) {
                                    $message = "Wrong \"email\" or \"password\". Please try again.";
                                } else {
                                    $_SESSION['user'] = $user;
                                    $successmessage = "Logging-in successful.";
                                     echo"<script>window.open('?controller=posts&action=index','_self')</script>";
                                }
                            }
                            
                        }





 ?>





<div class="container">
	  <div class="row">
    <nav class="navbar navbar-default navbar-inverse " style="background-color: #89C4F4;" role="navigation">
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
            <li class="active "><a href='?controller=pages&action=home'>Home</a></li>
            <li><a href='?controller=posts&action=index'>Blog</a></li>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                        
                        <form role="form" method="POST" action="?controller=pages&action=login">
                        

                            <div class="form-group">
                                <label class=" control-label">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="">

                                
                            </div>

                            <div class="form-group">
                                <label class=" control-label">Password</label>
                                <input type="password" class="form-control" name="password">

                               
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>
                                </input>

                                <a class="btn btn-link" href="">Forgot Your Password?</a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


