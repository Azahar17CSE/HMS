<?php
  require_once('functions/function.php');
  needtologin();

  if(!empty($_POST))
  {

    $room_slug=$_POST['slug'];
    $no=$_POST['no'];
    
    $update="UPDATE room SET room_no='$no' WHERE room_slug='$room_slug'";
  

    $Q=mysqli_query($con,$update);

    if($Q){

      $_SESSION['success_alert']='2';
      header('Location: all-room.php');

    }else{
      $_SESSION['success_alert']='3';

      header('Location: edit-room.php');

    }


  }


?>



