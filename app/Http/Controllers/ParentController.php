<?php

namespace App\Http\Controllers;

use App\Services\ParentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

/**
 * Class ParentController
 * @package App\Http\Controllers
 */
class ParentController extends Controller
{
    use ApiResponser;

    protected $userService;

    public function __construct(ParentService $userServce)
    {
        $this->userService = $userServce;
    }

    /**
     * list all parents from different sources
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $requestData = $request->all();
        $parents = $this->userService->getAllParents($requestData);
        return $this->successResponse($parents);
    }
}
