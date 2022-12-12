@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manage Outward_master</h4>

  
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
Add Outward Entries
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Outward Entries</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/outward_master/add-outward_master-post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
  <div class="mb-3">
                <label for="defaultSelect" class="form-label">Material_id:</label>
                <select id="material_id" name="material_id" class="form-select">
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
                <div class="mb-3">
                <label for="defaultSelect" class="form-label">Unit_id:</label>
                <select id="unit_id" name="unit_id" class="form-select">
                  <option>Select Unit</option>                  
                  @foreach($units as $unit)
                    <option value="{{$unit['id']}}">{{ $unit['name'] }}</option>
                  @endforeach
                </select>
              </div>
    <div class="form-group">
    <label for="material_description">Material_description:</label>
    <input type="text" class="form-control" id="material_description" name="material_description" required>
  </div>
    <div class="form-group">
    <label for="opening_stock">Opening_stock:</label>
    <input type="number" class="form-control" id="opening_stock" name="opening_stock" required>
  </div>
    <div class="form-group">
    <label for="issued">Issued:</label>
    <input type="number" class="form-control" id="issued" name="issued" required>
  </div>
    <div class="form-group">
    <label for="closing_stock">Closing_stock:</label>
    <input type="number" class="form-control" id="closing_stock" name="closing_stock" required>
  </div>
 <div class="mb-3">
                <label for="created_at" class="col-md-2 col-form-label">Created At</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="created_at" name="created_at" required>
                </div>
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
<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#basicModal2" style="margin-bottom: 15px"
>
Search
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Search Outward Entries</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/outward_master/" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
  <div class="mb-3">
                <label for="defaultSelect" class="form-label">Material_id:</label>
                <select id="material_id" name="material_id" class="form-select">
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
    
 <div class="mb-3">
                <label for="created_at" class="col-md-2 col-form-label">Created At</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="created_at" name="created_at" required>
                </div>
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
@if(count($outward_masters)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Issued</th>
        <th>Created_at</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($outward_masters as $outward_master)
      <tr>
        <td>{{$i}} </td>
        {{-- <td> <a href="{{Request::root()}}/outward_master/view-outward_master/{{$outward_master->id}}" > {{$outward_master->material_id }}</a> </td> --}}
<td> <a href="{{Request::root()}}/inward_master/view-inward_master/{{$outward_master->id}}" > {{$materials[$outward_master->material_id]['name'] }}</a> </td>  
 <td> {{$outward_master->issued}}</td>
 <td> {{$outward_master->created_at}}</td>
        
        <td>  
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/change-status-outward_master/{{$outward_master->id }}"
                  ><i class="bx bx-windows me-1"></i> @if($outward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
                >
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/edit-outward_master/{{$outward_master->id}}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <a class="dropdown-item" href="{{Request::root()}}/outward_master/delete-outward_master/{{$outward_master->id}}" onclick="return confirm('are you sure to delete')"
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
                    <strong>No Outward_masters Found!</strong>
                </div>
 @endif
</div>

</div>
@include('includes.footer')