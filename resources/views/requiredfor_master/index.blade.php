@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Required For Master</h4>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif
              <!-- Button trigger modal -->
              <button
              type="button"
              class="btn btn-primary" style="margin-bottom: 15px"
              data-bs-toggle="modal"
              data-bs-target="#basicModal"
            >
              Add Requiredfor
            </button>
            <!-- Modal -->
            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Add requiredfor</h5>
                      <button
                        type="button"
                        class="btn-close" 
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="{{Request::root()}}/requiredfor_master/add-requiredfor_master-post" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                          </div>
                            
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" class="btn btn-primary">Save changes</button> </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal end -->
@if(count($requiredfor_masters)>0)
<div class="card">
  <h5 class="card-header">Manage requiredfor Master</h5>
  <div class=" text-nowrap">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>name</th>
        <th>Status</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($requiredfor_masters as $requiredfor_master)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/requiredfor_master/view-requiredfor_master/{{$requiredfor_master->id}}" > {{$requiredfor_master->name }}</a> </td>
        
        <td><span class="badge bg-label-{{$requiredfor_master->status?'primary':'warning' }} me-1">{{$requiredfor_master->status?'Active':'Pending' }}</span></td>  
                          <td>
        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{Request::root()}}/requiredfor_master/change-status-requiredfor_master/{{$requiredfor_master->id }}"
                ><i class="bx bx-windows me-1"></i> @if($requiredfor_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/requiredfor_master/edit-requiredfor_master/{{$requiredfor_master->id}}"
                ><i class="bx bx-edit-alt me-1"></i> Edit</a
              >
              <a class="dropdown-item" href="{{Request::root()}}/requiredfor_master/delete-requiredfor_master/{{$requiredfor_master->id}}" onclick="return confirm('are you sure to delete')"
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
                    <strong>No Requiredfor_masters Found!</strong>
                </div>
 @endif
</div>
</div>
</div></div>
@include('includes.footer')
