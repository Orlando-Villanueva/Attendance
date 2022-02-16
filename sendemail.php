<?php
    require 'vendor/autoload.php';

    class SendEmail{
        public static function SendMail($to,$subject,$content){
            $key = "";

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("orlando@gmail.com", "Beef Orlando");
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