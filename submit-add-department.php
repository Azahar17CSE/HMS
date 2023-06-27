<?php
  require_once('functions/function.php');
  needtologin();

  if(!empty($_POST))
  {
    
    
    $slug=uniqid('DEPARTMENT');

    $name=$_POST['name'];
    
    
    $insert="insert into department(department_name,department_slug) 
    values ('$name','$slug')";

    $Q=mysqli_query($con,$insert);

    if($Q){
      $_SESSION['success_alert']='1';
      header('Location: all-department.php');
    }else{
      
      $_SESSION['success_alert']='8';
      
      header('Location: add-department.php');
    
    
    }

  
  }    
?>


