<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $employees = Employee::all()->toArray();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        try {
            $employees = new Employee([
                'name' => $request->input('name'),
                'position' => $request->input('position'),
                'age' => $request->input('age'),
                'salary' => $request->input('salary'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'skills' => $request->input('skills')
            ]);
            $employees->save();
            return response()->json(['status'=>true, 'Employee Saved!'], 200);
        } catch (\Exception $exception) {
            Log::critical("Could not saved employee: {$exception->getCode()} , {$exception->getLine()} , {$exception->getMessage()}");
            return response('Failed Record', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tokenId
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function show($tokenId)
    {
        try {
            $employee = Employee::whereTokenid($tokenId)->firstOrFail();

            if ($employee) {
                return response()->json(['Reference are not exist'], 404);
            }

            return response()->json($employee, 200);
        } catch (\Exception $exception) {
            Log::critical("Could not retrieve data: {$exception->getCode()} , {$exception->getLine()} , {$exception->getMessage()}");
            return response('General Fail', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $tokenId
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function destroy($tokenId)
    {
        try {
            $employee = Employee::whereTokenid($tokenId)->firstOrFail();

            if ($employee) {
                return response()->json(['Reference are not exist'], 404);
            }
            $employee->delete();

            return response()->json('Employee deleted!', 200);
        } catch (\Exception $exception) {
            Log::critical("Could not retrieve data: {$exception->getCode()} , {$exception->getLine()} , {$exception->getMessage()}");
            return response('General Fail', 500);
        }
    }
}
