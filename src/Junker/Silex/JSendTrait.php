<?php
namespace Junker\Silex;

use Junker\Symfony\JSendResponse;
use Junker\Symfony\JSendSuccessResponse;
use Junker\Symfony\JSendFailResponse;
use Junker\Symfony\JSendErrorResponse;

trait JSendTrait
{
    public function jsend($status, $data = null, $message = null, $code = null)
    {
        return new JSendResponse($status, $data, $message, $code);
    }

    public function jsendSuccess($data)
    {
        return new JSendSuccessResponse($data);
    }

    public function jsendFail($data)
    {
        return new JSendFailResponse($data);
    }

    public function jsendError($message, $code = null, $data = null)
    {
        return new JSendErrorResponse($message, $code, $data);
    }

}