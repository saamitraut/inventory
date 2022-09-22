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
        <li class="active" ><a href="{{Request::root()}}/return_master">Manage Return_master</a></li>
        <li><a href="{{Request::root()}}/return_master/add-return_master">Add Return_master</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Return_master</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($return_masters)>0)
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
@foreach($return_masters as $return_master)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/return_master/view-return_master/{{$return_master->id}}" > {{$return_master->material_id }}</a> </td>

        <td>
        <a href="{{Request::root()}}/return_master/change-status-return_master/{{$return_master->id }}" > @if($return_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/return_master/edit-return_master/{{$return_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/return_master/delete-return_master/{{$return_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Return_masters Found!</strong>
                </div>
 @endif
</div>

</body>
</html>