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
        <li><a href="{{Request::root()}}/report/manage-report">Manage Report</a></li>
        <li><a href="{{Request::root()}}/report/add-report">Add Report</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_id  :  <?php echo $report->material_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   credit  :  <?php echo $report->credit ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   debit  :  <?php echo $report->debit ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   availableStock  :  <?php echo $report->availableStock ?>
  </div>
</div>

</div>

</body>
</html>