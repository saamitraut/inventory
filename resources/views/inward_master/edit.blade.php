@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content-->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Update Branch</h4>  

  <div class="row"><div class="col-md-6">
    <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
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
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-primary"><a href="\inward_master" class="" style="color: white">Cancel</a></button>
</form>
</div></div></div></div></div>

@include('includes.footer')