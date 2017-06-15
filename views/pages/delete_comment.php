<?php 

$deletecomment=Model::DeleteComment($_GET['id']);
if ($deletecomment) {
	$_SESSION['delete_success']=true;
header("Location: ?controller=posts&action=my_post");
}
else{
$_SESSION['delete_error']=true;

}

 ?>