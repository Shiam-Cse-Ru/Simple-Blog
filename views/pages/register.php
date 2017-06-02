<?php session_start(); ?>
<?php 
$message="";

                    if (isset($_POST['submit'])) {

                            if (trim($_POST['name'])=='' || trim($_POST['email'])=='' || trim($_POST['password'])=='') {
                                $message = "Please fill all the fields with valid data.";
                            } 

                            else {
                                $name = trim($_POST['name']);
                                $email = trim($_POST['email']);
                                $password = trim($_POST['password']);

                                if (Model::checkForExistingUserName($name)) {
                                    $_SESSION['registration_error'] = "<span class='error'>The provided User Name is unavailable. Enter a different User Name.</span>";
                                      header("Location: ?controller=pages&action=register");
                                } 

                                else {
                                    $password = md5($password);
                                    if (Model::CreateNewuser($name, $email, $password)) {
                                         //$user_id = getUserIdByUserName($name);
                                         $_SESSION['user_name'] = $name;
                                            header('Location: ?controller=pages&action=login');

                                    }

                                    else {
              $_SESSION['registration_error'] = "<span class='error'>Unknown problem occured. Try again.</span>";
              header("Location: ?controller=pages&action=register");
            }
                                }
                            }
                            
                        }

                        else {
                           //header("Location: ?controller=pages&action=register");
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
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                        
                        <form role="form" method="post" action="?controller=pages&action=register">
                        
                              <div class="form-group">
                                <label class=" control-label">Name</label>
                                <input type="name" class="form-control" name="name" value="" required="">

                                
                            </div>

                            <div class="form-group">
                                <label class=" control-label">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="" required="">

                                
                            </div>

                            <div class="form-group">
                                <label class=" control-label">Password</label>
                                <input type="password" class="form-control" name="password" required="">

                               
                            </div>

                        

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary">
                                    
                               

                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


