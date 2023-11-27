<?php

namespace App\Traits;

trait HttpResponses{
    protected function success($data, $message = "", $code = 200)
    {
        return response()->json([
            "success"=> true,
            "data"=> $data,
            // "message"=> $message
        ], $code);
        // return $this->response($code, $message, $data);
    }

    protected function error($data, $message = "", $code)
    {
        return response()->json([
            "error"=> "An error has occurred",
            "data"=> $data,
            "message"=> $message
        ], $code);
        // return $this->response($code, $message, $data);
    }

}
