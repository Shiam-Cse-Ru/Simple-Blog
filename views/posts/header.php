<div class="navbar navbar-inverse navbar-static-top">
 
 <div class="container">
 
 <a href="#" class="navbar-brand">Simple Blog </a> <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"></button>

      <div class="collapse navbar-collapse navHeaderCollapse">

      <ul class="nav navbar-nav">
              <li ><a href='?controller=pages&action=home'>Home</a></li>
            <li><a href='?controller=posts&action=index'>Blog</a></li>
            <?php if (!isset($_SESSION['user_name'])) {
            
            ?>
           <li><a href='?controller=pages&action=register'>Register</a></li>
           <?php } ?>
            <?php if (!isset($_SESSION['user_name'])) {
            
            ?>
           <li><a href='?controller=pages&action=login'>Login</a></li>
               <?php } ?>
         </ul>
         <?php if (isset($_SESSION['user_name'])) {
            
             $user_name=$_SESSION['user_name'];
           ?>
         <ul class="nav navbar-nav navbar-right">
         <li class="dropdown" > 

          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php 
          
          echo $user_name;
           ?><b class="caret"></b></a>

        <ul class="dropdown-menu">
        
         <li ><a href="?controller=pages&action=create_post">Add New Post</a></li>
          <li><a href="?controller=posts&action=my_post">My Posts</a></li>
          <li><a href="?controller=pages&action=profile">My Profile</a></li>
          <li><a href="?controller=pages&action=logout">Log Out</a></li>
          

        </ul>



            </li>
        </ul>
   <?php } ?>
   
      </div>
    </div>
  </div>