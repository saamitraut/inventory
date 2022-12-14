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
        <li class="active" ><a href="{{Request::root()}}/list">Manage List</a></li>
        <li><a href="{{Request::root()}}/list/add-list">Add List</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage List</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($lists)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>name</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($lists as $list)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/list/view-list/{{$list->id}}" > {{$list->name }}</a> </td>

        <td>
        <a href="{{Request::root()}}/list/change-status-list/{{$list->id }}" > @if($list->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/list/edit-list/{{$list->id}}" >Edit</a>
        <a href="{{Request::root()}}/list/delete-list/{{$list->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Lists Found!</strong>
                </div>
 @endif
</div>

</body>
</html>