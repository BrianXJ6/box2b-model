<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler {

    protected $dontReport = [];
    protected $dontFlash  = ['current_password', 'password', 'password_confirmation'];

    protected function invalidJson($request, ValidationException $exception) {
        return response()->json([
            'status'  => 'error',
            'message' => $exception->getMessage(),
            'errors'  => $exception->errors(),
        ], $exception->status);
    }

    protected function convertExceptionToArray(Throwable $e) {
        return config('app.debug') ? [
            'status'    => 'error',
            'message'   => $e->getMessage(),
            'exception' => get_class($e),
            'file'      => $e->getFile(),
            'line'      => $e->getLine(),
            'trace'     => collect($e->getTrace())->map(function ($trace) {
                return Arr::except($trace, ['args']);
            })->all(),
        ] : [
            'status' => 'error',
            'message' => $this->isHttpException($e) ? $e->getMessage() : 'Server Error',
        ];
    }
}
