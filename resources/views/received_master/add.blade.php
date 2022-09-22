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
        <li><a href="{{Request::root()}}/received_master">Manage received_master</a></li>
        <li class="active" ><a href="{{Request::root()}}/received_master/add-received_master">Add received_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add received_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/received_master/add-received_master-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="material_id">Material_id:</label>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="qty">Qty:</label>
    <input type="text" class="form-control" id="qty" name="qty">
  </div>
    <div class="form-group">
    <label for="unit_id">Unit_id:</label>
    <input type="text" class="form-control" id="unit_id" name="unit_id">
  </div>
    <div class="form-group">
    <label for="received_on">Received_on:</label>
    <input type="text" class="form-control" id="received_on" name="received_on">
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

