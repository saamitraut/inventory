@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Masters /</span> Manage Supplier</h4>
    
  
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
Add Supplier
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Supplier</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/Supplier/add-Supplier-post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
                <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" class="form-control" id="number" name="number">
              </div>
                <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save</button> </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->

@if(count($Suppliers)>0)
<div class="card">
  <h5 class="card-header">Manage Supplier</h5>
  <div class=" text-nowrap">
<table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Name</th>
        <th>Number</th>
        <th>Address</th>       
        <th>Status</th>
        {{--  --}}
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($Suppliers as $Supplier)
      <tr>
        <td>{{$i}} </td>
        {{--  --}}
        <td> <a href="{{Request::root()}}/Supplier/view-Supplier/{{$Supplier->id}}" > {{$Supplier->name }}</a> </td>       
        <td>{{$Supplier->number }}</a> </td>        
        <td>{{$Supplier->address }}</a> </td>
        <td><span class="badge bg-label-{{$Supplier->status?'primary':'warning' }} me-1">{{$Supplier->status?'Active':'Pending' }}</span></td>  

        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/Supplier/change-status-Supplier/{{$Supplier->id }}"
                ><i class="bx bx-windows me-1"></i> @if($Supplier->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Supplier/edit-Supplier/{{$Supplier->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/Supplier/delete-Supplier/{{$Supplier->id}}" onclick="return confirm('are you sure to delete')"
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
                    <strong>No Suppliers Found!</strong>
                </div>
 @endif
</div></div>
</div></div>

@include('includes.footer')
