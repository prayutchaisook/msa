<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
          $error_detail=array("Error"=>$e->getMessage(),"File"=>$e->getFile(),"Line"=>$e->getLine());

           if ($request->is('api/*')) {//check ถ้าเป็น ERROR ของ API
                if ($e instanceof NotFoundHttpException)
                {
                  return response(array("Status"=>404,"Message"=>"Api Resouce not found"),404);
                }
                
                return response(array("Status"=>500,"Message"=>"Internal Server Error","Detail"=> $error_detail),500);

         }
           
        return parent::render($request, $e);
    }
}
