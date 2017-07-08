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
                                     echo"<script>alert('wrong username or password ')</script>";

                                } else {
                                    $user_name=Model::getUserNameByUserEmail($email);
                                    $_SESSION['user_name'] = $user_name;
                                    $successmessage = "Logging-in successful.";
                                    echo"<script>alert('Login Successful.')</script>";
                                     echo"<script>window.open('?controller=posts&action=index','_self')</script>";
                                }
                            }
                            
                        }





 ?>




<?php include 'header.php'; ?>
<div class="container">
	
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <?php if (isset($_SESSION['user_name'])) {
  echo " <div class='alert alert-success'>
              <a href='' class='close' data-dismiss='alert'>×</a>
                <p>Registration Successfull.Please login</p>
            </div>";
} ?>
            <div class="panel panel-info">
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
                                <input type="submit" name="submit" class="btn btn-primary" value="Login">
                                   
                                </input>

                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
