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
        <li class="active" ><a href="{{Request::root()}}/issued_master">Manage Issued_master</a></li>
        <li><a href="{{Request::root()}}/issued_master/add-issued_master">Add Issued_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Issued_master</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($issued_masters)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>material_id</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($issued_masters as $issued_master)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/issued_master/view-issued_master/{{$issued_master->id}}" > {{$issued_master->material_id }}</a> </td>

        <td>
        <a href="{{Request::root()}}/issued_master/change-status-issued_master/{{$issued_master->id }}" > @if($issued_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/issued_master/edit-issued_master/{{$issued_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/issued_master/delete-issued_master/{{$issued_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Issued_masters Found!</strong>
                </div>
 @endif
</div>

</body>
</html>