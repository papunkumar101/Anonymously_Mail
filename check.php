<?php

$to = $_REQUEST["tomail"];
$subject = $_REQUEST['subject'];
$txt = $_REQUEST['message'];
$from=$_REQUEST['frommail'];
$headers = "From:$from " . "\r\n";

//SINGLE MAIL SEND
if(isset($_REQUEST["submit1"]) && !empty($to)){
if(mail($to,$subject,$txt,$headers)){
echo'<script>alert("1 mail sent successful");</script>';


header("Location:https://hypercharity.cf/");
echo"<script>window.location.replace('https://hypercharity.cf/');</script>";

exit();
}else{echo"<script>alert('failed to send');</script>";}
}

//BOOM
if(isset($_REQUEST["submit2"]) && !empty($to)){
  for($i=0; $i<=2; $i++){
      if(mail($to,$subject,$txt,$headers)){
  
       echo $i;
       
       }else{echo"<script>alert('failed to send');</script>";}
}
echo'<script>alert("BOOM sent successful");</script>';
echo"<script>window.location.replace('https://hypercharity.cf/');</script>";
exit();
}
?>
 
