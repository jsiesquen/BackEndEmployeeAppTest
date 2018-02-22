@extends('master')
@section('title', 'Services')
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center margin-top-100 editContent">
                    REST Web Service Documentation
                </h1>
                <h3 class="text-center margin-top-100 editContent">Operation available:</h3>
                <br>
                <h4><strong>getSalary</strong> - GET https://employee.app/api/v1/salary?
                    min=integer&
                    max=integer&
                    limit=string&
                    offset=string</h4>
           </div>
        </div>
    </div>
@endsection