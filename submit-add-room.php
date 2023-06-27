<?php
  require_once('functions/function.php');
  needtologin();

  if(!empty($_POST))
  {
    
    
    $slug=uniqid('ROOM');

    $no=$_POST['no'];
    
    
    $insert="insert into room(room_no,room_slug) 
    values ('$no','$slug')";

    $Q=mysqli_query($con,$insert);

    if($Q){
      $_SESSION['success_alert']='1';
      header('Location: all-room.php');
    }else{
      
      $_SESSION['success_alert']='8';
      
      header('Location: add-room.php');
    
    
    }

  
  }    
?>


