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
        <li><a href="{{Request::root()}}/issued_master/manage-issued_master">Manage Issued_master</a></li>
        <li><a href="{{Request::root()}}/issued_master/add-issued_master">Add Issued_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_id  :  <?php echo $issued_master->material_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   qty  :  <?php echo $issued_master->qty ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   unit_id  :  <?php echo $issued_master->unit_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   return_date  :  <?php echo $issued_master->return_date ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   rate  :  <?php echo $issued_master->rate ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   amount  :  <?php echo $issued_master->amount ?>
  </div>
</div>

</div>

</body>
</html>