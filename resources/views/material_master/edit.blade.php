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
<form role="form" method="post" action="{{Request::root()}}/material_master/edit-material_master-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $material_master->id ?>"   name="material_master_id">


      <div class="mb-3">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $material_master->name ?>" class="form-control" id="name" name="name">
  </div>
    <div class="mb-3">
    <label for="rate">Rate:</label>
    <input type="text" value="<?php echo $material_master->rate ?>" class="form-control" id="rate" name="rate">
  </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-primary"><a href="\material_master" class="" style="color: white">Cancel</a></button>
  </form>
</div>
</div></div>
</div></div>
@include('includes.footer')