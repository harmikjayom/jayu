<?php
if(empty($_POST['g-recaptcha-response']))
{
  return;
}

$secret = '6Lcax-MaAAAAAIn24kryOA6cUJ-48TflnXe9ApGG';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);

$message = !empty($responseData->success) 
              ? "g-recaptcha varified successfully";
              : "Some error in vrifying g-recaptcha";
echo $message;
?>
