<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use GuzzleHttp\Exception\RequestException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof RequestException) {
            $response = json_decode($exception->getResponse()->getBody()->getContents(), true);

            return response()->json([
                'errors' => [
                    [
                        'code' => $response['errors'][0]['code'] ?? 'unknown_error',
                        'description' => $response['errors'][0]['description'] ?? 'An unknown error occurred',
                    ],
                ],
            ], 400);
        }

        return parent::render($request, $exception);
    }
}
