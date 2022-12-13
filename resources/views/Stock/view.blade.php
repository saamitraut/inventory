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
        <li><a href="{{Request::root()}}/Stock/manage-Stock">Manage Stock</a></li>
        <li><a href="{{Request::root()}}/Stock/add-Stock">Add Stock</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_id  :  <?php echo $Stock->material_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   credit  :  <?php echo $Stock->credit ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   credited_on  :  <?php echo $Stock->credited_on ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   debit  :  <?php echo $Stock->debit ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   debited_on  :  <?php echo $Stock->debited_on ?>
  </div>
</div>

</div>

</body>
</html>