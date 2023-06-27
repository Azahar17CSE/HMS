<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM user ORDER BY id DESC';
  $Query=mysqli_query($con,$select);

  $select='SELECT * FROM department ORDER BY department_id DESC';
  $departments=mysqli_query($con,$select);

  $select1='SELECT * FROM room ORDER BY room_id DESC';
  $rooms=mysqli_query($con,$select1);

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
  }elseif($_SESSION['success_alert']=='3'){
  ?>
  <script>
    swal({title: "Done!", text: "", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='4'){
  ?>
  <script>
    swal({title: "Done!", text: "", icon: "success", button: "OK",});
  
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='5'){
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
        
                    <b>All Student</b>
          
          
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
                        <th>Student ID</th>
                        <th>Student Name</th>
                        
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Student joining date</th>
                        <th>Department</th>              
                        <th>Room</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                    
                      foreach($Query as $data){
                      ?>
                        <tr>
                          <td><?= $data['sid']; ?></td>
                          <td><?= $data['name']; ?></td>
                          <td><?= $data['email']; ?></td>
                          <td><?= $data['mobile']; ?></td>
                          <td><?= $data['joining_date']; ?></td>
                          <td>

                            <?php   
                            
                              foreach($departments as $department){                    
                                if($department['department_id']==$data['department_id']){
                                  
                                  echo $department['department_name'];

                                }
                              }
                            ?>

                          </td>
                          <td>
                            <?php   
                              foreach($rooms as $room){                    
                                if($room['room_id']==$data['room_id']){
                                  
                                  
                                  echo $room['room_no'];
                                
                                }
                              }
                            
                            ?>
                          </td>
                          
                          <td>
                            <a href="view-user.php?v=<?= $data['slug']; ?>"><i class="fas fa-plus-square"></i></a>
                            <a href="edit-user.php?e=<?= $data['slug']; ?>"><i class="fas fa-edit"></i></a>
                            <a href="delete-user.php?d=<?= $data['slug']; ?>"><i class="fas fa-trash-alt"></i></a>
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




