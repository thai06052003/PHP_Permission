<?php

namespace System\Core;

class CustomeException
{
    public function __construct()
    {
        set_exception_handler([$this, 'getException']);
    }
    public function getException ($exception) {
        /* echo $exception->getMessage().'<br>';
        echo $exception->getCode(); */
        $code = $exception->getCode();
        if ($code == 404 || $code == 403) {
            $this->loadView($code, $exception);
        }
        else {
            $this->loadView('errors', $exception);
        }
    }
    public function loadView($code='404', $exception = null) {
        echo view('errors.'. $code, ['exception' => $exception]);
    }

}
