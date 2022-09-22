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
        <li><a href="{{Request::root()}}/inward_master">Manage Inward_master</a></li>
        <li class="active" ><a href="{{Request::root()}}/inward_master/add-inward_master">Add Inward_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Inward_master</h2>  

  <form role="form" method="post" action="{{Request::root()}}/inward_master/add-inward_master-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <div class="mb-3">
      <label for="defaultSelect" class="form-label">Material</label>
      <select id="defaultSelect" class="form-select">
        <option>Select Material</option>
        
        @foreach($materials as $material)
          <option value="{{$material->id}}">{{ $material->name }}</option>
        @endforeach
      </select>
    </div>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="material_description">Material_description:</label>
    <input type="text" class="form-control" id="material_description" name="material_description">
  </div>
    <div class="form-group">
    <label for="opening_stock">Opening_stock:</label>
    <input type="text" class="form-control" id="opening_stock" name="opening_stock">
  </div>
    <div class="form-group">
    <label for="received">Received:</label>
    <input type="number" class="form-control" id="received" name="received">
  </div>
    <div class="form-group">
    <label for="return">Return:</label>
    <input type="text" class="form-control" id="return" name="return">
  </div>
    <div class="form-group">
    <label for="unit">Unit:</label>
    <input type="text" class="form-control" id="unit" name="unit">
  </div>
    <div class="form-group">
    <label for="rate">Rate:</label>
    <input type="text" class="form-control" id="rate" name="rate">
  </div>
    <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" id="amount" name="amount">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>