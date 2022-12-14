@include('includes.header')

  <div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage Stock</h4>
@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif
<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal" style="margin-bottom: 15px"
>
Report
</button>
<!-- Modal -->
<div class="modal fade " id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1"></h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>

  <div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Stock Report</h4>


@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($reports)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        {{-- <th>SL No</th> --}}
        <th>Material</th>
         <th>Credit</th>
        <th>Debit</th>
       <th>Available</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($reports as $report)
      <tr>
        {{-- <td>{{$i}} </td> --}}
        <td> <a href="{{Request::root()}}/report/view-report/{{$report->id}}" >{{$materials[$report->material_id]['name'] }}</a> </td>
        <td> {{$report->debit }} </td>
        <td> {{$report->credit }} </td>
       <td> {{$report->availableStock}}</td>
        {{-- <td>
          <div class="dropdown">            
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/report/change-status-report/{{$report->id }}"
                ><i class="bx bx-windows me-1"></i> @if($report->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/report/edit-report/{{$report->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/report/delete-report/{{$report->id}}" onclick="return confirm('are you sure to delete')"
                ><i class="bx bx-trash me-1"></i> Delete</a
              >
            </div>
          </div>
        </td> --}}

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

    </div>
  </div>
</div>
<!-- Modal end -->
@if(count($Stocks)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Credit</th>
        <th>Debit</th>
        <th>Date</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($Stocks as $Stock)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/Stock/view-Stock/{{$Stock->id}}" > {{$materials[$Stock->material_id]['name'] }}
        </a> </td>
<td> {{$Stock->credit }} </td>
<td> {{$Stock->debit }}</td>
<td> {{$Stock->date->format('Y-m-d') }}</td>
 
         <td>
          <div class="dropdown">            
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/Stock/change-status-Stock/{{$Stock->id }}"
                ><i class="bx bx-windows me-1"></i> @if($Stock->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Stock/edit-Stock/{{$Stock->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Stock/delete-Stock/{{$Stock->id}}" onclick="return confirm('are you sure to delete')"
                ><i class="bx bx-trash me-1"></i> Delete</a
              >
            </div>
          </div>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Stocks Found!</strong>
                </div>
 @endif
</div>
  </div>
@include('includes.footer')