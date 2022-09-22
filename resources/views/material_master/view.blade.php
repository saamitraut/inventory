@include('includes.header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Branch</h4>
 
<div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title"><a href="\material_master">Default</a></h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">name  :  <?php echo $material_master->name ?></li>
        <li class="list-group-item">rate  :  <?php echo $material_master->rate ?></li>        
      </ul>
        
</div></div></div>
</div></div>

@include('includes.footer')

