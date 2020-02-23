<?php
  $server = 'localhost';
  $userName = 'root';
  $password = '';
  $databaseName = 'cms';

 $connection = mysqli_connect($server,$userName, $password, $databaseName);

 if($connection){
   $sql = "INSERT INTO users (name,district) VALUES('Name from php code', 'district from php code')";
   $status = mysqli_query($connection,$sql);
   if($status)
   {
   	 echo 'Insert Successful!';
   }
   else{
   	 echo 'Error in data insertion';
   }
 }
 else{
    echo 'Not connected. Please check your configuration data';
 }

?>