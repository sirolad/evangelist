<?php

namespace Sirolad\Evangelist\Exceptions;

use Exception;

class NullUserException extends Exception
{
    public function message()
    {
        return 'You have provided an empty username.Kindly input a valid one.';
    }
}
