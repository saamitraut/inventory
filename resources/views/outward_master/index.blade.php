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
              <div class="form-group">
    <label for="material_id">Material_id:</label>
    <input type="number" class="form-control" id="material_id" name="material_id">
  </div>
    <div class="form-group">
    <label for="material_description">Material_description:</label>
    <input type="text" class="form-control" id="material_description" name="material_description">
  </div>
    <div class="form-group">
    <label for="opening_stock">Opening_stock:</label>
    <input type="number" class="form-control" id="opening_stock" name="opening_stock">
  </div>
    <div class="form-group">
    <label for="issued">Issued:</label>
    <input type="number" class="form-control" id="issued" name="issued">
  </div>
    <div class="form-group">
    <label for="closing_stock">Closing_stock:</label>
    <input type="number" class="form-control" id="closing_stock" name="closing_stock">
  </div>
    <div class="form-group">
    <label for="unit_id">Unit_id:</label>
    <input type="number" class="form-control" id="unit_id" name="unit_id">
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
        <td>
        <a href="{{Request::root()}}/outward_master/change-status-outward_master/{{$outward_master->id }}" > @if($outward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/outward_master/edit-outward_master/{{$outward_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/outward_master/delete-outward_master/{{$outward_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
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