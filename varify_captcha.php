<?php
 

  if(!empty($_POST['g-recaptcha-response']))
  {
        $secret = '6Lcax-MaAAAAAIn24kryOA6cUJ-48TflnXe9ApGG';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        if($responseData->success)
	        $message = "g-recaptcha varified successfully";
        else
	        $message = "Some error in vrifying g-recaptcha";
	echo $message;
   }
?>
