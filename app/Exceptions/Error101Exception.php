<?php

namespace App\Exceptions;

use Exception;

class Error101Exception extends Exception
{
    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    /*public function report(Exception $exception)
    {
        parent::report($exception);
    }*/

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
	 
	 public function render()
    {
        // ...
    }
	 
}
