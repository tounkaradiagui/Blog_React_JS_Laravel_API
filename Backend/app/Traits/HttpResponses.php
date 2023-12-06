<?php

namespace App\Traits;

trait HttpResponses{

    // setting up of the success response
    protected function success($data, $status = 200)
    {
        return response()->json([
            "success"=> true,
            "data"=> $data
        ], $status);
    }

    // The error response come from here
    protected function error($data, $status = 401)
    {
        return response()->json([
            "errors"=> "An error has occurred",
            "data"=> $data,
        ], $status);
    }

}
