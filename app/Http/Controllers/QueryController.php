<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        $query      = $request->post('search');
        $employees  = Employee::where('email', 'LIKE', "%{$query}%")->paginate(env('PER_PAGE_RESULT'));

        return view('employees.index', compact('employees'));
    }
}
