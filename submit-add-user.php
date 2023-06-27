<?php
  require_once('functions/function.php');
  needtologin();

  
  if(!empty($_POST)){

     $slug=uniqid('USER');
     
     
     $name=$_POST['name'];
     $email=$_POST['email'];
     
     $mobile=$_POST['mobile'];
     $address=$_POST['address'];
     $sid=$_POST['sid'];
     $joining_date=$_POST['joining_date'];
     $password=md5($_POST['password']);
     $repass=md5($_POST['repassword']);
     $department=$_POST['department'];
     $room=$_POST['room'];
     $image=$_FILES['photo'];
     
     $imageName='user_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    
     $insert="insert into user(name,email,mobile,address,sid,joining_date,password,photo,department_id,room_id,role_id,slug) 
     values ('$name','$email','$mobile','$address','$sid','$joining_date','$password','$imageName','$department','$room','2','$slug')";

     if($password==$repass){
      $Q=mysqli_query($con,$insert);

      if($Q){
       move_uploaded_file($image['tmp_name'], 'uploads/'.$imageName);

       $_SESSION['success_alert']='1';
       header('Location: all-user.php');

      }
     }else{
       $_SESSION['success_alert']='8';
       header('Location: add-user.php');
     }

  }    
?>




