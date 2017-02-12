<?php
namespace App\Api;

class ApiBase
{
    public function success($data, $code = self::HTTP_OK, $message = 'ok')
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data
        ];
    }

    public function errors(array $errors, $code = self::HTTP_BAD_REQUEST, $message = 'Bad request')
    {
        return [
            'code' => $code,
            'message' => $message,
            'errors' => $errors
        ];
    }

    const
        HTTP_OK = 200,
        HTTP_CREATED = 201,
        HTTP_NOT_MODIFIED = 304,
        HTTP_BAD_REQUEST = 400,
        HTTP_UNAUTHORIZED = 401,
        HTTP_FORBIDDEN = 403,
        HTTP_NOT_FOUND = 404,
        HTTP_INTERNAL_ERROR = 500
    ;
}