 
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
        <li><a href="{{Request::root()}}/outward_master/manage-outward_master">Manage Outward_master</a></li>
        <li><a href="{{Request::root()}}/outward_master/add-outward_master">Add Outward_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_id  :  <?php echo $outward_master->material_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_description  :  <?php echo $outward_master->material_description ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   opening_stock  :  <?php echo $outward_master->opening_stock ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   issued  :  <?php echo $outward_master->issued ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   closing_stock  :  <?php echo $outward_master->closing_stock ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   unit_id  :  <?php echo $outward_master->unit_id ?>
  </div>
</div>

</div>

</body>
</html>
