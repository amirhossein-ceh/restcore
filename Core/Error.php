<?php namespace Core;


use App\Config;

class Error
{
    public static function errorHandler($level, $message, $file, $line)
    {
        if (error_reporting() !== 0) {
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }

    public static function exceptionHandler($exception)
    {
        $code = $exception->getCode();
        if ($code != 404) {
            $code = 500;
        }
        http_response_code($code);

        if (env('APP_DEBUG',false)) {
            echo "<h1 style='text-align: center;'>Fatal error</h1>";
            echo "<p style='text-align: center;'> Uncaught exception = > '<b>" . get_class($exception) . "</b>'</p>";
            echo "<p style='text-align: center; font-family: OCR A Extended;'>Message = > '<b>" . $exception->getMessage() . "</b>'</p>";
            echo "<p style='text-align: center; font-family: OCR A Extended;'> Stack trace : <pre style='text-align: center'>" . $exception->getTraceAsString() . "</pre></p>";
            echo "<p style='text-align: center; font-family: OCR A Extended;'>Throw in = > '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
        } else {
            $log = dirname(__DIR__) . '/storage/logs/' . date('Y-m-d') . '.txt';
            ini_set('error_log', $log);

            $message = "<h1>Fatal error</h1>\n";
            $message .= "<p>Uncaught exception : '" . get_class($exception) . "'</p>\n";
            $message .= "<p>Message : '" . $exception->getMessage() . "'</p>\n";
            $message .= "<p>Stack trace : <pre>" . $exception->getTraceAsString() . "</pre></p>\n";
            $message .= "<p>Throw in : '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>\n";

            error_log($message);

            //view
            return View::renderTemplate("errors.{$code}");
        }
    }

}