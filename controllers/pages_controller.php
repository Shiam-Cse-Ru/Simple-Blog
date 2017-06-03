<?php
  class PagesController {
    public function home() {
      $first_name = 'Abdullah Al';
      $last_name  = 'Shiam';
      require_once('views/pages/home.php');
    }

     public function login() {
      
      require_once('views/pages/login.php');
    }

    public function register(){


      require_once('views/pages/register.php');
    }

    public function create_post(){


      require_once('views/pages/create_post.php');
    }
    
      public function edit_post(){


      require_once('views/pages/edit_post.php');
    } 

    public function logout(){


      require_once('views/pages/logout.php');
    }
    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>