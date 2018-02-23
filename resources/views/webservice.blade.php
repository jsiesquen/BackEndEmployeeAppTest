@extends('master')
@section('title', 'Services')
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center margin-top-100 editContent">
                    REST Web Service Documentation
                </h1>
                <h3 class="text-center margin-top-100 editContent">Operations available:</h3>
                <br>
                <h4><strong>getEmployees</strong> - GET http://employees.app/api/employees</h4>
                <h4><strong>getSalary</strong> - GET http://employees.app/api/salaries?start=[decimal]&end=[decimal]&page=1</h4>
           </div>
        </div>
    </div>
@endsection