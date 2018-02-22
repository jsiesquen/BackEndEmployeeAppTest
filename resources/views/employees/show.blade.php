@extends('master')
@section('title', 'Employee detail')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $employee->name !!}</h2>
                <p> <strong>Email</strong>: {!! $employee->email !!}</p>
                <p> <strong>Phone</strong>: {!! $employee->phone !!}</p>
                <p> <strong>Address</strong>: {!! $employee->address !!}</p>
                <p> <strong>Position</strong>: {!! $employee->position !!}</p>
                <p> <strong>Salary</strong>: {!! $employee->salary !!}</p>
                <p> <strong>Skills</strong>:
                    @foreach (unserialize($employee->skills) as $skill)
                        {{ current($skill) }},
                    @endforeach</p>
            </div>
            <a href="javascript:history.back()" class="btn btn-info">Back</a>
        </div>
    </div>

@endsection