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
        <li><a href="{{Request::root()}}/issued_master">Manage Issued_master</a></li>
        <li class="active" ><a href="{{Request::root()}}/issued_master/add-issued_master">Add Issued_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Issued_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/issued_master/add-issued_master-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="material_id">Material_id:</label>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="qty">Qty:</label>
    <input type="number" class="form-control" id="qty" name="qty">
  </div>
    <div class="form-group">
    <label for="unit_id">Unit_id:</label>
    <input type="number" class="form-control" id="unit_id" name="unit_id">
  </div>
    <div class="form-group">
    <label for="return_date">Return_date:</label>
    <input type="text" class="form-control" id="return_date" name="return_date">
  </div>
    <div class="form-group">
    <label for="rate">Rate:</label>
    <input type="text" class="form-control" id="rate" name="rate">
  </div>
    <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="number" class="form-control" id="amount" name="amount">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>