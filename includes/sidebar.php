
<div class="wrapper">
  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
  
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    </ul>
  
  
  </nav>
  
  
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class=""><b><?= $_SESSION['name']; ?></b></a>
        
        </div>
      
      
      </div>
      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
      
      
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          

               <?php
                    
                    if($_SESSION['role_id']=='1'){
                
                
                ?>


        <li class="nav-item">          
            <a href="add-user.php" class="nav-link">
              
            


              <i class="nav-icon fas fa-users"></i>
              
              
              <p>
              Add Student
              


              </p>
            
            </a>
          
        </li>


        <li class="nav-item">          

            <a href="all-user.php" class="nav-link">
                          
              <i class="nav-icon fas fa-users"></i>
              
              <p>
              All Student
              

              </p>
            
            </a>
          
        </li>

        <li class="nav-item">          
            <a href="add-department.php" class="nav-link">
              
            

              <i class="nav-icon fas fa-th"></i>              
              <p>
              Add Department
              
              </p>
            
            </a>
          

        </li>
          

        <li class="nav-item">          
            <a href="all-department.php" class="nav-link">
              
            


              <i class="nav-icon fas fa-th"></i>
              
              
              <p>
              All Department
              


              </p>
            
            </a>
          
        </li>
							




        <li class="nav-item">          
            <a href="add-room.php" class="nav-link">
              
            
    
              <i class="nav-icon fas fa-th"></i>
              
              
              <p>
              Add Room
              

              </p>
            


            </a>          
        
        </li>


        


        <li class="nav-item">          
            <a href="all-room.php" class="nav-link">
              
              <i class="nav-icon fas fa-th"></i>
              
              
              <p>
              All Room
              

              </p>
            
            </a>
          

        </li>


            <?php 
		    
              }
              if($_SESSION['role_id']=='2'){
		        ?>
              
        
        <li class="nav-item">                      
      
          <a href="my-profile.php" class="nav-link">
              
            
            <i class="nav-icon fas fa-user"></i>
                  
            <p>

            
              My Profile

            </p>
            
            
          
          </a>
    

          </li>
          <li class="nav-item">                      
      
          
          <a href="update-my-profile.php" class="nav-link">
                
            <i class="nav-icon fas fa-user"></i>
                  
            <p>
        
              Update Profile


            </p>
            
            
          </a>


          </li>
            <?php 
                
              }      
            ?>   


          <li class="nav-item">

          
            <a href="logout.php" class="nav-link">


                <i class="nav-icon fas fa-sign-out-alt"></i>
              
          
                <p>
          
                
                Log Out               
              
                
                </p> 
          
            </a>
          
          </li>


        </ul>
      
      </nav>
      <!-- /.sidebar-menu -->
    
    </div>
    <!-- /.sidebar -->
  
    </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

  <!-- Content Header (Page header) -->


  <!-- /.content-header -->


  <!-- Main content -->
    <section class="content">

      <div class="container-fluid">



