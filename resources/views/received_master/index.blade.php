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
        <li class="active" ><a href="{{Request::root()}}/received_master">Manage received_master</a></li>
        <li><a href="{{Request::root()}}/received_master/add-received_master">Add received_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage received_master</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($received_masters)>0)
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
@foreach($received_masters as $received_master)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/received_master/view-received_master/{{$received_master->id}}" > {{$received_master->material_id }}</a> </td>

        <td>
        <a href="{{Request::root()}}/received_master/change-status-received_master/{{$received_master->id }}" > @if($received_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/received_master/edit-received_master/{{$received_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/received_master/delete-received_master/{{$received_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No received_masters Found!</strong>
                </div>
 @endif
</div>

</body>
</html>