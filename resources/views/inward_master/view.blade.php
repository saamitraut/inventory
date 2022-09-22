@include('includes.header')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Material</h4>

      <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
      <div class="card h-100">
        <div class="card-body">
          
          <h5 class="card-title">{{$materials[$inward_master->material_id]['name']}}</h5>
          <h6 class="card-subtitle text-muted">{{$inward_master->material_description}}</h6>
        </div>
        
        <img class="card-img-top" src="/assets/img/elements/2.jpg" alt="Card image cap">
        <div class="card-body">
  
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   received  :  <?php echo $inward_master->received ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   return  :  <?php echo $inward_master->return ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   unit  :  {{$units[$materials[$inward_master->material_id]['unit']-1]['name'] }}
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   rate  :  <?php echo $inward_master->rate ?>
  </div>
</div>
<div class="row d-none">
  <div class="col-xs-12 col-md-10 well">
   amount  :  <?php echo $inward_master->amount ?>
  </div>
</div>
</div></div></div></div></div></div>

@include('includes.footer')