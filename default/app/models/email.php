<?php
class Email {
    
    public static function enviar($destino, $html, $from, $asunto){

        $header = "From:" . $from . "\nReply-To:" . $from . "\n";
        $header = $header . "X-Mailer:PHP/" . phpversion() . "\n";
        $header = $header . "Mime-Version: 1.0\n";
        $header = $header . "Content-Type: text/html";

        mail($destino, $asunto, $html, $header) or die("Su mensaje no pudo enviarse.");
    }
}
?>
