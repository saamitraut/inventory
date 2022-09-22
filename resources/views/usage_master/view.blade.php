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
        <li><a href="{{Request::root()}}/usage_master/manage-usage_master">Manage Usage_master</a></li>
        <li><a href="{{Request::root()}}/usage_master/add-usage_master">Add Usage_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   material_id  :  <?php echo $usage_master->material_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   no_of_units  :  <?php echo $usage_master->no_of_units ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   branch_id  :  <?php echo $usage_master->branch_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Requiredfor_id  :  <?php echo $usage_master->Requiredfor_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Purpose_id  :  <?php echo $usage_master->Purpose_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   customer_id  :  <?php echo $usage_master->customer_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   engineer_id  :  <?php echo $usage_master->engineer_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   responsible_person_id  :  <?php echo $usage_master->responsible_person_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   Receiptno  :  <?php echo $usage_master->Receiptno ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   amount  :  <?php echo $usage_master->amount ?>
  </div>
</div>

</div>

</body>
</html>