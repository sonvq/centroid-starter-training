<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Debug\Exception\FlattenException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use Modules\Core\Exceptions\ApiException;
use Jenssegers\Agent\Agent;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $reque st
     * @param  \Exception $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {

        if ($e instanceof HttpException && $e->getStatusCode() == 403) {
            if ($user = \Sentinel::getUser()) {
                \Sentinel::logout();
            }
            flash()->error(trans("user::messages.you dont have any permission to access admin page please contact to administrator"));
            return redirect()->route('login');
        }

        if ($e instanceof ApiException){
            return $e->render();
        }

        if(\Request::wantsJson()){
            return $this->renderApiResponseError($e);
        }

        return parent::render($request, $e);
    }

    protected function renderApiResponseError(Exception $e)
    {
        $data = [
            'error'=>true,
            'code'=>$e->getCode(),
            'message'=>$e->getMessage(),
        ];

        if(config('app.debug')){
            $data['exception'] = [
                'line'=>$e->getLine(),
                'file'=>$e->getFile()
        ];
        }

        if(method_exists($e,'errors')){
            $data['errors'] = $e->errors();
        }

        return $data;
    }

//    protected function convertExceptionToResponse(Exception $e)
//    {
//        if (\View::exists('layouts.master')) {
//
//            $e = FlattenException::create($e);
//
//            $handler = new SymfonyExceptionHandler(config('app.debug'));
//
//            $decorated = $this->decorate($handler->getContent($e), $handler->getStylesheet($e));
//
//            $errorFile = 'errors.' . $e->getStatusCode();
//            return response()->view('errors.' . $e->getStatusCode(), ['exception' => $decorated], $e->getStatusCode());
//
//        } else {
//            return parent::convertExceptionToResponse($e);
//        }
//    }
}
