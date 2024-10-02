<?php

namespace Fan\Transfer;

use Exception;
use Illuminate\Http\Response;

class TransferException extends Exception
{
    protected $message = 'Transfer exception.';
    protected $code = 400;

    /**
     * Render the exception into an HTTP response.
     */
    public function render(): Response
    {
        return response(
            [
                'message' => $this->getMessage(),
            ],
            $this->getCode()
        );
    }
}
