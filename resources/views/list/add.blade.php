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
        <li><a href="{{Request::root()}}/list">Manage List</a></li>
        <li class="active" ><a href="{{Request::root()}}/list/add-list">Add List</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add List</h2>  
<form role="form" method="post" action="{{Request::root()}}/list/add-list-post"  enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
    <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="btn btn-primary" id="image" name="image">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>