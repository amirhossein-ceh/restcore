<?php namespace App\Services;

use Core\Controller;

class Script
{
    const NO_SCRIPT = '<noscript>';
    const NO_SCRIPT2 = '</noscript>';

    public static function JSerror()
    {
        $text = "oops ! your browser isn't support Javascript File's please update them or download the new one . ";
        $script_error = self::NO_SCRIPT . $text . self::NO_SCRIPT2;
        print $script_error;
    }

    public static function sendEmail($to, $subject, $body, $headers)
    {
        $header = "From: " . $headers;

        if (mail($to, $subject, $body, $header)) {
            echo "Sent";
        } else {
            throw new \Exception("Failed to send email !");
        }
    }





}