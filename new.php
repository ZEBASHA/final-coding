<?php
$con =  mysqli_connect('localhost','root');
 if($con){
	 echo "Successful";
 }else{
	 echo "falied";
 }
 mysqli_select_db($con, 'testuserdata');
 $username = $_POST['username'];
 $Email = $_POST['Email'];
 $contect = $_POST['contect'];
 $comment = $_POST['comment'];
 
 $query = "insert into userinfodata (username,Email,contect,comment)
 values ('$username', '$Email', '$contect', '$comment')";
 mysqli_query($con,$query );
 ?>