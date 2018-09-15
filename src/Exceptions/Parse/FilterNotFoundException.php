<?php

namespace Ketan4373\RestAPI\Exceptions\Parse;

use Ketan4373\RestAPI\Exceptions\ApiException;
use Ketan4373\RestAPI\Exceptions\ErrorCodes;

class FilterNotFoundException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_FILTER_NOT_FOUND;

    protected $message = "Requested filter not found";

}