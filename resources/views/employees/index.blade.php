@extends('master')
@section('title', 'Employees Listing')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Employees </h2>
            </div>
            @if ($employees->isEmpty())
                <p> Employees not found.</p>
            @else
                {!! Form::open(array(   'rout' => 'queries.search',
                                        'class'=>'form navbar-form navbar-right searchform')) !!}
                {!! Form::text('search', null,
                                       array('required',
                                            'class'=>'form-control',
                                            'placeholder'=>'Search for email...')) !!}
                {!! Form::submit('Search',
                                           array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                        {!! $employees->render() !!}
                    @foreach($employees as $employee)
                        <tr>
                            <td>
                                <a href="{!! action('EmployeesController@show', $employee->tokenId) !!}">{!! $employee->name !!}</a>
                            </td>
                            <td>{!! $employee->email !!}</td>
                            <td>{!! $employee->position !!}</td>
                            <td>$ {{ number_format($employee->salary, 2, '.', ',') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection