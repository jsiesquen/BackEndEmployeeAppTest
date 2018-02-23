<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Employee;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        try {
            $start  = Input::get('start');
            $end    = Input::get('end');

            $employees = Employee::where('salary', '>=', $start)->where('salary', '<=', $end)->paginate(100);

            return response()->json($employees);
        } catch (\Exception $exception) {
            Log::critical("Could not retrieve data: {$exception->getCode()} , {$exception->getLine()} , {$exception->getMessage()}");
            return response('General Fail', 500);
        }
    }
}
