<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
    
  if($_SESSION['success_alert']=='8'){
  ?>
    <script>
      swal({title: "Opps!", text: "", icon: "error", button: "OK",});
    </script>
<?php
    $_SESSION['success_alert']='0';
  }
?>


<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-light">
            <div class="row">
              <div class="col-md-10 card_header_text">
                <b>Add New Room</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            
            </div>
          </div>
          
          <form method="post" action="submit-add-room.php" enctype="multipart/form-data">
            
          <div class="card-body">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">No: <span class="text-danger">*</span></label>
          
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="no" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
          
          </div>
          


          <div class="card-footer text-muted text-center">
          
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          
          </form>
        </div>
      
      </div>        
      <!-- /.content -->
      
    </div>
    <!-- /.content-wrapper -->
  
<?php
  
  
  get_footer();


?>




