<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM room ORDER BY room_id DESC';
  $Query=mysqli_query($con,$select);

  if($_SESSION['success_alert']=='1'){
  ?>
  <script>
    swal({title: "Done!", text: "", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='2'){
  ?>
  <script>
    swal({title: "Done!", text: "", icon: "success", button: "OK",});
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
                    <b>All Room</b>
                  </div>
  
                  <div class="col-md-2 card_header_for_one_button">
  
                  
                  </div>
                </div>
              
              </div>
              <div class="card-body">
              
                <div class="table-responsive">
                
                
                  <table class="table table-striped table-bordered" id="dataTable">
                    <thead>
                  
                      <tr>
                        <th>Room no</th>
                    
                        <th>Manage</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    
                      <?php
                        foreach($Query as $data){
                      ?>
                        <tr>
                          <td><?= $data['room_no']; ?></td>
                          
                          </td>
                          <td>
                           
                          
                          <a href="edit-room.php?e=<?= $data['room_slug']; ?>"><i class="fas fa-edit"></i></a>
                      
                          </td>
                        </tr>
                      <?php
                        }
                      
                      
                      ?>
                  
                  </tbody>
                  </table>
                
                
                </div>
              
              </div>
              <div class="card-footer text-muted">

              </div>
            </div>
          </div>
        
        </div>
      </div> 
    
    
    </section>         
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<?php


  get_footer();

?>

<script>

$(document).ready(function(){
  

  $('#dataTable').DataTable();
  

});


</script>






