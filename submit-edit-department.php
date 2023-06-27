<?php
  require_once('functions/function.php');
  needtologin();

  if(!empty($_POST))
  {

    $department_slug=$_POST['slug'];
    $department_name=$_POST['name'];
    
    $update="UPDATE department SET department_name='$department_name' WHERE department_slug='$department_slug'";
  

    $Q=mysqli_query($con,$update);

    if($Q){

      $_SESSION['success_alert']='2';
      header('Location: all-department.php');

    }else{
      $_SESSION['success_alert']='3';

      header('Location: edit-department.php');

    }


  }


?>



