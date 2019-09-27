<?php
    
  //Connecting to Database
  $user='root';
  $pass='';
  $db='Customer';
  $db= new mysqli('localhost',$user,$pass,$db) or die("Not able to connect");  
  //Requesting 

      $name=$_POST['Name'];
      $email=$_POST['Email'];
      $number=$_POST['Num'];
      $price=$_POST['Price'];
      $query=$_POST['query'];
      
      $sql="INSERT INTO Detail(Name,Email,Number,Price,Queries) VALUES('".$name."','".$email."',".$number.",".$price.",'".$query."')";
      
      if(mysqli_query($db,$sql))
         echo "Added Succesfully";
      else
         echo "Error".$sql."<br>".$db->error;
  
  $db->close();
  header("refresh:2,url=http://192.168.64.2/iwp_website/index.html");
?>
