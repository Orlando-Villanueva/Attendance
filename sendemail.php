<?php
    require 'vendor/autoload.php';

    class SendEmail{
        public static function SendMail($to,$subject,$content){
            $key = "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";

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("orlandovillanueva@gmail.com", "Orlando Villanueva");
            $email->setSubject($subject);
            $email->addTo($to);
            // can be html
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo "Caught email exception " . $e->getMessage() . "\n";
                return false;
            }
        }
    }
?>