@include('includes.header')

  <div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage Report</h4>


@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($reports)>0)
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
@foreach($reports as $report)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/report/view-report/{{$report->id}}" > {{$report->material_id }}</a> </td>

        <td>
        <a href="{{Request::root()}}/report/change-status-report/{{$report->id }}" > @if($report->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/report/edit-report/{{$report->id}}" >Edit</a>
        <a href="{{Request::root()}}/report/delete-report/{{$report->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Reports Found!</strong>
                </div>
 @endif
</div>
  </div>
@include('includes.footer')