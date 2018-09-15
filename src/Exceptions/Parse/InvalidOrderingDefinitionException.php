<?php

namespace Ketan4373\RestAPI\Exceptions\Parse;

use Ketan4373\RestAPI\Exceptions\ApiException;
use Ketan4373\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}