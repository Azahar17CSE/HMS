<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM department ORDER BY department_id DESC';
  $departments=mysqli_query($con,$select);

  $select1='SELECT * FROM room ORDER BY room_id DESC';
  $rooms=mysqli_query($con,$select1);

  $id=$_GET['v'];
  $select="SELECT * FROM user where slug='$id'";

  $Query=mysqli_query($con,$select);
  $data=mysqli_fetch_assoc($Query);

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
          
              <b>View Student Information</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <div class="card-body">
            
            <div class="row">
            <div class="col-md-2"></div>
            
            <div class="col-md-8">
              <table class="table table-striped table-bordered view_table">
                <tr>                  
                  
                  <td>Student ID</td>
                  
                  
                  <td>:</td>
                  <td>
                  
                    <?=$data['sid']?>
                  </td>
                
                </tr>            
                <tr>
                  
                  <td>Student Name</td>
                  <td>:</td>
                  
                  <td>
                    <?=$data['name']?>
                  
                  </td>
                </tr>
                
                <tr>
                  <td>Student Email</td>
                            
                  
                  
                  <td>:</td>
                  <td>
                      <?=$data['email']?>
                  
                  </td>
                </tr>
                
                <tr>
                  <td>Student Mobile</td>
                  <td>:</td>
                  <td>
                      <?=$data['mobile']?>
                
                   
                   
                  </td>
                </tr>
                <tr>
                  
                  <td>Student Address</td>
                  
                  
                  <td>:</td>
                  
                  <td>
                      <?=$data['address']?>
                  </td>
                </tr>

                <tr>
                  <td>Student Joining Date</td>
                  <td>:</td>
                  <td>
                      <?=$data['joining_date']?>
                  </td>
                </tr>
                <tr>
                  <td>Student Department</td>
                  <td>:</td>
                  <td>
                    <?php   
                      foreach($departments as $department){                    
                        
                        if($department['department_id']==$data['department_id']){                          
                        
                          echo $department['department_name'];
                        }
                      
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Student Room</td>
                  <td>:</td>
                  <td>
                    <?php   
                      foreach($rooms as $room){                    
                        if($room['room_id']==$data['room_id']){                          
                          echo $room['room_no'];
                        }
                      }
                    
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Student Photo</td>
                  <td>:</td>
                  <td>
                  <?php 
                    if($data['photo']!=''){
                  ?>
                      <img src="uploads/<?=$data['photo']?>" height="40px" width="40px">
                  <?php 
                    }else{
                  ?>
                      <img src="assets/img/avatar.jpg" height="40px" width="40px">
                  <?php 
                    }
                  ?>  
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-2"></div>
            </div>
          </div>
          <div class="card-footer text-muted">

          </div>
        </div>
      </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->
  
<?php
  get_footer();

?>






