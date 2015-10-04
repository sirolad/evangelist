<?php

namespace Sirolad\Evangelist\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function message()
    {
        return 'User Not Found.';
    }
}
