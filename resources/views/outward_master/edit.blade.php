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
<form role="form" method="post" action="{{Request::root()}}/outward_master/edit-outward_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="{{$outward_master->id }}"   name="outward_master_id">


 <div class="mb-3">
  <label for="defaultSelect" class="form-label">Material</label>
  <select id="material_id" name="material_id" class="form-select">
    <option>Select Material</option>                  
    @foreach($materials as $material)
      <option {{$outward_master->material_id==$material['id']?'selected':''}} value="{{$material['id']}}">{{ $material['name'] }}</option>
    @endforeach
  </select></div>
    <div class="mb-3">
    <label for="material_description">Material_description:</label>
    <input type="text" value="<?php echo $outward_master->material_description ?>" class="form-control" id="material_description" name="material_description">
  </div>
    <div class="mb-3">
    <label for="opening_stock">Opening_stock:</label>
    <input type="text" value="<?php echo $outward_master->opening_stock ?>" class="form-control" id="opening_stock" name="opening_stock">
  </div>
    <div class="mb-3">
    <label for="issued">Issued:</label>
    <input type="number" value="<?php echo $outward_master->issued ?>" class="form-control" id="issued" name="issued">
  </div>
    <div class="mb-3">
    <label for="closing_stock">Closing_stock:</label>
    <input type="number" value="<?php echo $outward_master->closing_stock ?>" class="form-control" id="closing_stock" name="closing_stock">
  </div>
    <div class="mb-3">
       <label for="unit_id">Unit_id:</label>
    <input type="number" value="<?php echo $outward_master->unit_id ?>" class="form-control" id="unit_id" name="unit_id">
  </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-primary"><a href="\outward_master" class="" style="color: white">Cancel</a></button>
</form>
</div></div></div></div></div>

@include('includes.footer')


