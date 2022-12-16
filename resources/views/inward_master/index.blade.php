@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content starts -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inward Entries</h4>

  
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
Add inward
</button>
<button
type="button"
class="btn btn-primary"
 style="margin-bottom: 15px"
 id="exporttable"
>
Export
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add inward</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="/inward_master/add-inward_master-post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Material</label>
                <select id="material_id" name="material_id" class="form-select">
                  <option>Select Material</option>                  
                  @foreach($materials as $material)
                    <option value="{{$material['id']}}">{{ $material['name'] }}</option>
                  @endforeach
                </select>
              </div>
                <div class="form-group">
                <label for="material_description">Material Description:</label>
                <input type="text" class="form-control" id="material_description" name="material_description">
              </div>
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Supplier</label>
                <select id="defaultSelect" name="supplier" class="form-select">
                  <option>Select Supplier</option>                  
                  @foreach($suppliers as $supplier)
                    <option value="{{$supplier['id']}}">{{ $supplier['name'] }}</option>
                  @endforeach
                </select>
              </div>
                <div class="form-group">
                <label for="received">Received:</label>
                <input type="number" class="form-control" id="received" name="received">
              </div>
                <div class="form-group">
                <label for="return">Return:</label>
                <input type="text" class="form-control" id="return" name="return">
              </div>
                {{-- <div class="form-group">
                <label for="unit">Unit:</label>
                <input type="text" class="form-control" id="unit" name="unit">
              </div> --}}
                <div class="form-group">
                <label for="rate">Rate:</label>
                <input type="text" class="form-control" id="rate" name="rate">
              </div>
              <div class="mb-3">
                <label for="receivedon" class="col-md-2 col-form-label">receivedon</label>
                <div class="col-md-10"><input class="form-control" type="date" value="" id="receivedon" name="receivedon">
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

@if(count($inward_masters)>0)
  <table class="table table-hover" id="htmltable">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Material</th>
        <th>Description</th>
        <th>Supplier</th>
      {{--  --}}
        <th>Received</th>
        <th>Return</th>
        <th>ReceivedOn</th>
        <th>CreateddOn</th>
        <th id='noExl'>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>

@foreach($inward_masters as $inward_master)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/inward_master/view-inward_master/{{$inward_master->id}}" > {{$materials[$inward_master->material_id]['name'] }}</a> </td>        
        <td>{{$inward_master->material_description}}</td>
        <td>{{$inward_master->supplier?$suppliers[$inward_master->supplier]['name']:''}} </td>
          <td>{{$inward_master->received}}</td>
          <td>{{$inward_master->return}}</td><td>{{is_null($inward_master->receivedon) ?'':$inward_master->receivedon}}</td>

          <td>{{$inward_master->created_at}}</td>
          <td id='noExl'>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{Request::root()}}/inward_master/change-status-inward_master/{{$inward_master->id }}"
                  ><i class="bx bx-windows me-1"></i> @if($inward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif</a
                >
                {{-- <a class="dropdown-item" href="{{Request::root()}}/inward_master/edit-inward_master/{{$inward_master->id}}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a> --}}
                  <a data-bs-toggle="modal"
data-bs-target="#basicModall{{$i}}" class="dropdown-item" href="#"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{Request::root()}}/inward_master/delete-inward_master/{{$inward_master->id}}" onclick="return confirm('are you sure to delete')"
                  ><i class="bx bx-trash me-1"></i> Delete</a
                >
              </div>
            </div>
          </td>
          {{-- <td class="noExport"><a href="{{Request::root()}}/inward_master/change-status-inward_master/{{$inward_master->id }}" > @if($inward_master->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/inward_master/edit-inward_master/{{$inward_master->id}}" >Edit</a>
        <a href="{{Request::root()}}/inward_master/delete-inward_master/{{$inward_master->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td> --}}

      </tr>
      <!-- Modal -->
<div class="modal fade" id="basicModall{{$i}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabell{{$i}}">Add inward</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form role="form" method="post" action="{{Request::root()}}/inward_master/edit-inward_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="{{$inward_master->id }}"   name="inward_master_id">
 <div class="mb-3">
  <label for="defaultSelect" class="form-label">Material</label>
  <select id="material_id" name="material_id" class="form-select">
    <option>Select Material</option>                  
    @foreach($materials as $material)
      <option {{$inward_master->material_id==$material['id']?'selected':''}} value="{{$material['id']}}">{{ $material['name'] }}</option>
    @endforeach
  </select></div>
    <div class="mb-3">
    <label for="material_description">Material_description:</label>
    <input type="text" value="<?php echo $inward_master->material_description ?>" class="form-control" id="material_description" name="material_description">
  </div>
  <div class="mb-3">
                <label for="defaultSelect" class="form-label">Supplier</label>
                <select id="defaultSelect" name="supplier" class="form-select">
                  <option>Select Supplier</option>                  
                  @foreach($suppliers as $supplier)
                    <option {{$supplier['id']==$inward_master->supplier?'selected':''}} value="{{$supplier['id']}}">{{ $supplier['name'] }}</option>
                  @endforeach
                </select>
              </div>
    <div class="mb-3">
    <label for="opening_stock">Opening_stock:</label>
    <input type="text" value="<?php echo $inward_master->opening_stock ?>" class="form-control" id="opening_stock" name="opening_stock">
  </div>
    <div class="mb-3">
    <label for="received">Received:</label>
    <input type="number" value="<?php echo $inward_master->received ?>" class="form-control" id="received" name="received">
  </div>
    <div class="mb-3">
    <label for="return">Return:</label>
    <input type="text" value="<?php echo $inward_master->return ?>" class="form-control" id="return" name="return">
  </div>
    <div class="mb-3">
    <label for="unit">Unit:</label>
    <input type="text" value="<?php echo $inward_master->unit ?>" class="form-control" id="unit" name="unit">
  </div>
    <div class="mb-3">
    <label for="rate">Rate:</label>
    <input type="text" value="<?php echo $inward_master->rate ?>" class="form-control" id="rate" name="rate">
  </div>
    <div class="mb-3">
    <label for="amount">Amount:</label>
    <input type="text" value="<?php echo $inward_master->amount ?>" class="form-control" id="amount" name="amount">
    <div class="mb-3">
                
              <label for="receivedon" class="col-md-2 col-form-label">receivedon</label>

                <div class="col-md-10"><input class="form-control" type="date" value="<?php echo is_null($inward_master->receivedon) ?'':$inward_master->receivedon->format('Y-m-d'); ?>" id="receivedon" name="receivedon" required>
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
<<<<<<< HEAD
<?php $i++;  ?>
   
  </tbody> 
  @endforeach
   @if(Request::isMethod('GET'))
    {{ $inward_masters->render() }} 
    @endif 
</table>
@else
=======
    <?php $i++;  ?>
    @endforeach    
    </tbody>
    @if(Request::isMethod('GET'))
    {{ $inward_masters->render() }} 
    @endif    
  </table>
   @else
>>>>>>> 49993bb9c54e2be4d5bfb1afed8f7003f8da1328
  <div class="alert alert-info" role="alert">
                    <strong>No Inward_masters Found!</strong>
                </div>
 @endif
</div>
</div>
@include('includes.footer')
