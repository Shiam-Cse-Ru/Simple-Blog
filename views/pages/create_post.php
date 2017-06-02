
<?php session_start(); ?>
<div class="container">
	<?php include 'header.php'; ?>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Add New Post</h2>
                            
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">
    <input type="hidden" name="_token" value="">
    <div class="form-group">
        <input required="required" value="" placeholder="Enter title here" type="text" name = "title" class="form-control" />
    </div>
    <div class="form-group">
        <textarea name='body' class="form-control"></textarea>
    </div>
    <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
    <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
</form>
                        </div>
                    </div>
                </div>
</div>
