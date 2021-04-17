<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * @param $data
     * @param int $code
     * @return JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data ,'message' => null, 'code' => $code], $code);
    }

    /**
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function errorResponse($message, $code){
        return response()->json(['data' => null ,'message' => $message, 'code' => $code], $code);
    }

    /**
     * @param $message
     * @param $code
     * @return Response
     */
    public function errorMessage($message, $code){
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
