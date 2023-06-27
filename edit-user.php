<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $select='SELECT * FROM department ORDER BY department_id DESC';
  $departments=mysqli_query($con,$select);

  $select1='SELECT * FROM room ORDER BY room_id DESC';
  $rooms=mysqli_query($con,$select1);

  $id=$_GET['e'];
  $select="SELECT * FROM user WHERE slug='$id'";

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
                
                <b>Update Student Information</b>
              </div>
              
              <div class="col-md-2 card_header_for_one_button">  
              </div>
            
            </div>
          </div>
          <form method="post" action="submit-edit-user.php" enctype="multipart/form-data">
            
          <input type="hidden" class="form-control" id="" name="slug" value="<?= $id ?>" required>
          <input type="hidden" class="form-control" id="" name="old_photo" value="<?= $data['photo'] ?>" required>
          <div class="card-body">
              <div class="form-group row">
              
                <label for="" class="col-sm-3 col-form-label">ID <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="sid" value="<?=$data['sid']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="name" value="<?=$data['name']?>" required>
                
                </div>
                <div class="col-sm-1"></div>
              
              </div>
              
              
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
              
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email" value="<?=$data['email']?>" required> 
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Mobile <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="mobile" value="<?=$data['mobile']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="address" value="<?=$data['address']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Joining Date <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="" name="joining_date" value="<?=$data['joining_date']?>" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Department <span class="text-danger">*</span></label>
              
                <div class="col-sm-8">
                  <select class="form-control" id="" name="department" required>
                    <?php   
                    foreach($departments as $department){
                    ?>
                    <option value="<?=$department['department_id']?>" <?php if($department['department_id']==$data['department_id']){ echo "selected"; } ?> >
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
                    <?php   
                      foreach($rooms as $room){
                    
                    ?>  
                    <option value="<?=$room['room_id']?>" <?php if($room['room_id']==$data['room_id']){ echo "selected"; } ?> >
                      <?=$room['room_no']?>
                    </option>
                    <?php   
                    
                      }


                    ?>
                  </select>

                </div>
                <div class="col-sm-1"></div>
              
              </div>
              <div class="form-group row">
              
                <label for="" class="col-sm-3 col-form-label">Photo <span class="text-danger"></span></label>
                
                
                <div class="col-sm-8">
                  <?php 
                
                  if($data['photo']!=''){
                  ?>
                  
                    <img src="uploads/<?=$data['photo']?>" height="40px" width="40px">
                  <?php 
                    }else{
                  ?>
                      <img src="assets/img/avatar.jpg" height="60px" width="60px">
                  <?php 
                    }
                  ?>
                  <br>
                  <br>
                  <input type="file" onchange="readURL(this);" class="form-control" id="" name="photo">
                  <br>
                  <img id="image_preview" src="#" alt=""/>
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-primary">Update</button>
          
          
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





