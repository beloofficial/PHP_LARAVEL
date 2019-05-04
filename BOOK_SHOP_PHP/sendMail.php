<?php

$headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: name <your@email.com>\r\n";
  $title = '=?UTF-8?B?'.base64_encode( 'заголовок' ).'?=';

$email = 'amantay.or@mail.com';
$text =  '=?UTF-8?B?'.base64_encode( 'Текст' ).'?=';;

  if ( mail( $email, $title, $text, $headers ) )
    {
    	?>
    	<p>Success</p>
    	<?php
    		}
    

  else
exit('ошибка');

?>