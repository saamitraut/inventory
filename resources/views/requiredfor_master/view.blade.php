@include('includes.header')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Branch</h4>

 <div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
        <h5 class="card-header"><a href="\requiredfor_master">Default</a></h5>
        <div class="card-body">
  <div class="col-xs-12 col-md-10 well">
   name  :  <?php echo $requiredfor_master->name ?>
  </div>

</div></div></div>
</div></div></div>
@include('includes.footer')