<?php

/**
 * This exception package handles empty username.
 *
 * @package Open Source Evangelist Agnostic Package
 * @author Surajudeen AKANDE <surajudeen.akande@andela.com>
 * @license MIT <https://opensource.org/licenses/MIT>
 * @link http://www.github.com/andela-sakande
 */

namespace Sirolad\Evangelist\Exceptions;

use Exception;

/*
 * This class returns an exception message for empty username.
*/
class NullUserException extends Exception
{
    //class property
    protected $message;

    //constructor for NullUserException
    public function __construct($message)
    {
        $this->message = $message;
    }

    //getter for NullUserException message
    public function getExceptionMessage()
    {
        return $this->message;
    }
}
