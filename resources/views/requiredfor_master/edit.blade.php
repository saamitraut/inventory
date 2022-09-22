<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Crud By PHP Code Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Laravel Crud By PHP Code Builder</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{Request::root()}}/requiredfor_master">Manage Requiredfor_master</a></li>
        <li><a href="{{Request::root()}}/requiredfor_master/add-requiredfor_master">Add Requiredfor_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Requiredfor_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/requiredfor_master/edit-requiredfor_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $requiredfor_master->id ?>"   name="requiredfor_master_id">


      <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $requiredfor_master->name ?>" class="form-control" id="name" name="name">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
