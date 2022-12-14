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
        <li><a href="{{Request::root()}}/outward_master">Manage Outward_master</a></li>
        <li class="active" ><a href="{{Request::root()}}/outward_master/add-outward_master">Add Outward_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Outward_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/outward_master/add-outward_master-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="material_id">Material_id:</label>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="material_description">Material_description:</label>
    <input type="text" class="form-control" id="material_description" name="material_description">
  </div>
    <div class="form-group">
    <label for="opening_stock">Opening_stock:</label>
    <input type="number" class="form-control" id="opening_stock" name="opening_stock">
  </div>
    <div class="form-group">
    <label for="issued">Issued:</label>
    <input type="number" class="form-control" id="issued" name="issued">
  </div>
    <div class="form-group">
    <label for="closing_stock">Closing_stock:</label>
    <input type="number" class="form-control" id="closing_stock" name="closing_stock">
  </div>
    <div class="form-group">
    <label for="unit_id">Unit_id:</label>
    <input type="number" class="form-control" id="unit_id" name="unit_id">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>