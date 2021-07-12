<?php


namespace Psr\Log;

use Psr\Log;


class Logger implements LoggerInterface
{
    public function emergency($message, array $context = array()):void
    {

        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function alert($message, array $context = array()):void
    {
        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function critical($message, array $context = array()):void
    {

        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function error($message, array $context = array()):void
    {
        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function warning($message, array $context = array()):void
    {
        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }
    public function notice($message, array $context = array()):void
    {
        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function info($message, array $context = array()):void
    {
        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array $context
         * @return void
         */
    }

    public function debug($message, array $context = array()):void
    {
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return void
         */

        $message = "User {username} created";
        $context = array('username' => 'bolivar');
        echo interpolate($message, $context);

    }

    public function log($level, $message, array $context = array())
    {


    }

    /**
     * Interpolates context values into the message placeholders.
     */
    private function interpolate($message, array $context = array())
    {
        // build a replacement array with braces around the context keys
        $replace = array();
        foreach ($context as $key => $val) {
            // check that the value can be cast to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }

        var_dump(interpolate());

        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }




//// a message with brace-delimited placeholder names
//$message = "User {username} created";
//
//// a context array of placeholder names => replacement values
//$context = array('username' => 'bolivar');
//
//// echoes "User bolivar created"
//echo interpolate($message, $context);

}