<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM department ORDER BY department_id DESC';
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
                    <b>All Department</b>
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
                        <th>Department</th>
                    
                        <th>Total Student in Hall</th>
                        <th>Manage</th>
                      
                      </tr>
                

                    </thead>
                    <tbody>
                    
                      <?php
                        foreach($Query as $data){

                          $department=$data['department_id'];
                          $select="SELECT * FROM user WHERE department_id='$department'";
                          $students=mysqli_query($con,$select);
                          $c=0;
                      ?>
                      
                        <tr>
                      
                      
                          <td><?= $data['department_name']; ?></td>
                            
                          <td><?php foreach($students as $student){ $c=$c+1; } echo $c; ?></td>
                          
                          <td> 
                            <a href="edit-department.php?e=<?= $data['department_slug']; ?>"><i class="fas fa-edit"></i></a>
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







