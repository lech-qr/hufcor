<?php

    $imie 	= $_POST["imie"];
    $email 	= $_POST["email"];
    $temat 	= $_POST["temat"];
    $tresc 	= $_POST["tresc"];

    $nadawca        =       'formularz@serwer044295.home.pl';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' .$nadawca . "\r\n" .
                'BCC: hugo@czuby.net';

    $title = 'Formularz - hufcor.pl';
    
    $message = <<<EOD

<!DOCTYPE html>
<html>
<head>
<title>Formularz - hufcor.pl</title>
</head>

<body style="width: 800px; display: block; margin: 0 auto;">
            
    <p style="font-size: 120%; font-weight: bold; text-align: center;">Formularz kontaktowy z hufcor.pl:</p>        
            
    <dl style="line-height: 1.6em;">
        <dt style="display: inline; margin: 0; font-weight: bold; width: 30%; float: left;">Imię:</dt><dd style="display: inline; margin: 0; width: 70%; float: left;">$imie</dd>
        <dt style="display: inline; margin: 0; font-weight: bold; width: 30%; float: left;">Email:</dt><dd style="display: inline; margin: 0; width: 70%; float: left;">$email</dd>
        <dt style="display: inline; margin: 0; font-weight: bold; width: 30%; float: left;">Temat:</dt><dd style="display: inline; margin: 0; width: 70%; float: left;">$temat</dd>
        <dt style="display: inline; margin: 0; font-weight: bold; width: 30%; float: left;">Wiadomość:</dt><dd style="display: inline; margin: 0; width: 70%; float: left;">$tresc</dd>
    </dl>
            
</body>

</html>            
                
EOD;
        
//if (strlen($imie) == 0  || $_POST['mielonka'] != 'Jeśli widzisz to pole, pozostaw je bez zmian') {
if ( strlen($imie) == 0 ) {
    
        echo ("<script language='JavaScript'>
	    window.alert('Co\u015b posz\u0142o nie tak. Spr\u00f3buj ponownie.')
	    window.location.href='http://hufcor.walltech.pl/#contact';
	    </script>");
    
}
else {
    
    mail( 'lech@jet-it.pl', $title, $message, $headers);

        echo ("<script language='JavaScript'>
	    window.alert('Formularz zosta\u0142 wys\u0142any. Dzi\u0119kujemy!')
	    window.location.href='http://hufcor.walltech.pl/#contact';
	    </script>");

}