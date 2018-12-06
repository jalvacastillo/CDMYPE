<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\QueryException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($request->wantsJson()) {

            if ($exception instanceof ValidationException) {

                $errors = implode("<br>",$exception->validator->messages()->all());
                return  Response()->json(['error' => $errors, 'code' => 422], 422);
            }

            if ($exception instanceof ModelNotFoundException) {
                return  Response()->json(['error' => 'No se encontro ningun registro.', 'code' => 404], 404);
            }

            if ($exception instanceof AuthenticationException) {
                return $this->unauthenticated($request, $exception);
            }

            if ($exception instanceof AuthorizationException) {
                return  Response()->json(['error' => 'No posee permisos para ejecutar esta acción.', 'code' => 403], 403);
            }

            if ($exception instanceof NotFoundHttpException) {
                return  Response()->json(['error' => 'URL Invalida.', 'code' => 404], 404);
            }

            if ($exception instanceof MethodNotAllowedHttpException) {
                return  Response()->json(['error' => 'Peticion no valida.', 'code' => 405], 405);
            }

            if ($exception instanceof JWTException) {
                return  Response()->json(['error' => $exception->getMessage(), 'code' => $exception->getStatusCode()], $exception->getStatusCode());
            }

            if ($exception instanceof QueryException) {
                return  Response()->json(['error' => $exception->getMessage(), 'code' => 500], 500);
                // return  Response()->json(['error' => 'Hubo un problema con la base de datos', 'code' => 500], 500);
            }

            if ($exception instanceof HttpException) {
                return  Response()->json(['error' => $exception->getMessage(), 'code' => $exception->getStatusCode()], $exception->getStatusCode());
            }
        }

        return parent::render($request, $exception);
    }

}
