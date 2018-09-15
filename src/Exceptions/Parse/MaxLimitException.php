<?php
namespace Ketan4373\RestAPI\Exceptions\Parse;

use Ketan4373\RestAPI\Exceptions\ApiException;
use Ketan4373\RestAPI\Exceptions\ErrorCodes;

class MaxLimitException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_MAX_LIMIT;

    protected $message = "Requested more records than maximum limit in single request";
}