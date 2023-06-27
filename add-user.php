<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM department ORDER BY department_id DESC';
  $departments=mysqli_query($con,$select);

  $select1='SELECT * FROM room ORDER BY room_id DESC';
  $rooms=mysqli_query($con,$select1);
    
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
  
              <b>Add Student</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
              </div>          
            </div>
          
          </div>
          
    
          <form method="post" action="submit-add-user.php" enctype="multipart/form-data">  
          <div class="card-body">
          
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">ID <span class="text-danger">*</span></label>
              
                <div class="col-sm-8">
              
              
                <input type="text" class="form-control" id="" name="sid" required>
                </div>
              
                <div class="col-sm-1"></div>
              </div>    
              
              <div class="form-group row">
              <label for="" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
    
              <div class="col-sm-8">          
                  <input type="text" class="form-control" id="" name="name" required>
                
              
                </div>
          
                <div class="col-sm-1"></div>
              </div>

              <div class="form-group row">
              


                <label for="" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                
                  <input type="email" class="form-control" id="email" name="email" required>
                
                
                </div>
                <div class="col-sm-1"></div>
              
              </div>
              <div class="form-group row">
              
                
                <label for="" class="col-sm-3 col-form-label">Mobile <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="mobile" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              
              
              <div class="form-group row">
              
                <label for="" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="address" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Joining Date <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="" name="joining_date" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Department <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control" id="" name="department" required>
                  <option value="" selected="selected">Select Department</option>
                  
                  <?php   
                  foreach($departments as $department){
                  ?>
                  <option value="<?=$department['department_id']?>">
                      <?=$department['department_name']?>
                  </option>
                  <?php   
                    }
                  ?>
                  </select>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Room <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control" id="" name="room" required>
                  <option value="" selected="selected">Select Room</option>
                  
                  <?php     
                  foreach($rooms as $room){
                    
                    $id=$room['room_id'];
                    $select="SELECT * FROM user WHERE room_id='$id'";
                    
                    $totals=mysqli_query($con,$select);
                    $c=0;
                  
                  ?>


                  <?php foreach($totals as $total){ $c=$c+1; } if($c<5){ ?>
                  <option value="<?=$room['room_id']?>">
                      
                      <?=$room['room_no']?>
                  </option>
                  
                  <?php   
                  
                  
                      }
                    }
  
                  ?>
                  </select>
                
                
                </div>
                
                <div class="col-sm-1"></div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              
              
              
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="repassword" name="repassword" required>
                </div>
                <div class="col-sm-1"></div>
              
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Photo <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="file" onchange="readURL(this);" class="form-control" id="" name="photo" required>
                  <br>
                  <img id="image_preview" src="#" alt=""/>
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














