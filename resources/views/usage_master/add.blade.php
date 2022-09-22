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
        <li><a href="{{Request::root()}}/usage_master">Manage Usage_master</a></li>
        <li class="active" ><a href="{{Request::root()}}/usage_master/add-usage_master">Add Usage_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Usage_master</h2>  
<form role="form" method="post" action="{{Request::root()}}/usage_master/add-usage_master-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="material_id">Material_id:</label>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="no_of_units">No_of_units:</label>
    <input type="number" class="form-control" id="no_of_units" name="no_of_units">
  </div>
    <div class="form-group">
    <label for="branch_id">Branch_id:</label>
    <input type="number" class="form-control" id="branch_id" name="branch_id">
  </div>
    <div class="form-group">
    <label for="Requiredfor_id">Requiredfor_id:</label>
    <input type="number" class="form-control" id="Requiredfor_id" name="Requiredfor_id">
  </div>
    <div class="form-group">
    <label for="Purpose_id">Purpose_id:</label>
    <input type="number" class="form-control" id="Purpose_id" name="Purpose_id">
  </div>
    <div class="form-group">
    <label for="customer_id">Customer_id:</label>
    <input type="number" class="form-control" id="customer_id" name="customer_id">
  </div>
    <div class="form-group">
    <label for="engineer_id">Engineer_id:</label>
    <input type="number" class="form-control" id="engineer_id" name="engineer_id">
  </div>
    <div class="form-group">
    <label for="responsible_person_id">Responsible_person_id:</label>
    <input type="number" class="form-control" id="responsible_person_id" name="responsible_person_id">
  </div>
    <div class="form-group">
    <label for="Receiptno">Receiptno:</label>
    <input type="text" class="form-control" id="Receiptno" name="Receiptno">
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